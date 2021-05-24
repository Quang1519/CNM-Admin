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
                                            <th data-sort-ignore="true" class="text-dark">Cập nhật / Xóa</th>
                                            <!-- <th data-sort-ignore="true" class="text-dark"></th> -->
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
                                                  <input type="password" class="form-control" id="password" placeholder="Mật khẩu" name="password" required>
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
            function disabledButton() {
                $("#update-modal").find(".modal-footer #create").prop( "disabled", true );
            }

            function enableButton() {
                $("#update-modal").find(".modal-footer #create").prop( "disabled", false );
            }

            function checkPassword(){
                 if($("#password").val() == $("#reTypePassword").val() && $("#password").val() != '' && $("#phanquyen").val() != 0 && $("#email").val() != '' && $("#password").val().length >= 6) {
                    enableButton();
                } else {
                    disabledButton();
                }
            }

            function checkMail() {
                var re = /^[a-z][a-z0-9_\.]{5,32}@[a-z0-9]{2,}(\.[a-z0-9]{2,4}){1,2}$/;
                return re.test($("#email").val().toLowerCase());
            }

            $("#email").change(function() {
                checkPassword();
            })


            $("#email").keyup(function() {
                if(checkMail()) {
                    checkPassword();
                } else {
                    disabledButton();
                }
            })


            $("#phanquyen").on("change", function () {
                    // console.log($("#phanquyen").val());
                if($("#phanquyen").val() == 0) {
                    // console.log($("#phanquyen").val());
                    checkPassword();
                } else {
                   checkPassword();
                    // console.log($("#phanquyen").val());
                }
            });

            $("#password").keyup(function() {
               checkPassword();
            });

            $("#reTypePassword").keyup(function() {
               checkPassword();
            });


            $(".btn-del").click(function() {
                // console.log('asdfasdfd');
                // var data = $(this).data('del');
                // console.log($(this).data('del'));
                $.ajax({
                type : 'POST', //kiểu post
                url  : 'congtacvien/delCongTacVien.html', //gửi dữ liệu sang trang submit.php
                data : $(this).data('del'),
                success :  function(data)
                       {
                            // if (data == 'false')
                            // {
                            //     alert('Sai tên đăng nhập hoặc mật khẩu');
                            // } else {
                            //     $('#content').html(data);
                            // }
                            alert(data);
                       }
                });
                return false;
            })
          


            // var dienra = $("#con-close-modal .modal-body #remove");

            $(".btn-create").on("click", function () {
                // console.log(this);
                var myValue = $(this).data('val');
                // $(".modal-body #bookId").val( myBookId );

                var obj = $("#update-modal");

                // var time = myValue.ngaysinh.split("-");


                // $(obj).find(".modal-body #add").append(dienra);
                $(obj).find(".modal-footer #create").prop( "disabled", true );

                
                // console.log(dienra);
                // console.log(test[0]);
                // var hi = test[0];
                // var start = hi.trim().slice(-2,2);
                $(obj).find(".modal-header .modal-title").text("Cập nhật tài khoản");
                $(obj).find(".modal-footer #create").text("Cập nhật");
                $(obj).find(".modal-footer #create").prop('value', '');
                // console.log(start);
                // $(obj).find(".modal-body #mssv").prop( "readonly", true );
                $("#email").val(myValue.email);
                $("#phanquyen").val(myValue.phanquyen);
                $("#password").val('');
                $("#reTypePassword").val('');
                // checkPassword();
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
                $(obj).find(".modal-footer #create").prop( "disabled", true );

                // $("#phanquyen").on("click", function () {
                //     console.log($("#phanquyen").val());
                // });



                $(obj).find(".modal-header .modal-title").text("Thêm tài khoản");
                $(obj).find(".modal-footer #create").text("Thêm mới");
                $(obj).find(".modal-footer #create").prop('value', 'New');
                // $(".hidden").attr("placeholder", "Type here to search");
                $(obj).find(".modal-body #email").val('').attr("placeholder", "example@gmail.com");
                $(obj).find(".modal-body #phanquyen").val(0);
                $("#password").val('');
                $("#reTypePassword").val('');
                // $(obj).find(".modal-body #ten").val('').attr("placeholder", "Trúc");

            });

        </script>

        <?php THONGBAO::message($this->message)?>

    </body>
</html>