<?php
    namespace Core;

    Class Route{

        private $route;
        private $validPos = array('union','nion','\"','\'','--','.php');
        private $_page;
        private $_globalGet;

        public function __construct()
        {
            if(isset($_GET['route']) && strlen($_GET['route'])>0) {
                $this->route = trim($_GET['route'], '/\\');
            }

            if(count($_GET)>1){
                unset($_GET['route']);
                $this->_globalGet = $_GET;
                $this->validGets();
            }
            $this->validPos();
        }
        
        private function start()
        {
            if(is_null($this->route)){
                new \Controller\Mains;
            }else{
                $route = explode('/', $this->route);
                $countGet = count($route);
                $controllerName = ucfirst($route[0]);

				if($controllerName == 'Mail'){
					
					
					if(strpos($controllerName, "-")){
                        $newContr = '';
                        $exRoute = explode('-',$controllerName);
                        for($i=0;$i<count($exRoute);$i++){
                            $newContr .= ucfirst($exRoute[$i]);
                        }
                        $newContr = str_replace("-", "", $controllerName);
                    }else{
                        $newContr = ucfirst($route[1]);
                    }

                    $includeController = "\Controller\\Mails\\Mail";
                    new $includeController($route,(int)$countGet);

                }else{
					if(strpos($controllerName, "-")){
                        $newContr = '';
                        $exRoute = explode('-',$controllerName);
                        for($i=0;$i<count($exRoute);$i++){
                            $newContr .= ucfirst($exRoute[$i]);
                        }
                      //  $newContr = str_replace("-", "", $controllerName);
                    }else{
                        $newContr = ucfirst($route[0]);
                    }

					 $includeController = "\Controller\\".$newContr;

                    $includeControllerFile = 'Controller/'.$newContr.'.php';
					if(file_exists($includeControllerFile)){
                        new $includeController($route,(int)$countGet);
                    }
				}
            }

        }

        private function validPos()
        {
            if(!is_null($this->route)){
                $this->route = addslashes($this->route);
                foreach($this->validPos as $val){
                    if(strpos($this->route, $val)){
                        $mainController = new \Core\Controller;
                        $mainController->headers('404');
                        die();
                    }
                }
            }
            self::start();
        }
        
        private function validGets()
        { 
            foreach($this->_globalGet as $keys=>&$value){
                foreach($this->validPos as $val){
                    if(strpos($value, $val) || strpos($keys, $val)){
                        $mainController = new \Core\Controller;
                        $mainController->renderNotFound('main');
                        die();
                    }
                }
            }
        }
    }
