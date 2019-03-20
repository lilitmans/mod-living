<?php

namespace administrator\Controller;
use administrator\Core\Controller as BaseController;
use Model\FiltrName;
use Model\Filtrs as FiltrsModel;

class Filtrs extends BaseController{

    public function __construct($route , $countRoute)
    {
        parent::__construct();
        $this->result['own'] = array("url"=>"filtrs", 'controller'=>'filtrs',"table"=>"filtrs",'images_path'=>'../assets/images/filtrs/');


        if($_SERVER['REQUEST_METHOD'] == 'GET') {
            if ($countRoute == 2 && $route[0] == 'filtrs' && is_numeric($route[1])) {
                $this->index($route[1]);
            }elseif($countRoute == 2 && $route[0] == 'filtrs' && $route[1] == 'add'){
                $this->item();
            }elseif($countRoute == 2 && is_numeric($route[1])){
                $this->item($route[1]);
            }
        }

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if($countRoute == 3 && $route[0] == 'filtrs' && $route[1] == 'update' && is_numeric($route[2])){
                $this->addItem($route[2]);
            }elseif($countRoute == 2 && $route[0] == 'filtrs' && $route[1]=='delete'){
                $this->deleteItem();
            }elseif($countRoute == 2 && $route[0] == 'filtrs' && $route[1]=='sort'){
                $this->sortItem();
            }
        }
    }

    private function index($id)
    {
        $mFiltrName = new FiltrName();
        $aFiltrName = $mFiltrName->findById($id);
        $this->result['result']=$aFiltrName;

        $mFiltrsModel = new FiltrsModel();
        $this->result['all_filtr'] = $mFiltrsModel->findByMultyName(
            array(
                "filtr_name_id"=>$id,
                'order'=>array('fild_name'=>'ord','type'=>'ASC')
            )
        );
        $this->renderView("Pages/filtr/filtrs","filtrs",$this->result);
    }

    private function addItem($filtrNameId)
    {

        $mFiltrsModel = new FiltrsModel();
        foreach ($_POST['filtr'] as $val){
            if(!isset($val['id'])){
                $mFiltrsModel->_post = array(
                    "filtr_name_id" => $filtrNameId,
                    "name" => trim($val['name'])
                );
//                if(isset($val['color'])){
//                    $mFiltrsModel->_post['color'] = $val['color'];
//                }
                $mFiltrsModel->insert();
            }else {
                $mFiltrsModel->_put = array(
                    "filtr_name_id" => $filtrNameId,
                    "name" => trim($val['id']['name'])
                );
//                if(isset($val['id']['color'])){
//                    $mFiltrsModel->_put['color'] = $val['id']['color'];
//                }
                $mFiltrsModel->setId($val['id']["id"]);
                $mFiltrsModel->update();
            }
        }

        $url = "filtrs/$filtrNameId";
        $this->headreUrl($url);
    }

    private function deleteItem()
    {
        $id = $_POST['id'];
        $mFiltrsModel = new FiltrsModel();
        $mFiltrsModel->delFildName = 'id';
        $mFiltrsModel->delValue = $id;
        $mFiltrsModel->delete();
        echo json_encode(array('error'=>true));
    }

    private function sortItem()
    {
        $mFiltrsModel = new FiltrsModel();
        $ords = explode(',',$_POST['ords']);
        foreach ($ords as $key => $value) {
            $idVal = explode('_',$value);
            $mFiltrsModel->_put = array(
                'ord'=>$key
            );
            $mFiltrsModel->setId($idVal[1]);
            $mFiltrsModel->update();
        }
        echo json_encode(array('error'=>true));
    }
}
