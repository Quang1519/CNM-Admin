<?php
  class eventTable{
    public function createEventTable(){
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

    public function createTable($data){
      $count = 1;
      // $upcommingEvent = 0;
      foreach ($data as $result){
        // echo json_encode($result);
        // die();
        echo '<td class="text-center">'.$count++.'</td>
        <td>'.$result['masukien'].'</td>
        <td>'.$result['chongoi'].'</td>
        <td>'.$result['khachmoi'].'</td>
        <td>'.$result['thoigian'].'</td>
        <td>'.$result['ngay'].'</td>
        <td>'.$result['diadiem'].'</td>';

        if($result['trangthai'] == 1){
          echo '<td><span class="badge label-table badge-success">Sắp diễn ra</span></td>';
          // $upcommingEvent+=1;
        }
        else {
          echo '<td><span class="badge label-table badge-danger">Đã diễn ra</span></td>';
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