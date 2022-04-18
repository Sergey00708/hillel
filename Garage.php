<?php

use Ithillel\Auto\Racing;
use Ithillel\Auto\Truck;

require_once 'Autoloader.php';

$engin = new Engine('4 L');
$car1 = new Racing($engin,500,'Lexus');
$car1->kuzov->setColor('red');
$car1->kuzov->setType('sedan');
$sergey = new Driver('Sergey');
$sergey->startRacing($car1);













