<?php
namespace Controller;
use Core\Controller as BaseController;
use Model\Contact as ContactModel;


class ReturnPolicy extends BaseController
{

    public function __construct($route, $countRoute)
    {
        parent::__construct();
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if ($countRoute == 1 && $route[0] == 'returnpolicy') {
                $this->index();
            }
        }

    }

    public function index(){

        $this->renderView("Pages/returnpolicy", "returnpolicy", $this->result);
    }
}