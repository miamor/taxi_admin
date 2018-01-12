<?php
include '../../include/config.php';
include '../../objects/infrienge.php';

$infrienge = new Infrienge();

$infrienge->taxiid = isset($_POST['taxiid']) ? $_POST['taxiid'] : null;
$infrienge->time = isset($_POST['time']) ? $_POST['time'] : null;
$infrienge->details = isset($_POST['details']) ? $_POST['details'] : null;
$infrienge->status = true;

if ($infrienge->taxiid && $infrienge->time && $infrienge->details && $infrienge->status) {
	$add = $infrienge->create();
	echo ($add ? 1 : 0);
	//echo json_encode($data, JSON_UNESCAPED_UNICODE);
} else echo -1;
