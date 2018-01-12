<?php
include 'objects/taxi.php';
include 'objects/trip.php';
$trip = new Trip();
$taxi = new Taxi();

if ($subpage) {
	$trip->id = $subpage;
	$trip->readOne();
}

if ($mode) {
	include $page.'/'.$mode.'.php';
}
else if ($subpage) {
	include $page.'/view.php';
}
else include $page.'/index.php';
