<?php
  class eventController extends Controller {
    // protected $data;

    // public function __construct($request) {
    //   parent::__construct($request);
    //   // var_dump($this);
    //   $this->view->message = [-1];
    //   if($this->data) {
    //     print_r($data);
    //     die();
    //     $this->view->data = $this->data;
    //   } else {
    //     $this->view->data = $this->data = $this->model->getEvent();
    //   }
      
    //   $this->view->render('event', 'eventTable');
    // }

    public function index(){
      $this->view->message = [-1];
      
      if(isset($_REQUEST['create'])){

        // die(print_r($_REQUEST));

        $data['chongoi'] = $_REQUEST['chongoi'];
        $data['diadiem'] = $_REQUEST['diachi'];
        $data['khachmoi'] = $_REQUEST['khachmoi'];
        $data['thoigian'] = $_REQUEST['batdau']."-".$_REQUEST['ketthuc'];
        // $data['trangthai'] = 0;
        if(isset($_REQUEST['customRadio'])){
          $data['trangthai'] = $_REQUEST['customRadio'];
        }
        else {
          $data['trangthai'] = 1;
        }
        $data['masukien'] = $_REQUEST['masukien'];
        $data['ngay'] =  str_replace("/", "-", $_REQUEST['ngay']);
        // $data['trangthai'] = $_REQUEST['customRadio'];
        $hoatdong = $_REQUEST['hoatdong'];
        // die($hoatdong);

        // if($_REQUEST['create'] == "New") {
        //   $data['trangthai'] = 1;
        //   $message = "Thêm sự kiện mới";
        //   $this->view->message = $this->model->checkEvent($data, $hoatdong, "create", $message);
        // }
        // else {
        //   $message = "Cập nhật sự kiện";
        //   $this->view->message = $this->model->checkEvent($data, $hoatdong, "update", $message);
        // }
      }
      // if($this->data) {
      //   $this->view->data = $this->data;
      // } else {
      //   $this->view->data = $this->data = $this->model->getEvent();
      // }
      $this->view->data = $this->data = $this->model->getEvent();
      $this->view->render('event', 'eventTable');

    }


    public function edit(){
      // die(print_r($_REQUEST));
      if(isset($_REQUEST['edit']) || isset($_REQUEST['create'])){

        // die(print_r($_REQUEST));

        $data['chongoi'] = $_REQUEST['chongoi'];
        $data['diadiem'] = $_REQUEST['diachi'];
        $data['khachmoi'] = $_REQUEST['khachmoi'];
        $data['thoigian'] = $_REQUEST['batdau']."-".$_REQUEST['ketthuc'];
        $data['trangthai'] = $_REQUEST['trangthai'];
        
        $data['masukien'] = $_REQUEST['masukien'];
        $data['ngay'] =  str_replace("/", "-", $_REQUEST['ngay']);
        // $data['trangthai'] = $_REQUEST['customRadio'];
        $hoatdong = $_REQUEST['hoatdong'];
        // die($hoatdong);

        if($_REQUEST['edit'] == "New") {
          // $data['trangthai'] = 1;
          $message = "Thêm sự kiện mới";
          $this->view->message = $this->model->themSuKien($data, $hoatdong, "create", $message);
          // echo '<script><meta http-equiv="refresh" content="0;"/></script>';
        }
        else {
          $message = "Cập nhật sự kiện";
          $this->view->message = $this->model->capNhatSuKien($data, $hoatdong, "update", $message);
          // echo '<script><meta http-equiv="refresh" content="0;"/></script>';
        }
      }
    }

  }


?>