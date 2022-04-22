<?php
namespace Project;

use Project\Ithillel\Auto\Racing;
use Project\Ithillel\Auto\Truck;

require_once __DIR__ . '/../vendor/autoload.php';


class Driver
{
    protected $name;
    protected $age;


    public function __construct($name,$age=18)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function startRacing(Racing $racing)
    {
       return $racing->start();
    }

    public function stopRacing(Racing $racing)
    {
       echo $racing->stop();
    }

    public function UpRacing(Racing $racing,$unit)
    {
        return $racing->up($unit);
    }

    public function DownRacing(Racing $racing, $unit)
    {
        return $racing->down($unit);
    }

///////////////////////////////////////////////////////////////////

    public function startTrack(Truck $truck)
    {
        $truck->start();
    }

    public function stopTrack(Truck $truck)
    {
        echo $truck->stop();
    }

    public function UpRun(Truck $truck,$unit)
    {
        $truck->up($unit);
    }

    public function DownRun(Truck $truck, $unit)
    {
        $truck->down($unit);
    }

}