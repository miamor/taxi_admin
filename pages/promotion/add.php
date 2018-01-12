<?php
$config->addJS('dist', "{$page}/{$mode}.js");
$user->readAllSimple();
?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Thêm khuyến mãi
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo MAIN_URL ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="<?php echo MAIN_URL ?>/promotion">Danh sách khuyến mãi</a></li>
    <li class="active">Thêm</li>
  </ol>
</section>

<!-- section.content Main content -->
<section class="content">

    <form class="add">
        <div class="form-group">
            <div class="col-lg-3 control-label">
                User
            </div>
            <div class="col-lg-9">
                <select class="chosen-select form-control" name="userID">
                <?php foreach ($user->all_list as $oneUser) {
                    echo '<option value="'.$oneUser['id'].'">'.$oneUser['name'].' - @'.$oneUser['username'].'</option>';
                } ?>
                </select>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="form-group">
            <div class="col-lg-3 control-label">
                Thời gian bắt đầu(YYYY-mm-dd H:i:s)
            </div>
            <div class="col-lg-9">
                <input type="text" class="form-control" name="timeFrom" value="<?php echo date("Y-m-d H:i:s") ?>"/>
            </div>
            <div class="clearfix"></div>
        </div>

	<div class="form-group">
            <div class="col-lg-3 control-label">
                Thời gian hết hạn(YYYY-mm-dd H:i:s)
            </div>
            <div class="col-lg-9">
                <input type="text" class="form-control" name="timeTo" value="<?php echo date("Y-m-d H:i:s") ?>"/>
            </div>
            <div class="clearfix"></div>
        </div>


        <div class="form-group">
            <div class="col-lg-3 control-label">
                Chi tiết
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
