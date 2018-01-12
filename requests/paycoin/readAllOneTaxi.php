<?php
include '../../include/config.php';
include '../../objects/paycoin.php';

$paycoin = new PayCoin();

$paycoin->taxiid = isset($_GET['taxiid']) ? $_GET['taxiid'] : null;

if ($paycoin->taxiid) {
	$hist = $paycoin->readAllOneTaxi();
	$data = array('data' => $hist);
} else $data = array('data' => array());

echo json_encode($data, JSON_UNESCAPED_UNICODE);
