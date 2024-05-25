<?php

// strict types

declare(strict_types=1);
function sum1(int $x,int $y){
    return $x + $y;
}

//return stops the execution of the function and it will go where it was called from
//however if you use the "return" in the global scope , it will stop the execution of the whole script
function sum (int $x,int $y){
    return $x + $y;
}

// declare - ticks
function onTick(){
    echo 'Tick<br />';
}
register_tick_function('onTick');
declare(ticks = 3);

$i=0;
$length = 10;

while($i < $length){
    echo $i++.'<br />';
}

//output will be something like this
//Tick
//0
//1
//2
//Tick
//3
//4
//5
//...

