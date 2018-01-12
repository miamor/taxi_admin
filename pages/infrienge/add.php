<?php
$config->addJS('dist', "{$page}/{$mode}.js");
$taxi->readAllSimple();
?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Thêm lịch sử vi phạm
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo MAIN_URL ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="<?php echo MAIN_URL ?>/infrienge">Lịch sử vi phạm</a></li>
    <li class="active">Thêm</li>
  </ol>
</section>

<!-- section.content Main content -->
<section class="content">

    <form class="add">
        <div class="form-group">
            <div class="col-lg-3 control-label">
                Taxi
            </div>
            <div class="col-lg-9">
                <select class="chosen-select form-control" name="taxiid">
                <?php foreach ($taxi->all_list as $oneTaxi) {
                    echo '<option value="'.$oneTaxi['id'].'">'.$oneTaxi['name'].' - @'.$oneTaxi['username'].'</option>';
                } ?>
                </select>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="form-group">
            <div class="col-lg-3 control-label">
                Thời gian (YYYY-mm-dd H:i:s)
            </div>
            <div class="col-lg-9">
                <input type="text" class="form-control" name="time" value="<?php echo date("Y-m-d H:i:s") ?>"/>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="form-group">
            <div class="col-lg-3 control-label">
                Lý do
            </div>
            <div class="col-lg-9">
                <textarea class="form-control" name="details"></textarea>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="add-form-submit center">
            <input type="reset" value="Reset"/>
            <input type="submit" value="Submit"/>
        </div>
    </form>

</section><!-- /.content -->

<div class="clear"></div>
