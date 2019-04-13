<?php

namespace administrator\Controller;
use administrator\Core\Controller as BaseController;
use Model\Categores as CategoresModel;

class Categores extends BaseController{

    public function __construct($route , $countRoute)
    {
        parent::__construct();
        if($_SERVER['REQUEST_METHOD'] == 'GET') {
            if ($countRoute == 1 && $route[0] == 'categores') {
                $this->index();
            }elseif($countRoute == 2 && $route[0] == 'categores' && $route[1]=='add'){
                $this->addCategoresPage(null);
            }elseif($countRoute == 3 && $route[0] == 'categores' && $route[1]=='edit' && is_numeric($route[2])){
                $this->addCategoresPage($route[2]);
            }
        }

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if($countRoute == 2 && $route[0] == 'categores' && $route[1]=='add'){
                $this->addCategores(null);
            }elseif($countRoute == 3 && $route[0] == 'categores' && $route[1]=='edit' && is_numeric($route[2])){
                $this->addCategores($route[2]);
            }elseif($countRoute == 2 && $route[0] == 'categores' && $route[1]=='delete' ){
                $this->deleteCategores();
            }
        }
    }

    private function index()
    {
        $oCategoresModel = new CategoresModel();
        $aCategoresModel = $oCategoresModel->findAll(array());
        $this->result['result'] = $aCategoresModel;
        $this->renderView("Pages/categores/list","list",$this->result);
    }

    private function addCategoresPage($id)
    {
        if(isset($id)){
            $oCategoresModel = new CategoresModel();
            $aCategoresModel = $oCategoresModel->findById($id);
            $this->result['result'] = $aCategoresModel;
        }

        $this->renderView("Pages/categores/add","add",$this->result);
    }
    private function addCategores($id)
    {
        $oCategoresModel = new CategoresModel();
        $url = $this->transliter($_POST['name']);
        if(!isset($id)){
            $oCategoresModel->_post = array(
                "name" => $_POST['name'],
                "url" => $url
            );
            $oCategoresModel->insert();
        }else{
            $oCategoresModel->_put = array(
                "name" => $_POST['name'],
                "url" => $url
            );

            $oCategoresModel->setId($id);
            $oCategoresModel->update();
        }
        $url = "categores";
        $this->headreUrl($url);
        $this->renderView("Pages/categores/add","add",$this->result);
    }
    private function deleteCategores()
    {
        $id = $_POST['id'];
        $mFiltrsModel = new CategoresModel();
        $mFiltrsModel->delFildName = 'id';
        $mFiltrsModel->delValue = $id;
        $mFiltrsModel->delete();
        echo json_encode(array('error'=>true));
    }
}
