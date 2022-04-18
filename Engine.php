<?php

require_once 'Autoloader.php';


class Engine
{

    protected $volume;

    public function __construct($volume)
    {
        $this->volume = $volume;
    }

    public function startEngine()
    {
        return 'Двигатель завелся';
    }
}