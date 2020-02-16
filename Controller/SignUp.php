<?php
namespace Controller;
use Core\Controller as BaseController;
use Model\Country;
use Model\PaymentInfo;
use Model\UserType;
use Model\Dinner;
use Model\Plans;
use Model\Users;


class SignUp extends BaseController{

    public function __construct($route , $countRoute)
    {
        parent::__construct();
        if($_SERVER['REQUEST_METHOD'] == 'GET') {
            if ($countRoute == 1 && $route[0] == 'sign-up') {
                $this->index();
            }
        }

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if ($countRoute == 1 && $route[0] == 'sign-up') {
                $this->index();
            }
        }
    }

    private function index()
    {
        $this->renderView("Pages/login-registration","login-registration", $this->result);
    }

}


