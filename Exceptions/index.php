<?php

function divide($a,$b){
    if($b === 0){
        throw new Exception('на ноль делить нельзя');
    }
    return $a / $b;
}

$a = 10;
$b = 0;

try{
    $result = divide($a, $b);
}catch (Exception $exception){
    echo $exception->getMessage() .PHP_EOL;
    $b = 2;
}

$result = divide($a, $b);

echo $result;





