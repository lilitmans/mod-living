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
    private function contactMsg(){
        $mContactModel = new ContactModel();
        $mContactModel->_post=$_POST;
        $lastId = $mContactModel->insert();
        if($lastId){
            setcookie("ok_mes", '1', time()+5);
        }else{
            setcookie("err_mes", '2', time()+5);
        }
        header('Location:'.$this->baseurl.'/contact');
    }
}