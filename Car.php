<?php
namespace MyProject;

require_once 'MovableInterface.php';

abstract class Car implements MovableInterface
{

    protected $brend;
    protected $maxSpeed;
    protected $color;
    protected $year;
    private $minSpeed = 0;
    protected static $country;
    public const COUNTRY_BMV = 'Germany';
    public const COUNTRY_MERCEDES = 'Ukraine';


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

    public $NewSpeed = [];

    public function up($unit)
    {
        $this->unit = $unit;
        $this->NewSpeed[] = $unit;
        $sum = array_sum($this->NewSpeed);

        if ($sum <= $this->maxSpeed) {
            return 'Машина марки' . $this->brend . 'разогналась до' . $sum;
        } else {
            return 'С такой скоростью эта машина не может ехать';
        }
    }


    public function down($unit)
    {
        $this->unit = $unit;
        $a = array_sum($this->NewSpeed) - $unit;

        if ($a === $this->minSpeed){
            echo $this->stop();
        }else{
            echo 'Машина марки' . $this->brend . 'сбросила скорость до' . $a;
        }
    }

    public static function getCountry()
    {
        return self::$country;
    }

    public static function setCountry($country)
    {
        self::$country = $country;
    }

}