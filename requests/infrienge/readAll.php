<?php
include '../../include/config.php';
include '../../objects/infrienge.php';

$infrienge = new Infrienge();

$hist = $infrienge->readAll();
$data = array('data' => $hist);

echo json_encode($data, JSON_UNESCAPED_UNICODE);
