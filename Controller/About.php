<?php
namespace Controller;
use Core\Controller as BaseController;



class About extends BaseController{

    public function __construct($route, $countRoute)
    {
        parent::__construct();
        if($_SERVER['REQUEST_METHOD'] == 'GET') {
            if ($countRoute == 1 && $route[0] == 'about') {
                $this->index();
            }
        }

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

        }
    }

    public function index()
    {
        $this->renderView("Pages/about","about", $this->result);
    }
}