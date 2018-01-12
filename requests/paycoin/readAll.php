<?php
include '../../include/config.php';
include '../../objects/paycoin.php';

$paycoin = new PayCoin();

$hist = $paycoin->readAll();
$data = array('data' => $hist);

echo json_encode($data, JSON_UNESCAPED_UNICODE);
