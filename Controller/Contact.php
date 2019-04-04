<?php
namespace Controller;
use Core\Controller as BaseController;
use Model\Contact as ContactModel;


class Contact extends BaseController{

    public function __construct($route , $countRoute)
    {
        parent::__construct();
        if($_SERVER['REQUEST_METHOD'] == 'GET') {
            if ($countRoute == 1 && $route[0] == 'contact') {
                $this->index();
            }else if($countRoute == 3 && $route[0] == 'contact' && $route[1] =="test" && is_numeric($route[2] ) ){

                $this->index12();
            }
        }

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if ($countRoute == 1 && $route[0] == 'contact') {
                $this->contactMsg();
            }
        }
    }

    public function index()
    {
        $this->renderView("Pages/contact","contact", $this->result);
    }
    public function index12()
    {
        $this->renderView("Pages/test","test", $this->result);
    }


    private function contactMsg(){
        $mContactModel = new ContactModel();
        $mContactModel->_post=$_POST;
        $_POST['name']="jhfghgfhg";
        $lastId = $mContactModel->insert();
        if($lastId){
            setcookie("ok_mes", '1', time()+5);
        }else{
            setcookie("err_mes", '2', time()+5);
        }
        header('Location:'.$this->baseurl.'/contact');
    }
}