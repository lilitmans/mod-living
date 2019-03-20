<?php

namespace administrator\Controller;
use administrator\Core\Controller as BaseController;
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
        $oContactModel = new ContactModel();
        $aContactModel = $oContactModel->findAll(array());
        $this->result['result'] = $aContactModel;
        $this->renderView("Pages/contact","contact",$this->result);
    }
}
