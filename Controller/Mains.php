<?php
namespace Controller;
use Core\Controller as BaseController;



class Mains extends BaseController{

    public function __construct()
    {
        parent::__construct();
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            $this->index();
        }else{
            $this->renderNotFound('main');
            die();
        }
    }

    public function index()
    {
        $this->renderView("Pages/main","main",$this->result);
    }
}
