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
                                            <th data-sort-ignore="true" class="text-dark">Email</th>
                                            <th data-sort-ignore="true" class="text-dark">Phân quyền</th>
                                            <!-- <th data-sort-ignore="true" class="text-dark">Tên</th> -->
                                            <!-- <th data-sort-ignore="true" class="text-dark">Giới tính</th> -->
                                            <!-- <th data-sort-ignore="true" class="text-dark">Ngày sinh</th> -->
                                            <!-- <th data-sort-ignore="true" class="text-dark">Lớp</th> -->
                                            <!-- <th data-sort-ignore="true" class="text-dark">Khoa</th> -->
                                            <!-- <th data-sort-ignore="true" class="text-dark">Ngành</th> -->
                                            <!-- <th data-sort-ignore="true" class="text-dark">Trạng thái</th> -->
                                            <th data-sort-ignore="true" class="text-dark">Cập nhật</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $this->page->createCongTacVienTable(); ?>

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
                                          <div class="col-md-12">
                                              <div class="form-group">
                                                  <label for="field-1" class="control-label">Email</label>
                                                  <input type="email" class="form-control" id="email" placeholder="example@gmail.com" name="email" required>
                                                  <div class="invalid-feedback">
                                                    Vui lòng điền email
                                                  </div>
                                              </div>
                                          </div>
                                        </div>

                                        <div class="form-row">
                                          <div class="col-md-12">
                                              <div class="form-group">
                                               
                                               <!--  <label for="phanquyen" class="col-form-label">Phân quyền</label>
                                                <select id="phanquyen" class="form-control">
                                                    <option value="0">Chọn</option>
                                                    <option value="1">Xác nhận hoạt động</option>
                                                    <option value="2">Xác nhận vé</option>
                                                    <option value="3">Xác nhận chuyển vé</option>

                                                </select> -->
                                                <?php $this->page->createSelect(); ?>
                                           
                                              </div>
                                          </div>
                                          
                                        </div>

                                        <div class="form-row">
                                          <div class="col-md-12">
                                              <div class="form-group">
                                                  <label for="password" class="control-label">Mật khẩu</label>
                                                  <input type="password" class="form-control" id="password" placeholder="Mật khẩu" name="email" required>
                                                  <div class="invalid-feedback">
                                                    Nhập mật khẩu
                                                  </div>
                                              </div>
                                          </div>
                                        </div>

                                    <div class="form-row">
                                          <div class="col-md-12">
                                              <div class="form-group">
                                                  <label for="reTypePassword" class="control-label">Nhập lại mật khẩu</label>
                                                  <input type="password" class="form-control" id="reTypePassword" placeholder="Nhập lại mật khẩu" name="reTypePassword" required>
                                                  <div class="invalid-feedback">
                                                    Nhập lại mật khẩu
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

                
                // console.log(dienra);
                // console.log(test[0]);
                // var hi = test[0];
                // var start = hi.trim().slice(-2,2);
                $(obj).find(".modal-header .modal-title").text("Cập nhật tài khoản");
                $(obj).find(".modal-footer #create").text("Cập nhật");
                $(obj).find(".modal-footer #create").prop('value', '');
                // console.log(start);
                // $(obj).find(".modal-body #mssv").prop( "readonly", true );
                $(obj).find(".modal-body #email").val(myValue.email);
                $(obj).find(".modal-body #phanquyen").val(myValue.phanquyen);
                // $(obj).find(".modal-body #ten").val(myValue.ten);
                // $(obj).find(".modal-body #ngay").val(myValue.ngaysinh);
                // $(obj).find(".modal-body #lop").val(myValue.lop);
                // $(obj).find(".modal-body #khoa").val(myValue.khoa);
                // $(obj).find(".modal-body #nganh").val(myValue.nganh);

            });


            $("#addUser").on("click", function () {
                // console.log(this);
                // var myValue = $(this).data('val');
                // $(".modal-body #bookId").val( myBookId );
                var obj = $("#update-modal");
                // $(obj).find(".modal-body #remove").remove();

                var select = $("#phanquyen");
                if(select.val() == 0) {
                    $(obj).find(".modal-footer #create").prop( "disable", true );
                }

                
                
                $(obj).find(".modal-header .modal-title").text("Thêm tài khoản");
                $(obj).find(".modal-footer #create").text("Thêm mới");
                $(obj).find(".modal-footer #create").prop('value', 'New');
                // $(".hidden").attr("placeholder", "Type here to search");
                $(obj).find(".modal-body #email").val('').attr("placeholder", "example@gmail.com");
                $(obj).find(".modal-body #phanquyen").val(0);
                // $(obj).find(".modal-body #ten").val('').attr("placeholder", "Trúc");

            });

        </script>

        <?php THONGBAO::message($this->message)?>

    </body>
</html>