<?php
namespace Project;

use Mathimatics\Mathematics;
use Mathimatics\Test\Hello;
use Project\Ithillel\Auto\Racing;

require __DIR__ . '/../vendor/autoload.php';


//$engine = new Engine('4 L');
//$car1  = new Racing($engine,500,'Lexus');
//$car1->kuzov->setType('sedan');
//$car1->kuzov->setColor('red');
//$sergey = new Driver('Sergey', 31);
//$sergey->startRacing($car1) . PHP_EOL;
//$sergey->UpRacing($car1, 10);
//$sergey->UpRacing($car1, 20);
//$sergey->DownRacing($car1,15);
//$sergey->stopRacing($car1);

$sum = new Mathematics();
echo $sum->sum(2, 2);

$helo = new Hello();
echo $helo->seyHello();












