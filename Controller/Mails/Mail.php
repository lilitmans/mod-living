<?php
/**
 * Created by PhpStorm.
 * User: Karen
 * Date: 06.03.2017
 * Time: 11:52
 */

namespace Controller\Mails;

use Core\Controller as BaseController;

class Mail extends BaseController
{
    public function __construct($route,$countRoute)
    {
        parent::__construct();
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            die();
        }

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['login']) && isset($_POST['pass']) && $_POST['login'] == 'log$9#4' && $_POST['pass'] == 'asd*7650'){
                if ($countRoute == 2 && $route[1] == 'feed') {
                    $this->feed($_POST);
                }
            }
        }
    }

    private function feed(array $param)
    {
        $this->result['name'] = $param['name'];
        $this->result['email'] = $param['email'];
        $this->result['sub'] = $param['sub'];
        $this->result['message'] = $param['message'];
        $this->renderMail("Mails/feed",$this->result);
    }
}