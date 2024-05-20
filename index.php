<?php

$foo = 'bar';    // Declare a variable named $foo and assign it the string value "bar".
$$foo = 'baz';   // Declare a variable with the name equal to the value of $foo (which is "bar") and assign it the string value "baz".

echo $foo, $$foo;   // Output the value of $foo (which is "bar") followed by the value of the variable named $bar (which is "baz").


function sum ($x,$y){
    return $x + $y;
}

echo sum(2,'3');



// TYPE CASTING
// Type casting is the process of converting a variable from one data type to another. In PHP, you can use various type casting functions to convert a value to a different data type, such as (int), (float), (string), (bool), etc.

// Example:
// The following code demonstrates how to cast a string value to an integer using (int) casting function and then print the result using the var_dump function.

$x = '5'; // a string value
var_dump($x); // outputs: string(1) "5"

$x = (int) '5'; // cast the string value to an integer
var_dump($x); // outputs: int(5)

// BOOLEANS
// Booleans are a data type in PHP that can only have two possible values: true or false. Booleans are commonly used in conditional statements to control the flow of program execution.

// Example:
// The following code demonstrates how to define a boolean variable, and then use it in a simple if-else conditional statement.

$isComplete = true; // a boolean value
if ($isComplete) { // if the value is true
echo "Task is complete."; // outputs: Task is complete.
} else { // if the value is false
echo "Task is incomplete.";
}

// Q- tell me about all the possible false values in PHP, like null, 0, 0.0, and so on.

// In PHP, the following values are considered false when used in a boolean context:

// The boolean false itself
// An integer with a value of 0
// A float with a value of 0.0
// An empty string ('')
// The special constant null
// An empty array (array())
// An object with no properties or elements (an instance of an empty class)
// Note that any other value not mentioned above will be considered true in a boolean context, including non-empty strings, non-zero integers or floats, non-empty arrays, and non-null objects.

// Q- tell me why $isComplete = false will echo out an empty string, although $isComplete = true echo out 1?

// In PHP, when you print or echo a boolean value, true is displayed as 1 and false as an empty string (''). This is a behavior of PHP, and it's often used to represent boolean values in string format. When you assign $isComplete = true, the value of $isComplete becomes a boolean true, which is then echoed as 1. On the other hand, when you assign $isComplete = false, the value of $isComplete becomes a boolean false, which is then echoed as an empty string ('').





?>

