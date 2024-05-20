<?php
//
//if you want to access the variable in the anonymous function, you can use the
//keyword  use

$x =1 ;
$sum = function (int|float ...$numbers) use($x) {
    echo $x;
    return array_sum($numbers);
};
echo $sum(1,2,3,4);

//the x variable gets passed as passed by value, not by reference

//CALLBACK FUNCTIONS
//when a function is passed to another function as an argument then if it is called within that function
//then it is called callback function
$array = [1,2,3,4];
$array2 = array_map(function($element){
    echo $element;
    return $element;
},$array);


//another example
$sum = function (callable $callback, int ...$numbers) {
    return $callback(...$numbers);
};
echo $sum(function($elements) {
    return array_sum(array_map(function($element) {
        return $element * 2;
    }, $elements));
}, 1, 2, 3, 4);

// ARROW FUNCTIONS

$array = [1,2,3,4,5];
array_map(function($number) {
    return $number * $number;
},$array);

//we can convert this using the arrow function for example
    $array2= array_map(fn($number)=>$number * $number,$array);

//    an advantage of the arrow function over the anonymous function is that it doesn't require the use of the use
//    keyword in order to use the local variable inside that function'

//but you can't have multi line expression inside that arrow funciton'
