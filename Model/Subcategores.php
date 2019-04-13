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

class Subcategores extends Model
{

    protected $table = 'sub_cat';
    protected $pdoObject;
    public $result;

    public function __construct()
    {
        parent::__construct();
    }
}