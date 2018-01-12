<?php
include '../../include/config.php';
include '../../objects/taxi.php';

$taxi = new Taxi();

$taxi->username = isset($_POST['username']) ? $_POST['username'] : null;
$taxi->password = isset($_POST['password']) ? $_POST['password'] : null;
$taxi->confirm_password = isset($_POST['confirm_password']) ? $_POST['confirm_password'] : null;

if ($taxi->username && $taxi->password && ($taxi->password == $taxi->confirm_password)) {
	$edit = $taxi->updatePassword();
	echo ($edit ? 1 : 0);
} else echo -1;
