<?php
namespace Core;

use PDO as PDO;

class Model implements ImplimentFace\QueryRequest{

    private $host = "127.0.0.1";
    private $dbName = "tours";
    private $dbPass = "";
    private $dbUser = "root";
    protected $db;

    private $executeArray = array();

    private $keys = array();
    private $vals = array();

    private $colums = array();
    private $values = array();

    public $_post = array();
    public $_put = array();
    public $_get = array();
    public $_delete = array();

    public $delFildName = NULL;
    public $delValue = NULL;

    public $delResponse = array();


    public function __construct()
    {
        $this->db = new PDO("mysql:host=".$this->host.";dbname=".$this->dbName.";charset=utf8", $this->dbUser, $this->dbPass);
        $this->db->exec("set names utf8");
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    /**
     *
     * @param String
     * @return type array
     *
     */
    public function findAllGroup($group = FALSE)
    {
        $groupBy = NULL;
        if($group) {
            $groupBy = "GROUP BY `$group`";
        }

        if(is_null($groupBy) && !$group){
            $this->pdoObject = $this->db->prepare("SELECT * FROM $this->table");
        }else{
            $this->pdoObject = $this->db->prepare("SELECT * FROM $this->table $groupBy");
        }

        $this->pdoObject->execute();
        $this->result = $this->pdoObject->fetchAll(PDO::FETCH_ASSOC);
        return $this->result;
    }

    protected function _group_by($array, $key)
    {
        $return = array();
        foreach ($array as $val) {
            $return[$val[$key]][] = $val;
        }
        return $return;
    }

    /**
     *
     * @param array $selected
     * @return type
     *
     * array('order'=>array('desc || asc'=>'fild_name'),'limit'=>array('limit'=>(int)2,'start'=>(int)5))
     *
     */
    public function findAll(array $selected)
    {
        if(array_key_exists('order', $selected)) {
            if(array_key_exists('desc', $selected['order'])) {
                $descData = $selected['order']['desc'];
                $order = "ORDER BY `$descData` DESC";
            }
            if(array_key_exists('asc', $selected['order'])) {
                $descData = $selected['order']['asc'];
                $order = "ORDER BY $descData ASC";
            }
        }else{
            $order = NULL;
        }

        if(array_key_exists('limit', $selected)) {
            if(array_key_exists('limit', $selected['limit'])) {
                $limit = $selected['limit']['limit'];
                $fulllimit = "LIMIT $limit";
            }
            if(array_key_exists('start', $selected['limit'])) {
                $start = $selected['limit']['start'];
                $fulllimit = "LIMIT  $start, $limit";
            }
        }else{
            $fulllimit = NULL;
        }

        if(!is_null($order) && !is_null($fulllimit)){
            $select = $order." ".$fulllimit;
        }elseif(!is_null($order) && is_null($fulllimit)){
            $select = $order;
        }elseif(is_null($order) && !is_null($fulllimit)) {
            $select = $fulllimit;
        }else{
            $select = NULL;
        }

        if(is_null($select)){
            $this->pdoObject = $this->db->prepare("SELECT * FROM $this->table");
        }else{
            $this->pdoObject = $this->db->prepare("SELECT * FROM $this->table $select");
        }

        $this->pdoObject->execute();
        $this->result = $this->pdoObject->fetchAll(PDO::FETCH_ASSOC);
        return $this->result;
    }

    public function findUserTypePrice($data,$userType)
    {
        $this->pdoObject = $this->db->prepare("SELECT * FROM `plans` WHERE '".$data."' <=`check_date` AND `check_id` = $userType ORDER BY `check_date` ASC");
        $this->pdoObject->execute();
        return $this->pdoObject->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findById($id=false)
    {
        if($id){
            $this->pdoObject = $this->db->prepare("SELECT * FROM `$this->table` WHERE `id`=:id");
            $this->pdoObject->execute(array(":id"=>$id));
            $this->result = $this->pdoObject->fetch(PDO::FETCH_ASSOC);
        }else{
            $this->pdoObject = $this->db->prepare("SELECT * FROM `$this->table` WHERE `id`=:id");
            $this->pdoObject->execute(array(":id"=>$this->id));
            $this->result = $this->pdoObject->fetch(PDO::FETCH_ASSOC);
        }
        return $this->result;
    }
    /**
     *
     * @param array $param
     * @return type
     * array('fild_name'=>'fild_name','fild_val'=>'fild_val','order'=>array('desc || asc'=>'fild_name'))
     */
    public function findByName(array $param,$multy = FALSE)
    {
        $order = NULL;
        if(array_key_exists('order', $param)) {
            if(array_key_exists('desc', $param['order'])) {
                $descData = $param['order']['desc'];
                $order = "ORDER BY `$descData` DESC";
            }
            if(array_key_exists('asc', $param['order'])) {
                $descData = $param['order']['asc'];
                $order = "ORDER BY `$descData` ASC";
            }
        }else{
            $order = NULL;
        }

        $fildName = $param['fild_name'];
        $fildval = $param['fild_val'];
        $this->pdoObject = $this->db->prepare("SELECT * FROM `$this->table` WHERE `$fildName`=:val $order");
        $this->pdoObject->execute(array(
            ":val"=>$fildval
        ));
        if(!$multy) {
            $this->result = $this->pdoObject->fetchAll(PDO::FETCH_ASSOC);
        }else{
            $this->result = $this->pdoObject->fetch(PDO::FETCH_ASSOC);
        }

        return $this->result;
    }

    /**
     *
     * @param array $param
     * @return type
     * $param array('fild_name'=>'fild_val', 'order'=>array('fild_name'=>'ccccc','type'=>'DESC || ASC'))
     * multy false => fetchAll
     */
    public function findByMultyName(array $param,$multy = FALSE)
    {
        $order = NULL;
        $selectParam = '';
        $i = 0;
        foreach($param as $key=>$val){

            if($key == 'order') {
                $order = "ORDER BY `".$param[$key]['fild_name']."` ".$param[$key]['type']."";
            }else{
                if ($i == 0) {
                    $selectParam .= "`$key`=:$key";
                } else {
                    $selectParam .= " AND `$key`=:$key";
                }
                $this->executeArray[":$key"] = $val;
                $i++;
            }
        }

        $this->pdoObject = $this->db->prepare("SELECT * FROM `$this->table` WHERE $selectParam $order");

        $this->pdoObject->execute($this->executeArray);
        if(!$multy) {
            $this->result = $this->pdoObject->fetchAll(PDO::FETCH_ASSOC);
        }else{
            $this->result = $this->pdoObject->fetch(PDO::FETCH_ASSOC);
        }

        return $this->result;
    }

    /**
     *
     * @param array $param
     * @return type
     * $param array('limit'=>'1', 'start'=>'0')
     *
     */
    public function selectRand(array $param)
    {
        if(array_key_exists('limit',$param)){
            $limit = "LIMIT :start,:limit";
            $select = $this->db->prepare("SELECT * FROM `$this->table` ORDER BY RAND() $limit");

            $select->bindValue(':start',$param['start'],PDO::PARAM_INT);
            $select->bindValue(':limit',$param['limit'],PDO::PARAM_INT);
        }else{
            $select = $this->db->prepare("SELECT * FROM `$this->table` RAND()");
        }

        $select->execute();
        return $select->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     *
     * @param array $param
     * @return type
     * $param array(
     *          'fild_name'=>'fild_val',
     *          'order'=>array('fild_name'=>'DESC || ASC')
     *          'date_range'=>array('fild_name'=>'','from'=>'2017-01-01','to'=>'2017-01-31')
     *          'data'=>array('fild_name'=>'','eq'=>'2017-01-01')
     *          'limit'=>array('start'=>'0','limit'=>'10'))
     * )
     * multy false => fetchAll
     */
    public function findByMultyFiltr(array $param,$multy = FALSE)
    {
        $order = NULL;
        $limit = NULL;
        $date_range = NULL;
        $data = NULL;
        $selectParam = '';
        $i = 0;
        foreach($param as $key=>$val) {
            if ($key == 'order') {
                $order = "ORDER BY `" . $param[$key]['fild_name'] . "` " . $param[$key]['type'] . "";
            }elseif($key == 'date_range'){
                $date_range = "AND (".$param[$key]['fild_name'].">=:from AND ".$param[$key]['fild_name']."<=:to)";
            }elseif($key == 'data'){
                $data = "AND $param[$key]['fild_name']>=:eq";
            }elseif($key == 'limit'){
                $limit = "LIMIT :start,:limit";
            }else{
                if ($i == 0) {
                    $selectParam .= "`$key`=:$key";
                } else {
                    $selectParam .= " AND `$key`=:$key";
                }
                //$execute[":$key"] = $val;
                $i++;
            }
        }

        if(!is_null($limit)){
            $selectLimit = $this->db->prepare("SELECT * FROM `$this->table` WHERE $selectParam $date_range $data $order");
        }
        $select = $this->db->prepare("SELECT * FROM `$this->table` WHERE $selectParam $date_range $data $order $limit");

        $exe = 0;
        foreach($param as $key=>$val) {
            if ($key == 'order') {

            }elseif($key == 'date_range'){
                $select->bindValue(':from',"".$param[$key]['from']." 00:00:00",PDO::PARAM_STR);
                $select->bindValue(':to',"".$param[$key]['to']." 23:59:59",PDO::PARAM_STR);
                if(!is_null($limit)){
                    $selectLimit->bindValue(':from',"".$param[$key]['from']." 00:00:00",PDO::PARAM_STR);
                    $selectLimit->bindValue(':to',"".$param[$key]['to']." 23:59:59",PDO::PARAM_STR);
                }
            }elseif($key == 'data'){
                $select->bindValue(':eq',$param[$key]['eq'],PDO::PARAM_STR);
                if(!is_null($limit)){
                    $selectLimit->bindValue(':eq',$param[$key]['eq'],PDO::PARAM_STR);
                }
            }elseif($key == 'limit'){
                $select->bindValue(':start',$param[$key]['start'],PDO::PARAM_INT);
                $select->bindValue(':limit',$param[$key]['limit'],PDO::PARAM_INT);
            }else{
                $select->bindValue(":$key",$val,PDO::PARAM_STR);
                if(!is_null($limit)){
                    $selectLimit->bindValue(":$key",$val,PDO::PARAM_STR);
                }
                $exe++;
            }
        }

        if(!is_null($limit)){
            $selectLimit->execute();
        }
        $select->execute();

        if(!$multy) {
            $this->result['data'] = $select->fetchAll(PDO::FETCH_ASSOC);
            if(!is_null($limit)){
                $this->result['count'] = $selectLimit->rowCount();
            }
        }else{
            $this->result = $select->fetch(PDO::FETCH_ASSOC);
        }
        return $this->result;
    }

    /**
     *
     * @param array $param
     * @return type
     * $param array('fild_name'=>'fild_val')
     * $order array('fild_name'=>'ASC || DESC')
     * multy false => fetchAll
     */
    public function findByMultyValue(array $param,array $order,array $limit)
    {
        $selectParam = '';
        $i = 0;
        $bindevalue = array();
        foreach($param as $key=>$val){
            if($i==0){
                $selectParam .= "`$key`=:$key";
            }else{
                $selectParam .= " AND `$key`=:$key";
            }
            $bindevalue[":$key"] = $val;
            $i++;
        }

        if(count($order) > 0){
            if(array_key_exists('desc', $order['order'])) {
                $descData = $param['order']['desc'];
                $order = "ORDER BY `$descData` DESC";
            }
            if(array_key_exists('asc', $param['order'])) {
                $descData = $param['order']['asc'];
                $order = "ORDER BY `$descData` ASC";
            }
        }


        $this->pdoObject = $this->db->prepare("SELECT * FROM `$this->table` WHERE $selectParam");

        $this->pdoObject->execute($this->executeArray);
        $this->result = $this->pdoObject->fetchAll(PDO::FETCH_ASSOC);

        return $this->result;
    }

    public function findSeo()
    {
        $this->pdoObject = $this->db->prepare("SELECT * FROM `seo` WHERE `tab_id`=:tab_id && `tab_name`=:tab_name");
        $this->pdoObject->execute(array(
            ":tab_id"=>$this->id,
            ":tab_name"=>$this->table
        ));
        $this->result = $this->pdoObject->fetch(PDO::FETCH_ASSOC);
        return $this->result;
    }

    protected function notFound()
    {
        include ("View/404/main.php");
        die();
    }

    public function delete()
    {
        $this->pdoObject = $this->db->prepare("DELETE FROM `$this->table` WHERE `$this->delFildName`=:val");
        $this->pdoObject->execute(array(
            ':val'=>$this->delValue
        ));

        $this->delResponse['error'] = false;

        if($this->pdoObject->rowCount()>0){
            $this->delResponse['row_count'] = $this->pdoObject->rowCount();
            $this->delResponse['error'] = True;
        }else{
            $this->delResponse['row_count'] = $this->pdoObject->rowCount();
        }

        return $this->delResponse;
    }

    public function deleteByName(array $param)
    {
        $where = implode(' AND ',$param);
        $this->pdoObject = $this->db->prepare("DELETE FROM `$this->table` WHERE $where");
        $this->pdoObject->execute();
        $this->delResponse['error'] = false;

        if($this->pdoObject->rowCount()>0){
            $this->delResponse['row_count'] = $this->pdoObject->rowCount();
            $this->delResponse['error'] = True;
        }else{
            $this->delResponse['row_count'] = $this->pdoObject->rowCount();
        }

        return $this->delResponse;
    }

    public function deletePricing($valmek,$valerku)
    {

        $this->pdoObject = $this->db->prepare("DELETE FROM `$this->table` WHERE $valmek && $valerku");
        $this->pdoObject->execute();

        return true;
    }

    public function insert()
    {

        $this->keys= NULL;
        $this->vals = NULL;

        foreach($this->_post as $key=>$val){
            $this->keys["`".$key."`"] = $key;
            $this->vals[] = ":".$key."";
            $this->executeArray[$key] = $val;
        }

        $key = NULL;
        $val = NULL;

        $this->columns = implode(",",array_keys($this->keys));
        $this->values  = implode(",", $this->vals);
        $this->pdoObject = $this->db->prepare("INSERT INTO `$this->table` ($this->columns)VALUES ($this->values)");

        if($this->pdoObject->execute($this->executeArray)){
            return $this->db->lastInsertId();
        }else{
            return false;
        }
    }

    public function update()
    {
        $this->keys= NULL;
        $execute = array();
        foreach($this->_put as $key=>$val){
            $this->keys["`" . $key . "`=:$key"] = $val;
            $execute[$key] = $val;
        }

        if($this->id){
            $execute[':id'] = $this->id;
        }

        $key = NULL;
        $val = NULL;

        $this->columns = implode(",", array_keys($this->keys));
        $this->pdoObject = $this->db->prepare("UPDATE `$this->table` SET $this->columns WHERE `id`=:id");
        $this->pdoObject->execute($execute);

        if($this->pdoObject->rowCount()>0){
            return true;
        }else{
            return false;
        }
    }

    public function updateSeo()
    {

        $this->keys= NULL;

        foreach($this->_put as $key=>$val){
            $this->keys["`" . $key . "`=:$key"] = $val;
            $this->executeArray[$key] = $val;
        }

        $key = NULL;
        $val = NULL;

        $this->columns = implode(",", array_keys($this->keys));
        $this->pdoObject = $this->db->prepare("UPDATE `$this->table` SET $this->columns WHERE `tab_name`=:tab_name AND `tab_id`=:tab_id");
        $this->pdoObject->execute($this->executeArray);

        if($this->pdoObject->rowCount()>0){
            return true;
        }else{
            return false;
        }
    }

    public function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}