<?php
$config->addJS('dist', "{$page}/{$mode}.js");
?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Thêm đối tác
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo MAIN_URL ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="<?php echo MAIN_URL ?>/taxi">Đối tác</a></li>
    <li class="active">Thêm đối tác</li>
  </ol>
</section>

<!-- section.content Main content -->
<section class="content">

    <form class="add">
        <div class="form-group">
            <div class="col-lg-3 control-label">
                Username
            </div>
            <div class="col-lg-9">
                <input type="text" class="form-control" name="username"/>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="form-group">
            <div class="col-lg-3 control-label">
                Mật khẩu
            </div>
            <div class="col-lg-9">
                <input type="password" class="form-control" name="password"/>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="form-group">
            <div class="col-lg-3 control-label">
                Mật khẩu (xác nhận)
            </div>
            <div class="col-lg-9">
                <input type="password" class="form-control" name="confirm_password"/>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="form-group">
            <div class="col-lg-3 control-label">
                Tên
            </div>
            <div class="col-lg-9">
                <input type="text" class="form-control" name="name"/>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="form-group">
            <div class="col-lg-3 control-label">
                Số điện thoại
            </div>
            <div class="col-lg-9">
                <input type="text" class="form-control" name="phone"/>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="form-group">
            <div class="col-lg-3 control-label">
                Biển số xe
            </div>
            <div class="col-lg-9">
                <input type="text" class="form-control" name="idcar"/>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="form-group">
            <div class="col-lg-3 control-label">
                Card ID
            </div>
            <div class="col-lg-9">
                <input type="text" class="form-control" name="idcard"/>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="form-group">
            <div class="col-lg-3 control-label">
                Số chỗ
            </div>
            <div class="col-lg-9">
                <input type="number" class="form-control" name="seat"/>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="form-group">
            <div class="col-lg-3 control-label">
                Loại xe
            </div>
            <div class="col-lg-9">
                <input type="text" class="form-control" name="typecar"/>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="form-group">
            <div class="col-lg-3 control-label">
                Điểm
            </div>
            <div class="col-lg-9">
                <input type="number" class="form-control" name="coin"/>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="form-group">
            <div class="col-lg-3 control-label">
                Khóa tài khoản (số ngày)
            </div>
            <div class="col-lg-9">
                <input type="number" class="form-control" name="lock_time" min="0"/>
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
