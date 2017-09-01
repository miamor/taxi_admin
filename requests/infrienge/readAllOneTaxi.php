<?php
include '../../include/config.php';
include '../../objects/infrienge.php';

$infrienge = new Infrienge();

$infrienge->taxiid = isset($_GET['taxiid']) ? $_GET['taxiid'] : null;

if ($infrienge->taxiid) {
	$hist = $infrienge->readAllOneTaxi();
	$data = array('data' => $hist);
} else $data = array('data' => array());

echo json_encode($data, JSON_UNESCAPED_UNICODE);
