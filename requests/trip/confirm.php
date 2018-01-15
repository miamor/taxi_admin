<?php
include '../../include/config.php';
include '../../objects/trip.php';

$trip = new Trip();

$trip->id = isset($_GET['id']) ? $_GET['id'] : null;
$type = isset($_GET['type']) ? $_GET['type'] : null;

if ($trip->id) {
    if ($type == 'confirm') echo $trip->confirm();
    else echo $trip->unconfirm();
} else echo -1;
