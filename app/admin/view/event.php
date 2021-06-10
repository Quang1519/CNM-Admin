<!DOCTYPE html>
<html lang="en">
    <head>
       <?php include "components/head.php"; ?>
       <link href="<?php echo constant("DIR_APP") ?>admin\view\assets\libs\footable\footable.core.min.css" rel="stylesheet" type="text/css">
       <link href="<?php echo constant("DIR_APP") ?>admin\view\assets\libs\bootstrap-datepicker\bootstrap-datepicker.min.css" rel="stylesheet" type="text/css">
       <link href="<?php echo constant("DIR_APP") ?>admin\view\assets\libs\clockpicker\bootstrap-clockpicker.min.css" rel="stylesheet" type="text/css">
      
       <link href="<?php echo constant("DIR_APP") ?>admin\view\assets\libs\bootstrap-tagsinput\bootstrap-tagsinput.css" rel="stylesheet" type="text/css">

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <?php include "components/topbar.php"; ?>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            <?php include "components/sidebar.php"; ?>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="index.html">Quản lý</a></li>
                                            <!-- <li class="breadcrumb-item"><a href="index.html">Trang</a></li> -->
                                            <li class="breadcrumb-item active">Quản lý sự kiện</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Quản lý sự kiện</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->



                    </div> <!-- container -->


                    <div class="container-fluid">
                    <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h4 class="header-title">Danh sách sự kiện</h4>
                                    <p class="sub-header">
                                        Thêm hoặc cập nhật các sự kiện.
                                    </p>

                                    <div class="mb-2">
                                        <div class="row">
                                            <div class="col-12 text-sm-center form-inline">
                                                <!-- <div class="form-group mr-2">
                                                    <button id="demo-btn-addrow" class="btn btn-primary"><i class="mdi mdi-plus-circle mr-2"></i> Add New Row</button>
                                                </div> -->
                                                <div class="form-group mr-2">
                                                    <button type="button" id="addEvent" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#update-modal"><i class="mdi mdi-plus-circle mr-2"></i>Thêm sự kiện mới</button>
                                                </div>
                                                <div class="form-group">
                                                    <input id="demo-input-search2" type="text" placeholder="Tìm kiếm" class="form-control" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                    <!-- demo-foo-addrow -->
                                    <table id="demo-foo-addrow" class="table table-hover table-bordered toggle-circle mb-0" data-page-size="7">
                                        <thead class="table-purple">
                                        <tr>
                                            <!-- <th data-sort-ignore="true" class="min-width"></th> -->
                                            <th data-sort-initial="true" data-toggle="true" class="text-dark min-width">STT</th>
                                            <th data-sort-ignore="true" class="text-dark">Mã sự kiện</th>
                                            <th class="text-dark">Số ghế</th>
                                            <th class="text-dark">Số khách mời</th>
                                            <th data-sort-ignore="true" class="text-dark">Thời gian</th>
                                            <th data-sort-ignore="true" class="text-dark">Ngày</th>
                                            <th data-sort-ignore="true" class="text-dark">Địa điểm</th>
                                            <th data-sort-ignore="true" class="text-dark">Trạng thái</th>
                                            <th data-sort-ignore="true" class="text-dark">Cập nhật</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $this->page->createEventTable() ?>

                                        </tbody>
                                        <tfoot>
                                        <tr class="active">
                                            <td colspan="9">
                                                <div class="text-right">
                                                    <ul class="pagination pagination-split justify-content-end footable-pagination m-t-10"></ul>
                                                </div>
                                            </td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                    </div>
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->
                        </div>

                        <!-- Modal here -->
                        <div id="update-modal" class="modal fade" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header d-block">
                                    <h4 class="modal-title text-center">Câp nhật sự kiện</h4>
                                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                                    </button> -->
                                  </div>
                                  <form class="needs-validation" novalidate method="POST" id="form-check">
                                  <div class="modal-body p-4">
                                      <div class="form-row">
                                          <div class="col-md-12">
                                              <div class="form-group">
                                                  <label for="masukien" class="control-label">Mã sự kiện</label>
                                                  <input type="text" class="form-control" id="masukien" placeholder="" name="masukien"  required >
                                                  <!-- <div class="invalid-feedback">
                                                    Vui lòng điền họ và tên đệm
                                                  </div> -->
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-row">
                                        <div class="col-md-12" >
                                            <div class="form-group">
                                                <label for="">Năm học</label>
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="input-group">
                                                                <input type="text" name="namhocbatdau" id="namhocbatdau"  class="form-control datepicker" data-provide="datepicker" data-date-min-view-mode="2" placeholder="2021" data-date-autoclose="true"  required>
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text"><i class="ti-calendar"></i></span>
                                                                </div>
                                                                <div class="invalid-feedback">
                                                                Chọn thời gian bắt đầu năm học
                                                              </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-6">
                                                           <div class="input-group">
                                                                <input type="text" name="namhocketthuc" id="namhocketthuc" class="form-control datepicker" data-provide="datepicker" placeholder="2022"data-date-autoclose="true" data-date-min-view-mode="2" required>
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text"><i class="ti-calendar"></i></span>
                                                                </div>
                                                                <div class="invalid-feedback">
                                                                Chọn thời gian kết thúc năm học
                                                                </div>
                                                        </div>


                                                    </div>
                                                </div>
                                           </div>
                                        </div>
                                      </div>

                                      <div class="form-row">
                                          <div class="col-md-12">
                                              <div class="form-group ">
                                                  <label for="hoatdong" class="control-label">Hoạt động</label>
                                                  <input type="text" class="form-control" id="hoatdong" name="hoatdong" placeholder="Thêm hoạt động" required data-role="tagsinput">
                                                  <div class="invalid-feedback">
                                                    Vui lòng điền hoạt động
                                                  </div>
                                              </div>
                                          </div>
                                      </div>

                                      <div class="form-row">
                                          <div class="col-md-12">
                                            <div class="form-group">
                                              <label class="control-label ">Ngày tổ chức</label>
                                                  <div class="input-group">
                                                      <input type="text" class="form-control" data-provide="datepicker" data-date-autoclose="true" placeholder="dd/mm/yyyy" id="ngay" name="ngay" required>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="ti-calendar"></i></span>
                                                        </div>
                                                      <div class="invalid-feedback">
                                                        Vui lòng chọn ngày tổ chức
                                                      </div>
                                                  </div>
                                            </div>
                                          </div>
                                      </div>

                                      <div class="form-row">

                                        <div class="col-md-6">
                                          <div class="form-group">
                                            <label>Thời gian bắt đầu</label>
                                            <div class="input-group clockpicker" data-placement="top" data-align="top" data-autoclose="true" required>
                                                <input type="text" class="form-control" placeholder="12:00" id="timeStart" name="batdau" required>
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                                                </div>
                                                <div class="invalid-feedback">
                                                    Vui lòng chọn thời gian bắt đầu
                                                </div>
                                            </div>
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                          <div class="form-group">
                                            <label>Thời gian kết thúc</label>
                                            <div class="input-group clockpicker" data-placement="top" data-align="top" data-autoclose="true" required>
                                                <input type="text" class="form-control" placeholder="12:00" id="timeEnd" name="ketthuc" required>
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                                                </div>
                                                <div class="end-time"></div>
                                                <div class="invalid-feedback">
                                                    Vui lòng chọn thời gian kết thúc
                                                </div>
                                            </div>
                                            </div>
                                          </div>
                                      </div>
                                      <div class="form-row">
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label for="field-1" class="control-label">Số chỗ ngồi</label>
                                                  <input type="text" class="form-control" id="chongoi" placeholder="" name="chongoi"  required >
                                                  <div class="invalid-feedback">
                                                    Vui lòng điền số chỗ ngồi
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label for="field-2" class="control-label">Số khách mời</label>
                                                  <input type="text" class="form-control" id="khachmoi" placeholder="" name="khachmoi" required>
                                                  <div class="invalid-feedback">
                                                    Vui lòng điền số khách
                                                  </div>
                                              </div>
                                          </div>
                                      </div>

                                      <div class="form-row">
                                          <div class="col-md-12">
                                              <div class="form-group ">
                                                  <label for="diachi" class="control-label">Địa chỉ</label>
                                                  <input type="text" class="form-control" id="diachi" name="diachi" placeholder="Địa chỉ" required>
                                                  <div class="invalid-feedback">
                                                    Vui lòng điền địa chỉ
                                                  </div>
                                              </div>
                                          </div>
                                      </div>

                                      <div class="form-row" id="add">
                                        <div class="col-md-12" id="remove">
                                            <div class="from-group">
                                                <label for="">Sự kiện diễn ra</label>
                                                <div class="form-row">
                                                    <div class="col-md-3">

                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" value="1">
                                                            <label class="custom-control-label" for="customRadio1">Sắp diễn ra</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-3">

                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input" value="0">
                                                                <label class="custom-control-label" for="customRadio2">Đã diễn ra</label>
                                                            </div>

                                                    </div>
                                                </div>
                                           </div>
                                        </div>
                                      </div>

                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary waves-effect btn-close" value="close" data-dismiss="modal">Đóng</button>
                                      <button type="submit" name="create" class="btn btn-success waves-effect waves-light btn-create" value="">Cập nhật</button>
                                      <!-- <button type="submit" name="create" class="btn btn-success waves-effect waves-light btn-create" data-dismiss="modal" value="">Cập nhật</button> -->
                                  </div>
                                  </form>
                              </div>
                          </div>
                      </div>

                    </div>

                </div> <!-- content -->

                <!-- Footer Start -->

                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->


        <!-- Right bar overlay-->
        <?php include "components/script.php"; ?>

        <?php include "components/footer.php"; ?>

        <script src="<?php echo constant("DIR_APP") ?>admin\view\assets\libs\footable\footable.all.min.js"></script>


        <script src="<?php echo constant("DIR_APP") ?>admin\view\assets\js\pages\foo-tables.init.js"></script>

        <script src="<?php echo constant("DIR_APP") ?>admin\view\assets\libs\bootstrap-tagsinput\bootstrap-tagsinput.min.js"></script>
        <script src="<?php echo constant("DIR_APP") ?>admin\view\assets\libs\bootstrap-datepicker\bootstrap-datepicker.min.js"></script>

        <script src="<?php echo constant("DIR_APP") ?>admin\view\assets\libs\clockpicker\bootstrap-clockpicker.min.js"></script>

        <script src="<?php echo constant("DIR_APP") ?>admin\view\assets\js\clockpicker.js"></script>
        <script src="<?php echo constant("DIR_APP") ?>admin\view\assets\libs\switchery\switchery.min.js"></script>

        <script>

            $(".datepicker").datepicker({
                format: "yyyy",
                viewMode: "years", 
                minViewMode: "years"
            });

           $("#form-check").submit(function(e) {
                e.preventDefault();
                // $("input[type=submit]",this).attr("data-dismiss","modal");
                // $("#form-check").filter(':input').each(function () {
                //      //..your code
                //      console.log('ádsad');
                // });
                var count = 0;
                let data = {};
                $("#form-check input[type=text]").each(function() {
                  
                  if($(this).val()) {
                    // console.log($(this).val());
                    // console.log($(this).attr('name'));
                    count++;
                    // console.log(count);
                    data[$(this).attr('name')] = $(this).val();

                  }


                  
                    //... your code
                });

                // if(checkTime(data['batdau'].split(":"), data['ketthuc']).split(":")) {
                //   $("#form-check #update-modal .end-time").text("Thời gian kết thúc phải muộn hơn thời gian bắt đầu");
                // }

                // if(data['batdau'])end-time
                
                // var batdau = data['batdau'].split(":");
                // var ketthuc = data['ketthuc'].split(":");
                // if(checkTime(batdau, ketthuc)) {
                //   $(".end-time").removeClass("invalid-feedback");
                // } else {
                //   // $("#form-check").removeClass('was-validated');
                //   $(".end-time").addClass("invalid-feedback");
                //   $(".end-time").text("Thời gian kết thúc phải muộn hơn thời gian bắt đầu");
                //   // console.log($(".end-time"));
                // }


                if(count == 10) {
                    // $("btn-create").prop("disabled",false);
                    // console.log("dddd");
                    sendData(data);
                    // console.log(data);
                } 


                // $("#form-check").each(function(){
                //     var element = $(this).find(':input');
                //     console.log(element); 
                //     element.each(function (){
                //       console.log($(this).val());
                //     })
                    
                // });
            });

           $(".btn-close").click(function() {
            $("#form-check").removeClass('was-validated');
           })

           function checkTime(batdau, ketthuc) {
              
              if(parseInt(batdau[0]) < parseInt(ketthuc[0])) {
                return true;
              } else if(parseInt(batdau[0]) == parseInt(ketthuc[0])){
                if(parseInt(batdau[1]) < parseInt(ketthuc[1])) {
                  return true;
                } else {
                  return false;
                }
              } else {
                return false
              }
           }

          function sendData(data) {
             // $('.btn-create').attr("data-dismiss","modal");
             // $("#update-modal").modal('hide');
             // $("#update-modal").hide();
            $("#update-modal .btn-close").click();
            $("#form-check").removeClass('was-validated');
            // console.log(data);
            // console.log($(".btn-create").val());
            if($(".btn-create").val()) {
              data['trangthai'] = 1;
              data['edit'] = 'New';
              var message = 'Thêm sự kiện mới';
              // console.log(data);
              senRequest(data, message);
            } else {
              data['trangthai'] = $("input[name=customRadio]:checked").val();
              data['edit'] = 'Update';
              var message = 'Cập nhật sự kiện';
              console.log(data);
              // console.log("cap nhat su kien");
              senRequest(data, message);
            }

          }

            var dienra = $("#update-modal .modal-body #remove");

            $(".btn-icon").on("click", function () {
                // console.log(this);
                var myValue = $(this).data('val');
                // console.log(myValue.hoatdong.toString());
                // $(".modal-body #bookId").val( myBookId );

                var obj = $("#update-modal");

                var time = myValue.thoigian.split("-");
                var namhoc;
                if(typeof myValue.namhoc !== 'undefined') {
                   namhoc = myValue.namhoc.split("-");
                } else {
                    namhoc = ["2021", "2022"];
                }
                

                $(obj).find(".modal-body #add").append(dienra);

                if(myValue.trangthai == 1){
                    $(obj).find(".modal-body #add #customRadio1").prop( "checked", true );
                }
                else{
                    $(obj).find(".modal-body #add #customRadio2").prop( "checked", true );
                }
                // console.log(dienra);
                // console.log(test[0]);
                // var hi = test[0];
                // var start = hi.trim().slice(-2,2);
                $(obj).find(".modal-header .modal-title").text("Cập nhật sự kiện " + myValue.masukien);
                $(obj).find(".modal-footer .btn-create").text("Cập nhật");
                $(obj).find(".modal-footer .btn-create").prop('value', '');
                // console.log(start);
                $(obj).find(".modal-body #masukien").prop( "readonly", true );
                // $(obj).find(".modal-body #hoatdong").val(myValue.hoatdong.tagsinput('items'));
                if(myValue.hoatdong) {
                  $(obj).find(".modal-body #hoatdong").tagsinput('add', myValue.hoatdong.toString());
                }
                
                $(obj).find(".modal-body #masukien").val(myValue.masukien);
                $(obj).find(".modal-body #namhocbatdau").val(namhoc[0]);
                $(obj).find(".modal-body #namhocketthuc").val(namhoc[1]);
                $(obj).find(".modal-body #ngay").val(myValue.ngay);
                $(obj).find(".modal-body #timeStart").val(time[0]);
                $(obj).find(".modal-body #timeEnd").val(time[1]);
                $(obj).find(".modal-body #chongoi").val(myValue.chongoi);
                $(obj).find(".modal-body #khachmoi").val(myValue.khachmoi);
                $(obj).find(".modal-body #diachi").val(myValue.diadiem);
            });


            $("#addEvent").on("click", function () {
                // console.log(this);
                // var myValue = $(this).data('val');
                // $(".modal-body #bookId").val( myBookId );
                var obj = $("#update-modal");
                $(obj).find(".modal-body #remove").remove();


                $(obj).find(".modal-header .modal-title").text("Thêm sự kiện mới");
                $(obj).find(".modal-footer .btn-create").text("Thêm mới");
                $(obj).find(".modal-footer .btn-create").prop('value', 'New');
                // $(".hidden").attr("placeholder", "Type here to search");
                $(obj).find(".modal-body #masukien").val('').attr("placeholder", "IUHXXXX").attr("readonly", false);
                $(obj).find(".modal-body #namhocbatdau").val('').attr("placeholder","2020");
                $(obj).find(".modal-body #namhocketthuc").val('').attr("placeholder","2021");
                $(obj).find(".modal-body #ngay").val('').attr("placeholder", "12/12/2020");
                $(obj).find(".modal-body #timeStart").val('').attr("placeholder", "6:00");
                $(obj).find(".modal-body #timeEnd").val('').attr("placeholder", "18:00");
                $(obj).find(".modal-body #chongoi").val('').attr("placeholder", "3000");
                $(obj).find(".modal-body #khachmoi").val('').attr("placeholder", "20");
                $(obj).find(".modal-body #diachi").val('').attr("placeholder", "Nguyễn Văn Bảo, Gò Vấp, Hồ Chí Minh");
            });


            $(".btn-close").click(function() {
              $(".modal-body #hoatdong").tagsinput('removeAll');
              // console.log($(this).val());
            })

            Notiflix.Loading.Init({ svgColor:"#a9adab", }); 

            // $(".btn-create").click(function() {
            //   Notiflix.Loading.Hourglass('Vui lòng đợi...');
            // })

               // var data = {
               //    'masukien' : $("#masukien").val(),
               //    'hoatdong' : $("#hoatdong").val(),
               //    'ngay' : $("#ngay").val(),
               //    'batdau' : $("#timeStart").val(),
               //    'ketthuc' : $("#timeEnd").val(),
               //    'chongoi' : $("#chongoi").val(),
               //    'khachmoi' : $("#khachmoi").val(),
               //    'diachi' : $("#diachi").val(),
               //    // 'trangthai' : 1,
               //  }

          



             // Notiflix Notify - All Options 
             // Notiflix.Notify.Init({ position:'right-bottom'})

            // Notiflix.Report.Init({ 
             
            //   success: 
            //     { 
            //     buttonBackground:"#f8f8f8" ,}, 
            //   }); 
            


            function confirmSuccess( message) {
              // Notiflix.Loading.Remove();
              
              Notiflix.Report.Success( message + ' thành công ','','Xác nhận');
              window.location.href = 'event.html';
              // Notiflix.Notify.Success(message + ' thành công');
            }


             function confirmFailure( message) {
              Notiflix.Loading.Remove();
              Notiflix.Report.Failure( message + ' thất bại ', '', 'Xác nhận', function(){
                // window.location.href = 'event.html';
              });
            }


            function senRequest(getData, message){
              Notiflix.Loading.Hourglass('Vui lòng đợi...');
              // Notiflix.Block.Hourglass('table#demo-foo-addrow', 'Vui lòng đợi...');
              $.ajax({
                type : 'POST',
                url : 'event/edit.html',
                data : getData,
                success : function(response) {
                    // console.log(response);
                  obj = JSON.parse(response);
                  // obj = response;
                  // console.log(response);
                  if(obj.data) {
                    // console.log(obj.data);
                    // Notiflix.Loading.Remove();
                    confirmSuccess(message);
                  } else {
                    confirmFailure(message);
                  }
                },
                error : function(error) {
                  confirmFailure(message);
                }

              })
              return false;
            }

        </script>

        

        <?php THONGBAO::message($this->message)?>

    </body>
</html>