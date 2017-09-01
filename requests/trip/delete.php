<?php
include '../../include/config.php';
include '../../objects/trip.php';

$trip = new Trip();

$trip->id = isset($_GET['id']) ? $_GET['id'] : null;

if ($trip->id) echo $trip->delete();
else echo -1;
