<?php

class adminModel extends Model {
  protected $link = 'https://ptta-cnm.herokuapp.com/';


  public function login($username,$password){
    $url = $this->link."taikhoan/".$username;
    $result = $this->loaddulieu($url);
    $numrow=-1;
    if($result) {
      foreach($result as $key => $val){
        $numrow=$key;
      }
    } else {
      return false;
    }
    
    if ($numrow>0) {
      return false;
    }elseif ($numrow == -1) {
      # code...
      return false;
    }
    else{
      return $result;
    }

  }

  public function makeUrl($link, $data = ''){
    if($data) {
      $url = '';
      foreach($data as $key => $value){
        $url .= $value."/";
      }
      $url = substr($url, 0, -1);
      // echo $this->link.$link.$url;
      return $this->link.$link.rawurlencode($url);
    }
    else {
      return $this->link.$link;
    }
  }

  public function getUsers(){
    $url = $this->makeUrl("/taikhoan");
    return $this->loaddulieu($url);
  }

  public function addUser($data){
    $message = "Thêm tài khoản mới";
    $url = $this->makeUrl("taikhoan/create/", $data);
    $result = $this->themxoasua($url);
    if($result){
      return [1, $message];
    }
    else {
      return [0, $message];
    }
  }

  public function updateUser($data){
    $message = "Cập nhật tài khoản";
    // unset($data['mssv']);
    unset($data['password']);
    unset($data['username']);
    $url = $this->makeUrl("taikhoan/update/", $data);
    // echo $url;
    // print_r($data);
    // die();
    $result = $this->themxoasua($url);
    if($result){
      return [1, $message];
    }
    else {
      return [0, $message];
    }
  }

  public function getEvent(){
    $url = $this->makeUrl("sukien");
    return $this->loaddulieu($url);
  }

  public function Event($data, $hoatdong, $action, $message){
    // $message = "Cập nhật sự kiện";
    $url = $this->makeUrl("sukien/".$action."/", $data);
    $url .=  "?hoatdong=".urlencode($hoatdong);

    // echo $url;
    // echo json_encode(["data" => true],JSON_UNESCAPED_UNICODE);
    
    $result = $this->themxoasua($url);
    // $result = 1;
    if($result){
      // return [1, $message];
      echo json_encode(["data" => true],JSON_UNESCAPED_UNICODE);
      // echo '<meta http-equiv="refresh" content="0;url=event.html"/>';
    }
    else {
      // return [0, $message];
      echo json_encode(["data" => false],JSON_UNESCAPED_UNICODE);
      // echo '<meta http-equiv="refresh" content="0;url=event.html"/>';
    }
  }

  public function capNhatSuKien($data, $hoatdong, $action, $message) {
    $result = $this->getEvent();
    $count = 0;
    $mask = '';
    foreach($result as $val){
      $sukien[] = $val['masukien'];
      if($val['trangthai'] == 1){
        $mask = $val['masukien'];
        $count++;
      }
    }
    $now = date("Y-m-d");
    $ngay = explode('-', $data['ngay']);
    $date = date('Y-m-d',strtotime($ngay[1].'-'.$ngay[0].'-'.$ngay[2]));

    if($mask == $data['masukien']) {
      if($date > $now && $data['trangthai'] == 1) {
        return $this->Event($data, $hoatdong, $action, $message);
        // echo json_encode(["data" => "sap dien ra "],JSON_UNESCAPED_UNICODE);
      } else if ($date <= $now && $data['trangthai'] == 0){
        return $this->Event($data, $hoatdong, $action, $message);
        // echo json_encode(["data" => "thoi gian qua khu su kien da dien ra "],JSON_UNESCAPED_UNICODE);
      } else {
        echo json_encode(["data" => false],JSON_UNESCAPED_UNICODE);
      }
    } else {
      if($count > 0) {
        if($data['trangthai'] == 0 &&  $date <= $now) {
          // echo json_encode(["data" => "dc cap nhat "],JSON_UNESCAPED_UNICODE);
          return $this->Event($data, $hoatdong, $action, $message);
        } else {
          echo json_encode(["data" => false],JSON_UNESCAPED_UNICODE);
        }
      } else {
        if($data['trangthai'] == 1 &&  $date > $now) {
          // echo json_encode(["data" => "dc cap nhat "],JSON_UNESCAPED_UNICODE);
          return $this->Event($data, $hoatdong, $action, $message);
        } else {
          echo json_encode(["data" => false],JSON_UNESCAPED_UNICODE);
        }
      }
    }
    // if($count > 0 && $data['trangthai'] == 1 && $mask == $data['masukien'] && $date <= $now){
    //   echo json_encode(["data" => "chay vo false update"],JSON_UNESCAPED_UNICODE);
    // } else {
    //   return $this->Event($data, $hoatdong, $action, $message);
    // }
  }

  public function themSuKien($data, $hoatdong, $action, $message){
    $result = $this->getEvent();
    $count = 0;
    // $mask = '';
    foreach($result as $val){
      $sukien[] = $val['masukien'];
      if($val['trangthai'] == 1){
        $mask = $val['masukien'];
        $count++;
      }
    }
    $now = date("Y-m-d");
    $ngay = explode('-', $data['ngay']);
    $date = date('Y-m-d',strtotime($ngay[1].'-'.$ngay[0].'-'.$ngay[2]));

    // if($date > $now) {
    //    echo json_encode(["data" => "dung"],JSON_UNESCAPED_UNICODE);
    // } else {
    //    echo json_encode(["data" => "sai"],JSON_UNESCAPED_UNICODE);
    // }
    if($now < $date && !in_array($data['masukien'], $sukien) && $count == 0) {
      return $this->Event($data, $hoatdong, $action, $message);
      // echo json_encode(["data" => "duoc them moi"],JSON_UNESCAPED_UNICODE);
    } else {
      echo json_encode(["data" => false],JSON_UNESCAPED_UNICODE);
    }
    // } else {
    //   if($now >= $date) {

    //   } else {

    //   }
    // }
  
    
    // if($data['trangthai'] == 1) {
    //   if($count == 0 && $masukien == $masukien) {
    //     if(ngayquakhu)
    //   }
    // }

    // if($action == 'update') {
    //   if($data['trangthai'] == 1 && $date > $now){
    //     return $this->Event($data, $hoatdong, $action, $message);
    //   } else {
    //     // return $this->Event($data, $hoatdong, $action, $message);
    //     echo json_encode(["data" => false],JSON_UNESCAPED_UNICODE);
    //     // echo json_encode(["data" => "chay vo update"],JSON_UNESCAPED_UNICODE);
    //   }
    // } else {
    //   if($date > $now && in_array($data['masukien'], $sukien)) {
    //     return $this->Event($data, $hoatdong, $action, $message);
    //   } else {
    //     echo json_encode(["data" => false],JSON_UNESCAPED_UNICODE);
    //   }
    // }
    
  }

  public function getVe(){
    $url = $this->makeUrl("/dangkyve");
    return $this->loaddulieu($url);
  }


  public function getSuKienHoatDong(){
    $url = $this->link."/sukien/trangthai";
    return $this->loaddulieu($url);
  }

  public function getCongTacVien(){
    $url = $this->makeUrl("/congtacvien");
    return $this->loaddulieu($url);
  }

  public function congTacVien($data, $action, $message){
    $url = $this->makeUrl("congtacvien/".$action."/", $data);
    // print_r($data);
    // echo $url;
    // die();
    $result = $this->themxoasua($url);
    if($result) {
      return [1, $message];
    } else {
      return [0, $message];
    }
  }


  public function delCongTacVien($data, $message) {
    $url = $this->makeUrl("congtacvien/delete/",$data);
    // echo $url;
    // die();
    $result = $this->themxoasua($url);
    if($result) {
      // return [0, $message];
      echo json_encode(['data' => true],JSON_UNESCAPED_UNICODE);
    } else {
      echo json_encode(['data' => false],JSON_UNESCAPED_UNICODE);
      // return [1, $message];
    }
  }

}


?>