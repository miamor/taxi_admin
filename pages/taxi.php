<?php
include 'objects/taxi.php';
$taxi = new Taxi();
if ($subpage) {
	$taxi->username = $subpage;
	$taxi->readOne();
}

if ($mode) {
	include $page.'/'.$mode.'.php';
}
else if ($subpage) {
	include $page.'/view.php';
}
else include $page.'/index.php';
