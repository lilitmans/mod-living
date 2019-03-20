<?php

namespace administrator\Controller;
use administrator\Core\Controller as BaseController;
use Model\Users as UsersModel;
use Model\PaymentInfo as PaymentInfo;

class Users extends BaseController{

    public function __construct($route , $countRoute)
    {
        parent::__construct();
        if($_SERVER['REQUEST_METHOD'] == 'GET') {
            if ($countRoute == 1 && $route[0] == 'users') {
                $this->index();
            }elseif ($countRoute == 2 && $route[0] == 'users' && is_numeric($route[1])){
                $this->UserInfo($route[1]);
            }
        }

//        if($_SERVER['REQUEST_METHOD'] == 'POST'){
//            if($countRoute == 3 && $route[0] == 'filtrs' && $route[1] == 'update' && is_numeric($route[2])){
//                $this->addItem($route[2]);
//            }elseif($countRoute == 2 && $route[0] == 'filtrs' && $route[1]=='delete'){
//                $this->deleteItem();
//            }elseif($countRoute == 2 && $route[0] == 'filtrs' && $route[1]=='sort'){
//                $this->sortItem();
//            }
//        }
    }

    private function index()
    {
        $oUsersModel = new UsersModel();
        $aUsersModel= $oUsersModel->findAll(array());
        $this->result['result'] = $aUsersModel;
        $this->renderView("Pages/users","users",$this->result);
    }
    private function UserInfo($id){
        $oUsersModel = new UsersModel();
        $aUsersModel= $oUsersModel->FindUserInfo($id);
        $this->result['result'] = $aUsersModel;


        $oPaymentInfo = new PaymentInfo();
        $aPaymentInfo= $oPaymentInfo->findByMultyName(array("user_id"=>$id));
        $payInfo=array();
        for($i=0;$i<count($aPaymentInfo);$i++){
            $payInfo[]= unserialize($aPaymentInfo[0]['information']);
        }
        $this->result['paymant'] = $payInfo;
        $this->renderView("Pages/usersinfo","usersinfo",$this->result);
    }
}
