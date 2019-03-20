<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 2/27/2019
 * Time: 3:54 PM
 */

namespace Model;
use Core\Model;
use PDO as PDO;

class Users extends Model
{

    protected $table = 'users';
    protected $pdoObject;
    public $result;

    public function __construct()
    {
        parent::__construct();
    }
    public function FindUserInfo($id){
        $select = $this->db->prepare(
            "SELECT `users`.* , `plans`.`title`, `plans`.`description` ,`plans`.`price`,`dinner`.`title` as d_title,`dinner`.`description` as d_description,`dinner`.`price` as d_price,`user_types`.`name` as user_t,`country`.`name` as c_name 
                      FROM `users` 
                      JOIN `dinner` ON `dinner`.`id` = `users`.`dinner_id` 
                      JOIN `plans` ON `plans`.`id` =`users`.`plans_id` 
                      JOIN `user_types` ON `user_types`.`id` = `users`.`user_types_id` 
                      JOIN `country` ON `country`.`id` = `users`.`country_id` 
                      WHERE `users`.`id` = ".$id


        );
//        var_dump($select);die;
        $select->execute();
        return $select->fetchAll(PDO::FETCH_ASSOC);
    }
}