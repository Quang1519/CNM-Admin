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
          return 'Xác nhận chuyển vé';
          break;
        case 10:
          return 'Quyền admin';
          break;
        default:
          return 'Chưa được cấp quyền'; 
          break;
      }
    }


    public function createSelect()
    {
      $quyen = [0 => 'Chọn',1 => 'Xác nhận hoạt động', 2 => 'Xác nhận vé', 3 => 'Xác nhận chuyển vé'];
      $select = '  <label for="phanquyen" class="col-form-label">Phân quyền</label>
                      <select id="phanquyen" name="phanquyen" class="form-control">';
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
        $dataDel = ['uid' => $result['uid']];
        if($result['phanquyen'] == 10) {
          continue;
        }
        echo '<td class="text-center">'.$count++.'</td>
        <td>'.$result['email'].'</td>
        <td>'.$this->roleUser($result['phanquyen']).'</td>';

        
        echo '<td class="text-center">
          <div class="">
            <button type="button" class="btn btn-sm btn-primary btn-xs btn-icon btn-create"  data-toggle="modal" data-target="#update-modal" data-val=\''.json_encode($result,JSON_UNESCAPED_UNICODE).'\'><i class=" remixicon-edit-line "></i></button>
          
        
          <button type="button" data-del=\''.json_encode($dataDel,JSON_UNESCAPED_UNICODE).'\' class="btn btn-danger btn-xs btn-icon btn-del"><i class="remixicon-delete-bin-line"></i></button>
          </div>
        </td>
        </tr>';
      }
    }
  }


?>