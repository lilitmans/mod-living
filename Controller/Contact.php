<?php
namespace Controller;
use Core\Controller as BaseController;
use Model\Contact as ContactModel;


class Contact extends BaseController{

    public function __construct($route , $countRoute)
    {
        parent::__construct();
        if($_SERVER['REQUEST_METHOD'] == 'GET') {
            if ($countRoute == 2 && $route[0] == 'tours' && $route[1] == 'contact') {
                $this->index($route[1]);
            }
        }

//        if($_SERVER['REQUEST_METHOD'] == 'POST'){
//            if ($countRoute == 1 && $route[0] == 'contact') {
//                $this->contactMsg();
//            }
//        }
    }

    public function index()
    {
        $this->result["company-data"] =[
            [
                "icon"      => "location-icon.png",
                "data"      => "РК, 050026, г. Алматы, <br/>Гоголя 201",
                "number"    => "01",
                "type"      => "Адрес"
            ],
            [
                "icon"      => "phone-icon.png",
                "data"      => "8(600) 040-20-65",
                "number"    => "02",
                "type"      => "Номер телефона"
            ],
            [
                "icon"      => "envelope-icon.png",
                "data"      => "info@detour.kz",
                "number"    => "03",
                "type"      => "Почтовый адрес"
            ]
        ];
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
        header('Location:'.$this->baseurl.'/tours/contact');
    }
}