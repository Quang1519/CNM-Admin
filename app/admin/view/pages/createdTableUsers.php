<?php
 class createdTableUsers {
  public function createUsersTable(){
      $data = $this->data;
      // print_r($data);
      // die();
      if($data){
        $this->createTable($data);
      }
      else {
        echo 'Không tải được dữ liệu vui lòng quay lại sau';
      }
  }



  public function createTable(){
    $data = $this->data;
    $count = 1;
    foreach ($data as $result){
        unset($result['password']);
        echo '<tr><td class="text-center">'.$count++.'</td>
        <td>'.$result['mssv'].'</td>
        <td>'.$result['hovaten'].'</td>
        <td>'.$result['ten'].'</td>';
        if($result['gioitinh'] == 0){
          echo '<td>Nữ</td>';
        }
        else {
          echo '<td>Nam</td>';
        }
        echo '
        <td>'.$result['ngaysinh'].'</td>
        <td>'.$result['lop'].'</td>
        <td>'.$result['khoa'].'</td>
        <td>'.$result['nganh'].'</td>';
        if($result['trangthai'] == 0){
          echo '<td><span class="badge label-table badge-success">Đang học</span></td>';
        }
        else {
          echo '<td><span class="badge label-table badge-danger">Ngừng học</span></td>';
        }
        echo '<td class="text-center">
          <div class="">
            <button type="button" class="btn btn-sm btn-primary btn-xs btn-icon"  data-toggle="modal" data-target="#update-modal" data-val=\''.json_encode($result,JSON_UNESCAPED_UNICODE).'\'><i class=" remixicon-edit-line "></i></button>
          </div>
        </td></tr>';
    }
  }
 }

?>