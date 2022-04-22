<?php
namespace Project;


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