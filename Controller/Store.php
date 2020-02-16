<?php
namespace Controller;
use Core\Controller as BaseController;
use Model\Contact as ContactModel;


class Store extends BaseController
{

    public function __construct($route, $countRoute)
    {
        parent::__construct();
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if ($countRoute == 1 && $route[0] == 'store') {
                $this->index();
            }
        }

    }

    public function index(){

        $this->renderView("Pages/store", "store", $this->result);
    }
}