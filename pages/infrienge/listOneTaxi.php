<?php
$config->addJS('plugins', 'DataTables/datatables.min.js');
$config->addJS('dist', "{$page}/oneTaxi.js");
?>
<script>var taxiID = <?php echo $taxi->id ?></script>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Lịch sử vi phạm - <?php echo $taxi->name ?>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo MAIN_URL ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="<?php echo MAIN_URL ?>/infrienge">Lịch sử vi phạm</a></li>
    <li class="active"><?php echo $taxi->name ?></li>
  </ol>
</section>

<!-- section.content Main content -->
<section class="content">

<div class="box">
    <div class="box-header">
        <h3 class="box-title">Lịch sử vi phạm</h3>
    </div>
    <div class="box-body">
        <table id="buyList" class="table table-bordered table-striped">
            <thead>
                <tr>
                  <th>Thời gian</th>
                  <th>Lý do</th>
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
