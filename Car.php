<?php

include 'interfaceCar.php';

class Car implements MovableInterface
{

    protected $brend;
    protected $maxSpeed;
    protected $color;
    protected $year;
    private $minSpeed = 0;


    public function __construct($maxSpeed, $brend)
    {
        $this->maxSpeed = $maxSpeed;
        $this->brend = $brend;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function start()
    {
        return 'Машина марки' . ' ' . $this->brend . ' ' . 'Поехала';
    }

    public function stop()
    {
        return 'Машина марки' . $this->brend . 'Остановилась';
    }

    public function up($unit)
    {
        if ($unit <= $this->maxSpeed) {
            return 'Машина марки' . $this->brend . 'разогналась до' . $this->unit = $unit;
        } else {
            return 'С такой скоростью эта машина не может ехать';
        }
    }

    public function down($unit)
    {
        if ($unit === $this->minSpeed){
            echo $this->stop();
        }else{
            echo 'Машина марки' . $this->brend . 'сбросила скорость до' . $this->unit = $unit;
        }
    }
}