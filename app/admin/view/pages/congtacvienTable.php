<?php
  class congtacvienTable{
    public function createCongTacVienTable(){
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


    public function roleUser($value=0)
    {
      switch ($value) {
        case 1:
          return 'Xác nhận hoạt động';
          break;
        case 2:
          return 'Xác nhận vé';
          break;
        case 3:
          return 'Giao dịch vé';
          break;
        default:
          return 'Chưa được cấp quyền'; 
          break;
      }
    }


    public function createSelect()
    {
      $quyen = [0 => 'Chọn',1 => 'Xác nhận hoạt đọng', 2 => 'Xác nhận vé', 3 => 'Xác nhận chuyển vé'];
      $select = '  <label for="phanquyen" class="">Phân quyền</label>
                                                <select id="phanquyen" class="form-control">';
      foreach ($quyen as $key => $value) {
        $select .= '<option value="' . $key . '">' . $value . '</option>';
      }
      $select .= '</select>';
      echo $select;
      // die();
    }

    public function createTable($data){
      $count = 1;
      // $upcommingEvent = 0;
      foreach ($data as $result){
        // unset($result['uid']);
        // echo json_encode($result);
        // die();
        echo '<td class="text-center">'.$count++.'</td>
        <td>'.$result['email'].'</td>
        <td>'.$this->roleUser($result['phanquyen']).'</td>';

        
        echo '<td class="text-center">
          <div class="">
            <button type="button" class="btn btn-sm btn-primary btn-xs btn-icon"  data-toggle="modal" data-target="#update-modal" data-val=\''.json_encode($result,JSON_UNESCAPED_UNICODE).'\'><i class=" remixicon-edit-line "></i></button>
          </div>
        </td></tr>';
      }
    }
  }


?>