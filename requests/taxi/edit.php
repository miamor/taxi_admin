<?php
include '../../include/config.php';
include '../../objects/taxi.php';

$taxi = new Taxi();

$taxi->username = isset($_POST['username']) ? $_POST['username'] : null;
$taxi->name = isset($_POST['name']) ? $_POST['name'] : null;
$taxi->phone = isset($_POST['phone']) ? $_POST['phone'] : null;
$taxi->idcar = isset($_POST['idcar']) ? $_POST['idcar'] : null;
$taxi->idcard = isset($_POST['idcard']) ? $_POST['idcard'] : null;
$taxi->typecar = isset($_POST['typecar']) ? $_POST['typecar'] : null;
$taxi->seat = isset($_POST['seat']) ? $_POST['seat'] : null;
//$taxi->coin = isset($_POST['coin']) ? $_POST['coin'] : null;
$taxi->status = isset($_POST['status']) ? $_POST['status'] : 0;
$taxi->timelife = null;
if ($taxi->status == 0) {
	$taxi->lock_time = isset($_POST['lock_time']) ? $_POST['lock_time'] : null;
	if ($taxi->lock_time) {
		$taxi->timelife = Date('Y-m-d', strtotime("+{$taxi->lock_time} days"));
		$taxi->status = 1;
	}
}

if ($taxi->username && $taxi->name && $taxi->phone && $taxi->idcar && $taxi->idcard && $taxi->typecar && $taxi->seat) {
	$edit = $taxi->update();
	echo ($edit ? 1 : 0);
} else echo -1;
