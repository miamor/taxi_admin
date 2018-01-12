<?php
include '../../include/config.php';
include '../../objects/promotion.php';

$promotion = new Promotion();

$promotion->userID = isset($_GET['userID']) ? $_GET['userID'] : null;

if ($promotion->userID) {
	$hist = $promotion->readAllOneUser();
	$data = array('data' => $hist);
} else $data = array('data' => array());

echo json_encode($data, JSON_UNESCAPED_UNICODE);
