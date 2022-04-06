<?php

class people
{
   public $name;
   public $weight;
   public $age;

   public function __construct($name, $age, $weight)
   {
       $this->name = $name;
       $this->age = $age;
       $this->weight = $weight;
   }

   public function about ()
   {
       echo 'name:'. ' '.$this->name. "<br>";
       echo 'age:'.' '.$this->age. "<br>";
       echo 'weight:'.' '.$this->weight;
   }
}

$sergey = new people('Pasha',28, 90);
$sergey->about();

