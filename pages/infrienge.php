<?php
include 'objects/taxi.php';
include 'objects/infrienge.php';
$infrienge = new Infrienge();
$infrienge->Taxi = $taxi = new Taxi();
if ($subpage) {
	$taxi->username = $subpage;
	$taxi->readOne();
	$infrienge->taxiid = $taxi->id;
}

if ($mode) {
	include $page.'/'.$mode.'.php';
}
else if ($subpage) {
	include $page.'/listOneTaxi.php';
}
else include $page.'/index.php';
