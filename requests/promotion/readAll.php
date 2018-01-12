<?php
include '../../include/config.php';
include '../../objects/promotion.php';

$promotion = new Promotion();

$hist = $promotion->readAll();
$data = array('data' => $hist);

echo json_encode($data, JSON_UNESCAPED_UNICODE);
