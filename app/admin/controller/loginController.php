<?php
  class loginController extends Controller {
    public function index(){

      if(isset($_REQUEST['submit'])){
        $username = $_REQUEST['username'];
        $password = md5($_REQUEST['password']);

        $account = $this->model->login($username, $password);

        if($account){
          foreach( $account as $val){
            if($val['username'] == $username && $val['password'] == $password && $val['phanquyen'] == 0){
              $_SESSION['username'] = $val['username'];
              $_SESSION['phanquyen'] = $val['phanquyen'];
              $_SESSION['ten'] = $val['ten'];
            }
            else {
              $this->view->message = '<div class="alert alert-danger mt-3" role="alert">
              Bạn đã nhập sai mật khẩu hoặc tài khoản
            </div>';
            }

          }
        }
        else {
          $this->view->message = '<div class="alert alert-danger mt-3" role="alert">
          Tài khoản không hợp lệ
        </div>';
        }

        if(isset($_SESSION['username']) && isset($_SESSION['phanquyen'])) {
          echo '<script type="text/javascript">window.location="index.html"</script>';
        }


      }
      $this->view->render('login');
    }
  }
?>