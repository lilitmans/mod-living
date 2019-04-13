<?php

namespace administrator\Controller;
use administrator\Core\Controller as BaseController;
use Model\Subcategores as SubcategoresModel;
use Model\Categores as CategoresModel;

class Subcategores extends BaseController{

    public function __construct($route , $countRoute)
    {
        parent::__construct();
        if($_SERVER['REQUEST_METHOD'] == 'GET') {
            if ($countRoute == 1 && $route[0] == 'subcategores') {
                $this->index();
            }elseif($countRoute == 2 && $route[0] == 'subcategores' && $route[1]=='add'){
                $this->addSubcategoresPage(null);
            }elseif($countRoute == 3 && $route[0] == 'subcategores' && $route[1]=='edit' && is_numeric($route[2])){
                $this->addSubcategoresPage($route[2]);
            }
        }

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if($countRoute == 2 && $route[0] == 'subcategores' && $route[1]=='add'){
                $this->addSubcategores(null);
            }elseif($countRoute == 3 && $route[0] == 'subcategores' && $route[1]=='edit' && is_numeric($route[2])){
                $this->addSubcategores($route[2]);
            }elseif($countRoute == 2 && $route[0] == 'subcategores' && $route[1]=='delete' ){
                $this->deleteSubcategores();
            }
        }
    }

    private function index()
    {
        $oSubcategoresModel = new SubcategoresModel();
        $aSubcategoresModel = $oSubcategoresModel->findAll(array());
        $this->result['result'] = $aSubcategoresModel;
        $this->renderView("Pages/subcategores/list","list",$this->result);
    }

    private function addSubcategoresPage($id)
    {
        if(isset($id)){
            $oSubcategoresModel = new SubcategoresModel();
            $aSubcategoresModel = $oSubcategoresModel->findById($id);
            $this->result['result'] = $aSubcategoresModel;
        }
        $oCategoresModel = new CategoresModel();
        $aCategoresModel = $oCategoresModel->findAll(array());
        $this->result['categores'] = $aCategoresModel;

        $this->renderView("Pages/subcategores/add","add",$this->result);
    }
    private function addSubcategores($id)
    {
        $oSubcategoresModel = new SubcategoresModel();
        $url = $this->transliter($_POST['name']);
        if(!isset($id)){
            $oSubcategoresModel->_post = array(
                "name" => $_POST['name'],
                "url" => $url,
                "cid" => $_POST['cid']
            );
            $oSubcategoresModel->insert();
        }else{
            $oSubcategoresModel->_put = array(
                "name" => $_POST['name'],
                "url" => $url,
                "cid" => $_POST['cid']
            );

            $oSubcategoresModel->setId($id);
            $oSubcategoresModel->update();
        }
        $url = "subcategores";
        $this->headreUrl($url);
        $this->renderView("Pages/subcategores/add","add",$this->result);
    }
    private function deleteSubcategores()
    {
        $id = $_POST['id'];
        $oSubcategoresModel = new SubcategoresModel();
        $oSubcategoresModel->delFildName = 'id';
        $oSubcategoresModel->delValue = $id;
        $oSubcategoresModel->delete();
        echo json_encode(array('error'=>true));
    }
}
