<?php

// NULL

// Assign null to a variable
$x = null;

// Output the value of $x (which is an empty string)
echo $x;

// Output the data type and value of $x
var_dump($x); // Output: NULL

// Check if $x is null using the === operator
var_dump($x === null); // Output: bool(true)

// Output the data type and value of an undefined variable
var_dump($y); // Output: NULL

// Cast null to a string
var_dump((string) $x); // Output: string(0) ""
