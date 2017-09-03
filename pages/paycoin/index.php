<?php
$config->addJS('plugins', 'DataTables/datatables.min.js');
$config->addJS('dist', "{$page}/list.js");
?>
<script>var taxiID = <?php echo $taxi->id ?></script>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Lịch sử giao dịch
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo MAIN_URL ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Lịch sử giao dịch</li>
  </ol>
</section>

<!-- section.content Main content -->
<section class="content">

<div class="box">
    <div class="box-header">
        <h3 class="box-title">Lịch sử giao dịch</h3>
    </div>
    <div class="box-body">
        <table id="buyList" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Loại</th>
                    <th>Taxi username</th>
                    <th>Chuyến</th>
                    <th>Tiền</th>
                    <th>Thời gian</th>
                    <th>Chi tiết</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>

</section><!-- /.content -->

<div class="clear"></div>
