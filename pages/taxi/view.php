<?php
$config->addJS('dist', "{$page}/view.js");
?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?php echo $taxi->name ?>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo MAIN_URL ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="<?php echo MAIN_URL ?>/taxi">Đối tác</a></li>
    <li class="active"><?php echo $taxi->name ?></li>
  </ol>
</section>

<!-- section.content Main content -->
<section class="content">

    <form class="edit">
        <div class="form-group">
            <div class="col-lg-3 control-label">
                Username (fixed)
            </div>
            <div class="col-lg-9">
                <input type="text" class="form-control" name="username" readonly value="<?php echo $taxi->username ?>"/>
                <a href="?mode=editpassword">Sửa mật khẩu</a>
            </div>
            <div class="clearfix"></div>
        </div>


        <div class="divider"></div>

        <div class="form-group">
            <div class="col-lg-3 control-label">
                Tên
            </div>
            <div class="col-lg-9">
                <input type="text" class="form-control" name="name" value="<?php echo $taxi->name ?>"/>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="form-group">
            <div class="col-lg-3 control-label">
                Số điện thoại
            </div>
            <div class="col-lg-9">
                <input type="text" class="form-control" name="phone" value="<?php echo $taxi->phone ?>"/>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="form-group">
            <div class="col-lg-3 control-label">
                Biển số xe
            </div>
            <div class="col-lg-9">
                <input type="text" class="form-control" name="idcar" value="<?php echo $taxi->idcar ?>"/>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="form-group">
            <div class="col-lg-3 control-label">
                Card ID
            </div>
            <div class="col-lg-9">
                <input type="text" class="form-control" name="idcard" value="<?php echo $taxi->idcard ?>"/>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="form-group">
            <div class="col-lg-3 control-label">
                Số chỗ
            </div>
            <div class="col-lg-9">
                <input type="number" class="form-control" name="seat" value="<?php echo $taxi->seat ?>"/>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="form-group">
            <div class="col-lg-3 control-label">
                Loại xe
            </div>
            <div class="col-lg-9">
                <input type="text" class="form-control" name="typecar" value="<?php echo $taxi->typecar ?>"/>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="form-group">
            <div class="col-lg-3 control-label">
                Điểm
            </div>
            <div class="col-lg-9">
                <input type="number" readonly class="form-control" name="coin" value="<?php echo $taxi->coin ?>"/>
                <a href="?mode=editcoin">Sửa coin</a>
            </div>
            <div class="clearfix"></div>
        </div>

<?php if ($taxi->status == 0) { ?>
        <div class="form-group">
            <div class="col-lg-3 control-label">
                Khóa tài khoản (ngày)
            </div>
            <div class="col-lg-9">
                <input type="hidden" name="status" value="<?php echo $taxi->status ?>"/>
                <input type="number" class="form-control" value="<?php echo $taxi->lock_time ?>" name="lock_time"/>
            </div>
            <div class="clearfix"></div>
        </div>
<?php } else { ?>
        <div class="form-group">
            <div class="col-lg-3 control-label">
                Thời gian còn lại mở tài khoản
            </div>
            <div class="col-lg-9">
                <input type="hidden" name="openday" value="<?php echo $taxi->timelife ?>"/>
                <input type="hidden" name="status" value="<?php echo $taxi->status ?>"/>
                <input type="text" class="form-control" readonly value="" id="clockdiv"/>
                <div class="btn btn-success open-account">Mở ngay</div>
            </div>
            <div class="clearfix"></div>
        </div>
<?php } ?>
        <div class="add-form-submit center">
            <input type="reset" value="Reset"/>
            <input type="submit" value="Submit"/>
        </div>
    </form>

</section><!-- /.content -->

<div class="clear"></div>
