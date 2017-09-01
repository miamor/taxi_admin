<?php
include 'objects/taxi.php';
include 'objects/paycoin.php';
$paycoin = new Paycoin();
$paycoin->Taxi = $taxi = new Taxi();
if ($subpage) {
	$taxi->username = $subpage;
	$taxi->readOne();
	$paycoin->taxiid = $taxi->id;
}

if ($mode) {
	include $page.'/'.$mode.'.php';
}
else if ($subpage) {
	include $page.'/listOneTaxi.php';
}
else include $page.'/index.php';
