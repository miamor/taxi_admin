<?php
$config->addJS('plugins', 'DataTables/datatables.min.js');
$config->addJS('dist', "{$page}/oneUser.js");
?>
<script>var userID = <?php echo $user->id ?></script>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Khuyến mãi - <?php echo $user->name ?>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo MAIN_URL ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="<?php echo MAIN_URL ?>/promotion">Danh sách khuyến mãi</a></li>
    <li class="active"><?php echo $user->name ?></li>
  </ol>
</section>

<!-- section.content Main content -->
<section class="content">

<div class="box">
    <div class="box-header">
        <h3 class="box-title">Chi tiết  khuyến mãi</h3>
    </div>
    <div class="box-body">
        <table id="buyList" class="table table-bordered table-striped">
            <thead>
                <tr>
                  <th>Thời gian bắt đầu</th>
		  <th>Thời gian hết hạn</th>
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
