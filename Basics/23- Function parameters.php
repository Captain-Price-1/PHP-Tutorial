<?php

//setting the default for a parameter
// the default value must be a constant , not a function call or object
// the optional parameter must come after all the required parameters are setup
function foo(int $x, int|float $y = 10){
    return $x + $y;
}