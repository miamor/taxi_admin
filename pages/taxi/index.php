<?php
$config->addJS('plugins', 'DataTables/datatables.min.js');
$config->addJS('dist', "{$page}/list.js");
?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Danh sách đối tác
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo MAIN_URL ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Đối tác</li>
  </ol>
</section>

<!-- section.content Main content -->
<section class="content">

<div class="box">
    <div class="box-header">
        <h3 class="box-title">Danh sách đối tác</h3>
    </div>
    <div class="box-body">
        <table id="buyList" class="table table-bordered table-striped">
            <thead>
                <tr>
                  <th>Tên đăng nhập</th>
                  <th>Tên thật</th>
                  <th>Số điện thoại</th>
                  <th>Chứng minh nhân dân</th>
                  <th>Biển số xe</th>
                  <th>Số chỗ</th>
                  <th>Loại xe</th>
                  <th>Tiền</th>
                  <th>Hạng</th>
                  <th>Khóa</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>

</section><!-- /.content -->

<div class="clear"></div>
