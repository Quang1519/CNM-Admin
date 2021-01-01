<?php
  class View {
      public function __construct($request){
          $this->request = $request;
      }

      public function render($view, $page = ''){
        $this->active = $view;
        if($page != ''){
            include 'app/'.$this->request['app'].'/view/pages/'.$page.'.php';
            $this->page = new $page;
            $this->page->data = $this->data;

            include 'app/'.$this->request['app'].'/view/'.$view.'.php';
        }
        else {
            include 'app/'.$this->request['app'].'/view/'.$view.'.php';
        }
      }
  }



?>