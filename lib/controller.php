<?php
    class Controller {
        public function __construct($request){
            $this->request = $request;
            $this->setModel();
            $this->setView();

        }

        public function setModel(){
            $modelName = $this->request['app'].'Model';
            require 'app/'.$this->request['app'].'/model/'.$modelName.'.php';
            $this->model = new $modelName($this->request['controller']);
        }

        public function setView(){
            $this->view = new View($this->request);
        }
    }


?>