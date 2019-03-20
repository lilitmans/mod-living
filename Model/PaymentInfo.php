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

class PaymentInfo extends Model
{

    protected $table = 'payment_info';
    protected $pdoObject;
    public $result;

    public function __construct()
    {
        parent::__construct();
    }
}