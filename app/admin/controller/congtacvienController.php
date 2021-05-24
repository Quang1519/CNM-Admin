<?php
  class congtacvienController extends Controller {
    public function index(){

      $this->view->message = [-1];
      if(isset($_REQUEST['create'])){

        // die(print_r($_REQUEST));


        $data['email'] = $_REQUEST['email'];
        $data['password'] = $_REQUEST['password'];
        $data['phanquyen'] = $_REQUEST['phanquyen'];
        
        if($_REQUEST['password'] == $_REQUEST['reTypePassword']) {
          if($_REQUEST['create'] == "New") {
          $message = "Thêm tài khoản mới";
          $this->view->message = $this->model->congTacVien($data, "create", $message);
          }
          else {
            $message = "Cập nhật tài khoản";
            $this->view->message = $this->model->congTacVien($data, "update", $message);
          }
        } else {
          $this->view->message = [0,"Mật khẩu không khớp thao tác"];
        }

       
      }


      $this->view->data = $this->model->getCongTacVien();
      $this->view->render('congtacvien', 'congtacvienTable');
    }


    public function delCongTacVien(){
      // echo 'del cong tac vien';
      if(isset($_REQUEST['email']) && isset($_REQUEST['uid'])) {
        $data['uid'] = $_REQUEST['uid'];
        $data['email'] = $_REQUEST['email'];
        
        $this->view->message = $this->model->delCongTacVien($data, "delete", "Xóa tài khoản");
        // $this->index();
      }
      // print_r($_REQUEST);
      // die();
      // print json_encode($_REQUEST);
    }

  }

?>