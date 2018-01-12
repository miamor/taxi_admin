<?php
$config->addJS('plugins', 'DataTables/datatables.min.js');
$config->addJS('dist', "{$page}/list.js");
?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Danh sách chuyến
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo MAIN_URL ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Chuyến đi</li>
  </ol>
</section>

<!-- section.content Main content -->
<section class="content">

<div class="box">
    <div class="box-header">
        <h3 class="box-title">Danh sách chuyến</h3>
    </div>
    <div class="box-body">
        <table id="buyList" class="table table-bordered table-striped">
            <thead>
                <tr>
                  <th>ID</th>
                  <th>Taxi bán</th>
                  <th>Thông tin khách hàng</th>
                  <th>Thông tin chuyến</th>
                  <th>Tình trạng</th>
                  <th>Giá mua ngay</th>
                  <th>Giá khách trả</th>
                  <th>Ưu tiên</th>
                  <th>Taxi đã nhận</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>

</section><!-- /.content -->

<div class="clear"></div>
