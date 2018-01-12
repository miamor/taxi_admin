<?php
include '../../include/config.php';
include '../../objects/taxi.php';

$taxi = new Taxi();

$taxi->username = isset($_POST['username']) ? $_POST['username'] : null;
$open = $taxi->openaccount();
echo ($open ? 1 : 0);
