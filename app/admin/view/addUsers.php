<!DOCTYPE html>
<html lang="en">
    <head>
       <?php include "components/head.php"; ?>
       <link href="<?php echo constant("DIR_APP") ?>admin\view\assets\libs\footable\footable.core.min.css" rel="stylesheet" type="text/css">
       <link href="<?php echo constant("DIR_APP") ?>admin\view\assets\libs\bootstrap-datepicker\bootstrap-datepicker.min.css" rel="stylesheet" type="text/css">

        <!-- <link href="<?php echo constant("DIR_APP") ?>admin\view\assets\libs\select2\select2.min.css" rel="stylesheet" type="text/css"> -->
        <!-- <link href="<?php echo constant("DIR_APP") ?>admin\view\assets\libs\bootstrap-select\bootstrap-select.min.css" rel="stylesheet" type="text/css"> -->

       <!-- <style>
          .pagination-rounded .page-link {
            border-radius:3px !important;
            margin:0 1.5px;
            /* border:none; */
            border: 1px solid #f1f5f7;
          }

          .page-link {
            position: relative;
            display: block;
            padding: .5rem .75rem;
            margin-left: -1px;
            line-height: 1.25;
            color: #323a46;
            background-color: #fff;
            border: 1px solid #f1f5f7;
          }

          .far {
            line-height: unset;
          }
       </style> -->
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
                                            <!-- <li class="breadcrumb-item"><a href="">Pages</a></li> -->
                                            <li class="breadcrumb-item active">Quản lý tài khoản</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Quản lý tài khoản</h4>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h4 class="header-title">Danh sách tài khoản</h4>
                                    <p class="sub-header">
                                        Thêm hoặc cập nhật các tài khoản.
                                    </p>

                                    <div class="mb-2">
                                        <div class="row">
                                            <div class="col-12 text-sm-center form-inline">
                                                <!-- <div class="form-group mr-2">
                                                    <button id="demo-btn-addrow" class="btn btn-primary"><i class="mdi mdi-plus-circle mr-2"></i> Add New Row</button>
                                                </div> -->
                                                <div class="form-group mr-2">
                                                    <button type="button" id="addUser" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#update-modal"><i class="mdi mdi-plus-circle mr-2"></i> Tạo tài khoản mới</button>
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
                                            <!-- <th data-sort-initial="true" data-toggle="true"  class="text-dark min-width">STT</th> -->
                                            <th data-sort-ignore="true" class="text-dark min-width">STT</th>
                                            <th data-sort-ignore="true" class="text-dark">MSSV</th>
                                            <th data-sort-ignore="true" class="text-dark">Họ và tên</th>
                                            <th data-sort-ignore="true" class="text-dark">Tên</th>
                                            <th data-sort-ignore="true" class="text-dark">Giới tính</th>
                                            <th data-sort-ignore="true" class="text-dark">Ngày sinh</th>
                                            <th data-sort-ignore="true" class="text-dark">Lớp</th>
                                            <th data-sort-ignore="true" class="text-dark">Khoa</th>
                                            <th data-sort-ignore="true" class="text-dark">Ngành</th>
                                            <th data-sort-ignore="true" class="text-dark">Trạng thái</th>
                                            <th data-sort-ignore="true" class="text-dark">Cập nhật</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $this->page->createUsersTable(); ?>

                                        </tbody>
                                        <tfoot>
                                        <tr class="active">
                                            <td colspan="11">
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
                                    <h4 class="modal-title text-center">Tạo tài khoản</h4>
                                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                                    </button> -->
                                  </div>
                                  <form class="needs-validation" novalidate method="POST">
                                  <div class="modal-body p-4">
                                      <div class="form-row">
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label for="field-1" class="control-label">Họ và tên đệm</label>
                                                  <input type="text" class="form-control" id="hovatendem" placeholder="Phạm Thái" name="hovatendem" required>
                                                  <div class="invalid-feedback">
                                                    Vui lòng điền họ và tên đệm
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label for="field-2" class="control-label">Tên</label>
                                                  <input type="text" class="form-control" id="ten" placeholder="Văn" name="ten" required>
                                                  <div class="invalid-feedback">
                                                    Vui lòng điền tên
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-row">

                                        <div class="col-md-12 ">
                                            <div class="form-group">
                                            <label for="sex" class="control-label">Giới tính</label>
                                            <div class=" form-inline" id="sex">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio1" name="gioitinh" value="1" class="custom-control-input" checked>
                                                    <label class="custom-control-label" for="customRadio1">Nam</label>
                                                </div>

                                                <div class="custom-control custom-radio ml-2">
                                                    <input type="radio" id="customRadio2" name="gioitinh" class="custom-control-input" value="0">
                                                    <label class="custom-control-label" for="customRadio2">Nữ</label>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="form-row">
                                          <div class="col-md-12">
                                            <div class="form-group">
                                              <label class="control-label ">Ngày sinh</label>
                                                  <!-- <div class="input-group"> -->
                                                      <input type="text" class="form-control" data-provide="datepicker" data-date-autoclose="true" placeholder="dd/mm/yyyy" id="ngay" name="ngaysinh" required>
                                                      <div class="invalid-feedback">
                                                        Vui lòng điền ngày tháng năm sinh
                                                      </div>
                                                  <!-- </div> -->
                                            </div>
                                          </div>
                                      </div>
                                      <div class="form-row">
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label for="field-4" class="control-label">MSSV</label>
                                                  <input type="text" class="form-control" id="mssv" placeholder="17059601" name="mssv" required>
                                                  <div class="invalid-feedback">
                                                    Vui lòng điền mã số sinh viên
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label for="field-5" class="control-label">Lớp</label>
                                                  <input type="text" class="form-control" id="lop" placeholder="DHHTTT13B" name="lop" required>
                                                  <div class="invalid-feedback">
                                                    Vui lòng điền lớp học
                                                  </div>
                                              </div>
                                          </div>
                                          <!-- <div class="col-md-4">
                                              <div class="form-group">
                                                  <label for="field-6" class="control-label">Zip</label>
                                                  <input type="text" class="form-control" id="field-6" placeholder="123456">
                                              </div>
                                          </div> -->
                                      </div>
                                      <!-- <div class="form-row">
                                          <div class="col-md-12">
                                              <div class="form-group no-margin">
                                                  <label for="field-7" class="control-label">Personal Info</label>
                                                  <textarea class="form-control" id="field-7" placeholder="Write something about yourself"></textarea>
                                              </div>
                                          </div>
                                      </div> -->
                                      <div class="form-row">
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                    <label for="khoa" class="control-label">Khoa</label>
                                                    <!-- <select id="khoa" name="khoa" class=" custom-select" required>
                                                        <option value="">Chọn ...</option>
                                                        <option value="1">Hot Dog, Fries and a Soda</option>
                                                        <option value="2">Burger, Shake and a Smile</option>
                                                        <option value="3">Sugar, Spice and all things nice</option>
                                                    </select> -->
                                                    <input type="text" class="form-control" id="khoa" placeholder="Công Nghệ Thông Tin" name="khoa" required>
                                                    <div class="invalid-feedback">
                                                    Vui lòng điền khoa
                                                    </div>
                                              </div>
                                          </div>
                                          <div class="col-md-6">
                                                <div class="form-group">
                                                <label for="nganh" class="control-label">Ngành</label>
                                                    <!-- <select id="nganh" name="nganh" class=" custom-select" required>
                                                        <option value="">Chọn ...</option>
                                                        <option value="1">Hot Dog, Fries and a Soda</option>
                                                        <option value="2">Burger, Shake and a Smile</option>
                                                        <option value="3">Sugar, Spice and all things nice</option>
                                                    </select> -->
                                                    <input type="text" class="form-control" id="nganh" placeholder="Hệ thống thông tin" name="nganh" required>
                                                    <div class="invalid-feedback">
                                                    Vui lòng điền ngành
                                                    </div>
                                                </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Đóng</button>
                                      <button type="submit" name="create" id="create" class="btn btn-success waves-effect waves-light">Thêm mới</button>
                                  </div>
                                  </form>
                              </div>
                          </div>
                      </div>
                        <!-- End modal -->
                        <!-- end page title -->

                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->

                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->
        <?php include "components/footer.php"; ?>

        <!-- Right bar overlay-->
        <?php include "components/script.php"; ?>

        <script src="<?php echo constant("DIR_APP") ?>admin\view\assets\libs\footable\footable.all.min.js"></script>


        <script src="<?php echo constant("DIR_APP") ?>admin\view\assets\js\pages\foo-tables.init.js"></script>

        <script src="<?php echo constant("DIR_APP") ?>admin\view\assets\libs\bootstrap-datepicker\bootstrap-datepicker.min.js"></script>
        <!-- <script src="<?php echo constant("DIR_APP") ?>admin\view\assets\libs\select2\select2.min.js"></script> -->
        <!-- <script src="<?php echo constant("DIR_APP") ?>admin\view\assets\libs\bootstrap-select\bootstrap-select.min.js"></script> -->
        <!-- <script src="<?php echo constant("DIR_APP") ?>admin\view\assets\js\pages\form-advanced.init.js"></script> -->

        <script>

            // var dienra = $("#con-close-modal .modal-body #remove");

            $(".btn-icon").on("click", function () {
                // console.log(this);
                var myValue = $(this).data('val');
                // $(".modal-body #bookId").val( myBookId );

                var obj = $("#update-modal");

                // var time = myValue.ngaysinh.split("-");


                // $(obj).find(".modal-body #add").append(dienra);

                if(myValue.gioitinh == 1){
                    $(obj).find(".modal-body #customRadio1").prop( "checked", true );
                }
                else{
                    $(obj).find(".modal-body #customRadio2").prop( "checked", true );
                }
                // console.log(dienra);
                // console.log(test[0]);
                // var hi = test[0];
                // var start = hi.trim().slice(-2,2);
                $(obj).find(".modal-header .modal-title").text("Cập nhật tài khoản");
                $(obj).find(".modal-footer #create").text("Cập nhật");
                $(obj).find(".modal-footer #create").prop('value', '');
                // console.log(start);
                $(obj).find(".modal-body #mssv").prop( "readonly", true );
                $(obj).find(".modal-body #mssv").val(myValue.mssv);
                $(obj).find(".modal-body #hovatendem").val(myValue.hovaten);
                $(obj).find(".modal-body #ten").val(myValue.ten);
                $(obj).find(".modal-body #ngay").val(myValue.ngaysinh);
                $(obj).find(".modal-body #lop").val(myValue.lop);
                $(obj).find(".modal-body #khoa").val(myValue.khoa);
                $(obj).find(".modal-body #nganh").val(myValue.nganh);

            });


            $("#addUser").on("click", function () {
                // console.log(this);
                // var myValue = $(this).data('val');
                // $(".modal-body #bookId").val( myBookId );
                var obj = $("#update-modal");
                // $(obj).find(".modal-body #remove").remove();


                $(obj).find(".modal-header .modal-title").text("Thêm tài khoản");
                $(obj).find(".modal-footer #create").text("Thêm mới");
                $(obj).find(".modal-footer #create").prop('value', 'New');
                // $(".hidden").attr("placeholder", "Type here to search");
                $(obj).find(".modal-body #mssv").val('').attr("placeholder", "17000000");
                $(obj).find(".modal-body #hovatendem").val('').attr("placeholder", "Nguyễn Bảo");
                $(obj).find(".modal-body #ten").val('').attr("placeholder", "Trúc");
                $(obj).find(".modal-body #ngay").val('').attr("placeholder", "02/02/2000");
                $(obj).find(".modal-body #lop").val('').attr("placeholder", "DHHTTT13A");
                $(obj).find(".modal-body #khoa").val('').attr("placeholder", "Công Nghệ Thông Tin");
                $(obj).find(".modal-body #nganh").val('').attr("placeholder", "Hệ Thống Thông Tin");

            });

        </script>

        <?php THONGBAO::message($this->message)?>

    </body>
</html>