<?php

class adminModel extends Model {
  protected $link = 'https://ptta-cnm.herokuapp.com/';


  public function login($username,$password){
    $url = $this->link."taikhoan/".$username;
    $result = $this->loaddulieu($url);
    $numrow=-1;
    foreach($result as $key => $val){
      $numrow=$key;
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
    
    $result = $this->themxoasua($url);
    if($result){
      return [1, $message];
    }
    else {
      return [0, $message];
    }
  }

  public function checkEvent($data, $hoatdong, $action, $message){
    $result = $this->getEvent();
    $count = 0;
    $mask = '';
    foreach($result as $val){
      if($val['trangthai'] == 1){
        $mask = $val['masukien'];
        $count++;
        // echo $count;
        // print_r($data);
        // print_r($val);

      }
    }
    // die();
    if($count>0 && $mask != $data['masukien'] && $data['trangthai'] == 1){
      return [0, $message];
    }
    else{
      return $this->Event($data, $hoatdong, $action, $message);
    }
  }

  public function getVe(){
    $url = $this->makeUrl("/dangkyve");
    return $this->loaddulieu($url);
  }

}


?>