<?php

namespace administrator\Controller;
use administrator\Core\Controller as BaseController;
use Model\FiltrName as FiltrNameModel;

class Filtrname extends BaseController{

    public function __construct($route , $countRoute)
    {
        parent::__construct();
        $this->result['own'] = array("url"=>"filtrname", 'controller'=>'filtrname',"table"=>"filtrname",'images_path'=>'../assets/images/filtrname/');


        if($_SERVER['REQUEST_METHOD'] == 'GET') {
            if ($countRoute == 1 && $route[0] == 'filtrname') {
                $this->index();
            }
        }

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if($countRoute == 2 && $route[0] == 'filtrname' && $route[1]=='add'){
                $this->addItem();
            }else if($countRoute == 2 && $route[0] == 'filtrname' && is_numeric($route[1])){
                $this->updateItem($route[1]);
            }
        }
    }

    private function index()
    {
        $this->renderView("Pages/filtr/filtr_name","filtr",$this->result);
    }

    private function addItem()
    {

        $insertData = array(
            "name"=>trim($_POST['name']),
            "view_type"=>trim($_POST['view_type'])
        );
//        var_dump('$insertData',$insertData);die;
        $mFiltrName = new FiltrNameModel();
        $mFiltrName->_post=$insertData;
        $lastId = $mFiltrName->insert();

        $url = "filtrs/$lastId";
        $this->headreUrl($url);
    }

    private function updateItem($id)
    {
        $updateData = array(
            "name"=>trim($_POST['name']),
            "view_type"=>trim($_POST['view_type'])
        );
        $mFiltrName = new FiltrNameModel();
        $mFiltrName->_put = $updateData;
        $mFiltrName->setId($id);
        $mFiltrName->update();

        $url = "filtrs/$id";
        $this->headreUrl($url);
    }
}
