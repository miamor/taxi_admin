<?php
include '../../include/config.php';
include '../../objects/taxi.php';

$taxi = new Taxi();

$taxi->username = isset($_POST['username']) ? $_POST['username'] : null;
//$taxi->coin = isset($_POST['coin']) ? $_POST['coin'] : null;
$taxi->readOne();
$coin_change = isset($_POST['coin_change']) ? $_POST['coin_change'] : null;
//$taxi->coin_change_type = isset($_POST['coin_change_type']) ? $_POST['coin_change_type'] : null;

if ($coin_change && $taxi->username) {
	$edit = $taxi->updateCoin($coin_change);
	echo ($edit ? 1 : 0);
} else echo -1;
