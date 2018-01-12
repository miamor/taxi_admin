<?php
include '../../include/config.php';
include '../../objects/taxi.php';

$taxi = new Taxi();

$taxi->username = isset($_POST['username']) ? $_POST['username'] : null;
$taxi->password = isset($_POST['password']) ? $_POST['password'] : null;
$taxi->confirm_password = isset($_POST['confirm_password']) ? $_POST['confirm_password'] : null;
$taxi->name = isset($_POST['name']) ? $_POST['name'] : null;
$taxi->phone = isset($_POST['phone']) ? $_POST['phone'] : null;
$taxi->idcar = isset($_POST['idcar']) ? $_POST['idcar'] : null;
$taxi->idcard = isset($_POST['idcard']) ? $_POST['idcard'] : null;
$taxi->typecar = isset($_POST['typecar']) ? $_POST['typecar'] : null;
$taxi->seat = isset($_POST['seat']) ? $_POST['seat'] : null;
$taxi->coin = isset($_POST['coin']) ? $_POST['coin'] : null;
$taxi->lock_time = isset($_POST['lock_time']) ? $_POST['lock_time'] : 0;
if ($taxi->lock_time) {
	$taxi->timelife = Date('Y-m-d', strtotime("+{$lock_time} days"));
	$taxi->status = 1;
} else {
	$taxi->timelife = NULL;
	$taxi->status = 0;
}


if ($taxi->password && ($taxi->password == $taxi->confirm_password) && $taxi->username && $taxi->name && $taxi->phone && $taxi->idcar && $taxi->idcard && $taxi->typecar && $taxi->seat) {
	$add = $taxi->create();
	echo ($add ? 1 : 0);
	//echo json_encode($data, JSON_UNESCAPED_UNICODE);
} else echo -1;
