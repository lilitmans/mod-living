<?php
namespace Controller;
use Core\Controller as BaseController;



class ToursInKazakhstan extends BaseController{

    public function __construct($route , $countRoute)
    {
        parent::__construct();
        if($_SERVER['REQUEST_METHOD'] == 'GET') {
            if ($countRoute == 2 && $route[0] == 4) {
                $this->index();
            }
        }

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

        }
    }

    public function index()
    {
        $this->renderView("Pages/about","toursInKazakhstan", $this->result);
    }
}