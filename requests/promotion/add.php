<?php
include '../../include/config.php';
include '../../objects/promotion.php';

$promotion = new Promotion();

$promotion->userID = isset($_POST['userID']) ? $_POST['userID'] : null;
$promotion->timeFrom = isset($_POST['timeFrom']) ? $_POST['timeFrom'] : null;
$promotion->timeTo = isset($_POST['timeTo']) ? $_POST['timeTo'] : null;
$promotion->details = isset($_POST['details']) ? $_POST['details'] : null;

if ($promotion->userID && $promotion->timeFrom && $promotion->timeTo && $promotion->details) {
	$add = $promotion->create();
	echo ($add ? 1 : 0);
	//echo json_encode($data, JSON_UNESCAPED_UNICODE);
} else echo -1;
