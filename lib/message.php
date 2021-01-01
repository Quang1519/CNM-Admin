<?php
  class THONGBAO {
    public static function message($message){
        switch ($message[0]){
          case 0:
              echo "<script type=\"text/javascript\"> Notiflix.Report.Failure( '".$message[1]." thất bại', '', 'Xác nhận', function(){
                  ;
              } ); </script>";
          break;
          case 1:
              echo "<script type=\"text/javascript\"> Notiflix.Report.Success( '".$message[1]." thành công', '', 'Xác nhận', function(){
                  ;
              } ); </script>";
          break;
        }
    }
  }

?>