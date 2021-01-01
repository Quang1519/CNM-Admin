<?php

    class Loader {

        public function __construct(){
            $this->setRequest();
            $this->app = $this->request['app'];
            if($this->request['controller'] == 'logout') {
                session_destroy();
                $this->controller = 'login';
                $this->app = 'admin';
                echo '<script type="text/javascript">window.location="login.html"</script>';

            }
            else {
                $this->controller = $this->request['controller'];
            }
            $this->action = $this->request['action'];
            $controller = $this->loadController();
            $controller->{$this->action}();

        }

        public function loadController(){

            $controllerName = $this->controller.'Controller';

            $pathController = 'app/'.$this->app.'/controller/'.$controllerName.'.php';

            if(file_exists($pathController)) {
                require $pathController;
                $controller = new $controllerName($this->request);

            }
            else {
                die('Controller không tồn tại');
            }
            return $controller;


        }

        public function setRequest(){
            $this->request = array_merge($_GET,$_POST);
        }


    }


?>