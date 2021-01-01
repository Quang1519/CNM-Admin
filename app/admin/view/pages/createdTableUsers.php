<?php
 class createdTableUsers {
  public function createTable(){
    $data = $this->data;
    $count = 1;
    foreach ($data as $result){
        echo '<tr><td class="text-center">'.$count++.'</td>
        <td>'.$result['mssv'].'</td>
        <td>'.$result['hovaten'].'</td>
        <td>'.$result['ten'].'</td>
        <td>'.$result['ngaysinh'].'</td>
        <td>'.$result['lop'].'</td>
        <td>'.$result['khoa'].'</td>
        <td>'.$result['nganh'].'</td>';
        if($result['trangthai'] == 0){
          echo '<td><span class="badge label-table badge-success">Chưa nhận vé</span></td></tr>';
        }
        else {
          echo '<td><span class="badge label-table badge-danger">Đã nhận vé</span></td></tr>';
        }
    }
  }
 }

?>