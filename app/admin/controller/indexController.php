<?php
  class indexController extends Controller {

    public function index(){

      // $this->model->test();
      // print_r($_SESSION);
      // die();
      $this->view->render('index');
    }

    // public function logout(){
    //   session_destroy();
    //   echo '<script type="text/javascript">window.location="'.URL::createLink('default','index','index').'"</script>';
    // }

  }




?>
