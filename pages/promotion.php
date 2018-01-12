<?php
include 'objects/user.php';
include 'objects/promotion.php';
$promotion = new Promotion();
$promotion->User = $user = new User();
if ($subpage) {
	$user->username = $subpage;
	$user->readOne();
	$promotion->userID = $user->id;
}

if ($mode) {
	include $page.'/'.$mode.'.php';
}
else if ($subpage) {
	include $page.'/listOneUser.php';
}
else include $page.'/index.php';
