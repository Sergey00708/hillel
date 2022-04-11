<?php
include 'BMV.php';
include 'Mercedes.php';
$car1 = new BMV(300,'BMV');
var_dump($car1);

$car2 = new Mercedes(250,'Mercedes');
echo $car2 ->up(300);