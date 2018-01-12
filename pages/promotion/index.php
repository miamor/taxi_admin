<?php
$config->addJS('plugins', 'DataTables/datatables.min.js');
$config->addJS('dist', "{$page}/list.js");
?>
<!--<script>var taxiID = <?php echo $taxi->id ?></script>-->
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Danh sách khuyến mãi
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo MAIN_URL ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Danh sách khuyến mãi</li>
  </ol>
</section>

<!-- section.content Main content -->
<section class="content">

<div class="box">
    <div class="box-header">
        <h3 class="box-title">Danh sách khuyến mãi</h3>
    </div>
    <div class="box-body">
        <table id="buyList" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User ID</th>
                    <th>User username</th>
                    <th>Thời gian bắt đầu</th>
		    <th>Thời gian kết thúc</th>
		    <th>Chi tiết</th>
                    <th>Trạng thái</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>

</section><!-- /.content -->

<div class="clear"></div>
