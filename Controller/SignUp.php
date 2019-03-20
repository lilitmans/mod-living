<?php
namespace Controller;
use Core\Controller as BaseController;
use Model\Country;
use Model\PaymentInfo;
use Model\UserType;
use Model\Dinner;
use Model\Plans;
use Model\Users;


class SignUp extends BaseController{

    // for test
    private $urlAmeria = "https://servicestest.ameriabank.am/VPOS";
    private $ClientID = "12f53da3-6fda-48b2-83fe-e89ef5f9a38e";
    private $Username = "3d19541048";
    private $Password = "1lazY2k";

//        private $ClientID = "12f53da3-6fda-48b2-83fe-e89ef5f9a38e";
//    private $Username = "3d19541048";
//    private $Password = "lazY2k";


//    private $ClientID = "3e39b9f4-2db8-4cb9-8798-3952dbb397b1";
//    private $Username = "19533569_api";
//    private $Password = "5f2j02ID167L57Y";

    public function __construct($route , $countRoute)
    {
        parent::__construct();
        if($_SERVER['REQUEST_METHOD'] == 'GET') {
            if ($countRoute == 1 && $route[0] == 'sign-up') {
                $this->index();
            }elseif ($countRoute == 2 && $route[0] == 'sign-up' && $route[1] == 'main') {
                $this->reg();
            }elseif ($countRoute == 2 && $route[0] == 'sign-up' && $route[1] == 'asdasd') {
                $this->testRestPay();
            }elseif ($countRoute == 4 && $route[0] == 'sign-up' && $route[1] == 'payment') {
                $this->paymentDone($route[2],$route[3]);
            }
        }

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if ($countRoute == 2 && $route[0] == 'sign-up' && $route[1] == 'main') {
                $this->userReg();
            }
        }
    }

    private function index()
    {
        $this->renderView("Pages/acquaintance","acquaintance", $this->result);
    }

    private function reg()
    {
        $oPlans = new Plans();
        $aPlans = $oPlans->findAll(array());
        $this->result['plans'] = $aPlans;

        $oDinner = new Dinner();
        $aDinner = $oDinner->findAll(array());
        $this->result['dinner'] = $aDinner;

        $oCountry = new Country();
        $aCountry = $oCountry->findAll(array());
        $this->result['country'] = $aCountry;

        $oUserType = new UserType();
        $aUserType = $oUserType->findAll(array());
        $this->result['user_types'] = $aUserType;

        $this->result['date_now'] = date("Y-m-d");
//        var_dump($this->result['date_now']);die;
        $this->renderView("Pages/sign-up","sign-up", $this->result);
    }
    private function userReg(){
        $mUsers = new Users();

        $aUsers = $mUsers->findByMultyName(array("email"=>$_POST['email']));
        $userDbId = 0;
        if(count($aUsers)==0) {
            $mUsers->_post = $_POST;
            $userDbId = $mUsers->insert();
        }else{
            $userDbId = $aUsers[0]['id'];
            $mUsers->setId($userDbId);
            $mUsers->_put = $_POST;
            $mUsers->update();
        }

        $payment_id = intval(strtotime('now')+intval($userDbId));
        if($payment_id < 0){
            $payment_id = $payment_id*-1;
        }
        $mUsers->setId($userDbId);
        $mUsers->_put = array(
            "payment_id"=>$payment_id
        );
        $mUsers->update();

        $dateCheck = date("Y-m-d");
        $findUserTypePrice = $mUsers->findUserTypePrice($dateCheck,$_POST['plans_id']);
        $memberPrice = intval($findUserTypePrice[0]['price']);
        $totalPrice = $memberPrice;
        if($_POST['dinner_id'] == '2'){
            $totalPrice = $totalPrice + 40;
        }
        $totalPrice = $totalPrice*565;

////////////******************////////////////////////////////

        $PaymentAmount = "10.0"; //$PaymentAmount = "".$totalPrice.".0";
        //API Url
        $url = $this->urlAmeria.'/api/VPOS/InitPayment';
        $paymentId = $payment_id;
        $backUrl = $this->baseurl."/sign-up/payment/".$paymentId."/".$PaymentAmount."/";

        $postData = array(
            "ClientID"=> $this->ClientID,
            "Amount"=> $PaymentAmount,
            "OrderID"=> $paymentId,
            "BackURL"=> $backUrl,
            "Username"=> $this->Username,
            "Password"=>  $this->Password,
            "Description"=> "Registartion",
            "Currency"=> "051"
        );

        $ch = curl_init($url);
        curl_setopt_array($ch, array(
            CURLOPT_POST => TRUE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
            CURLOPT_POSTFIELDS => json_encode($postData)
        ));

        $response = curl_exec($ch);

        if($response === FALSE){
            die(curl_error($ch));
        }

        $responseData = json_decode($response, TRUE);


        $this->result['webService'] = $responseData['PaymentID'];
        $this->result['respcode'] = $responseData['ResponseCode'];
        $this->result['respmessage'] = $responseData['ResponseMessage'];
        $this->renderView("Pages/payment","payment",$this->result);
    }

    private function paymentDone($myPamentId,$PaymentAmount)
    {

        $bUrl = explode("?",$_SERVER['REQUEST_URI']);
        $myGet = explode("&",$bUrl[1]);
        $genGetUrlByArray = [];
        foreach ($myGet as $val){
            $eqVal = explode("=",$val);
            $genGetUrlByArray[$eqVal[0]] = $eqVal[1];
        }
//        var_dump($genGetUrlByArray['paymentID']);
//        var_dump($genGetUrlByArray['paymentID']);
        $url = $this->urlAmeria.'/api/VPOS/GetPaymentDetails';
        $paymentId = $myPamentId;
        $backUrl = $this->baseurl."/sign-up/payment/".$paymentId."/".$PaymentAmount."/";

        $postData = array(
            "PaymentID"=> $genGetUrlByArray['paymentID'],
            "Username"=> $this->Username,
            "Password"=>  $this->Password,
        );

        $ch = curl_init($url);
        curl_setopt_array($ch, array(
            CURLOPT_POST => TRUE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
            CURLOPT_POSTFIELDS => json_encode($postData)
        ));

        $response = curl_exec($ch);

        if($response === FALSE){
            die(curl_error($ch));
        }

        $responseData = json_decode($response, TRUE);
        $mUsers = new Users();
        $aUsers = $mUsers->findByMultyName(array("payment_id"=>$paymentId));
        $mPaymentInfo = new PaymentInfo();
        $mPaymentInfo->_post = array(
            "user_id"=>$aUsers[0]['id'],
            "information"=>serialize($responseData)
        );
        $mPaymentInfo->insert();
//echo "<pre>";
//        var_dump($responseData);die;

        $this->result['Description'] = $responseData['Description'];
        $this->result['PaymentState'] = $responseData['PaymentState'];
        $this->renderView("Pages/payment-done","payment",$this->result);

    }



    private function testRestPay() //
    {

        $lastId = time();
        $PaymentAmount = "10.0";
        //API Url
        $url = $this->urlAmeria.'/api/VPOS/InitPayment';
        $paymentId = $lastId;
        $backUrl = $this->baseurl."/sign-up/payment/".$paymentId."/".$PaymentAmount."/";

        $postData = array(
            "ClientID"=> $this->ClientID,
            "Amount"=> $PaymentAmount,
            "OrderID"=> $paymentId,
            "BackURL"=> $backUrl,
            "Username"=> $this->Username,
            "Password"=>  $this->Password,
            "Description"=> "Registartion",
            "Currency"=> "051"
        );

        $ch = curl_init($url);
        curl_setopt_array($ch, array(
            CURLOPT_POST => TRUE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
            CURLOPT_POSTFIELDS => json_encode($postData)
        ));

        $response = curl_exec($ch);

        if($response === FALSE){
            die(curl_error($ch));
        }

        $responseData = json_decode($response, TRUE);


        $this->result['webService'] = $responseData['PaymentID'];
        $this->result['respcode'] = $responseData['ResponseCode'];
        $this->result['respmessage'] = $responseData['ResponseMessage'];
        $this->renderView("Pages/payment","payment",$this->result);
    }
}


