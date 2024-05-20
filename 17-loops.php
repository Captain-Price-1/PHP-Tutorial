<?php


// Types of loops in PHP:
// Example 1: for loop
for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}
// Output: 1 2 3 4 5 6 7 8 9 10

// Example 2: while loop
$j = 1;
while ($j <= 10) {
    echo $j . " ";
    $j++;
}
// Output: 1 2 3 4 5 6 7 8 9 10

// Example 3: do-while loop
$k = 1;
do {
    echo $k . " ";
    $k++;
} while ($k <= 10);
// Output: 1 2 3 4 5 6 7 8 9 10

// Example 4: foreach loop
$colors = array('red', 'green', 'blue');
foreach ($colors as $color) {
    echo $color . " ";
}
// Output: red green blue

// Example 5: continue statement inside a loop
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        continue;
    }
    echo $i . " ";
}
// Output: 1 3 5 7 9

// Expert level examples:
// Example 6: nested for loop
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}
// Output: 
// *
// * *
// * * *
// * * * *
// * * * * *

// Example 7: while loop with break statement
$x = 1;
while ($x <= 10) {
    echo $x . " ";
    if ($x == 5) {
        break;
    }
    $x++;
}
// Output: 1 2 3 4 5

// Example 8: foreach loop with break and continue statements
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
foreach ($numbers as $num) {
    if ($num % 2 == 0) {
        continue;
    }
    if ($num == 7) {
        break;
    }
    echo $num . " ";
}
// Output: 1 3 5

// Example 9: infinite loop with conditional break statement
$counter = 0;
while (true) {
    echo $counter . " ";
    $counter++;
    if ($counter == 10) {
        break;
    }
}
// Output: 0 1 2 3 4 5 6 7 8 9

// Example 10: do-while loop with switch statement
$dayOfWeek = 'Monday';
do {
    switch ($dayOfWeek) {
        case 'Monday':
            echo "It's Monday.";
            break;
        case 'Tuesday':
        case 'Wednesday':
            echo "It's a weekday.";
            break;
        case 'Thursday':
            echo "It's almost Friday.";
            break;
        case 'Friday':
            echo "It's Friday!";
            break;
        default:
            echo "It's a weekend.";
    }
} while (false);
// Output: It's Monday.

// Explanation:
// PHP provides several types of loops to iterate over a set of values or perform a specific set of tasks a certain number of times.
// The most common types of loops in PHP are the for loop, while loop, do-while loop, and foreach loop.

// The break statement in PHP is used to terminate the execution of a loop prematurely. It takes an optional argument, which specifies
// the number of levels of nesting to break out of. If no argument is given, the break statement terminates the current loop only. If
// an argument is given, the break statement terminates the specified number of nested loops. For example, "break 2" would break out of
// two nested loops.

// The continue statement in PHP is used to skip the current iteration of a loop and move on to the next iteration. It is often used
// inside loops with conditional statements to skip over certain values or actions. When a continue statement is executed, the loop
// immediately jumps to the next iteration and begins executing the loop again from the top.



// Example of modifying array values using foreach loop
$numbers = array(1, 2, 3, 4, 5);
foreach ($numbers as &$value) {
    $value *= 2;
}
unset($value);
print_r($numbers);
// Output: Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 [4] => 10 )

/* Explanation:
The foreach loop in PHP is a convenient way to iterate over an array and modify its values. In the example above, we are using 
a reference variable (&$value) to modify the original values of the array. This means that the values in the array are modified 
directly without creating a copy of the array. 

The advantages of modifying array values using foreach loop are:

1. Easy to read and understand: The foreach loop is a simple and concise way to modify the values of an array.

2. Efficient: Modifying array values using foreach loop is a memory-efficient way to modify large arrays because it does not 
   create a copy of the array.

3. Modifies the original array: Modifying array values using foreach loop modifies the original array directly, so you don't 
   have to worry about creating a copy of the array or using a separate variable to hold the modified values.

The disadvantages of modifying array values using foreach loop are:

1. Can be error-prone: Modifying array values using foreach loop can be error-prone if you are not careful with the references 
   and variable names. If you accidentally overwrite the reference variable or use the wrong variable name, you may end up with 
   unexpected results.

2. Not always suitable: Modifying array values using foreach loop is not always suitable for every situation. If you need to 
   modify the keys of an array or perform complex modifications, you may need to use other loop constructs or array functions. */

// Examples of bad practices in loops and how to deal with them:
// Bad practice 1: Using an infinite loop
$i = 0;
while (true) {
    echo $i++;
    if ($i == 10) {
        break;
    }
}
// Fix: Use a conditional loop with a condition that will eventually become false, such as a for loop or a while loop with a 
//       defined condition.

// Bad practice 2: Modifying the loop counter inside the loop
for ($i = 0; $i < 10; $i++) {
    echo $i;
    $i++;
}
// Fix: Do not modify the loop counter inside the loop. The loop counter should be incremented or decremented only in the loop 
//       header.

// Bad practice 3: Not initializing the loop counter
for ($i = 0; $i < 10; ) {
    echo $i++;
}
// Fix: Initialize the loop counter in the loop header to avoid errors and make the code more readable.

// Bad practice 4: Using a loop to iterate over a large array multiple times
$bigArray = array_fill(0, 1000000, 'value');
for ($i = 0; $i < 10; $i++) {
    foreach ($bigArray as $value) {
        // do something with $value
    }
}
// Fix: If you need to iterate over a large array multiple times, consider creating a copy of the array or using a different 
//       data structure that is more suitable for your needs.


/* ------------------------------------------------------------------------------------------------------------------ */

// foreach

$user = [
    'name'  => 'Anas',
    'email' => 'anasparvez@gmail.com',
    'skills' => ['c++','javascript','react','angular','python','c'],
];

// Method 1: Using a foreach loop
foreach ($user as $key => $value) {
    if (is_array($value)) {
        $value = implode(', ', $value);
    }
    echo $key . ": " . $value . "<br>";
}
// Output:
// name: Anas
// email: anasparvez@gmail.com
// skills: c++, javascript, react, angular, python, c

// In Method 1, we use a foreach loop to iterate over each key-value pair in the array. If the value is an array, we use the 
// implode() function to convert it to a comma-separated string. We then print the key-value pair using echo.


// Method 2: Using a combination of array_walk_recursive() and list()
function printKeyValue($key, $value) {
    echo "$key: $value<br>";
}

array_walk_recursive($user, 'printKeyValue');
// Output:
// name: Anas
// email: anasparvez@gmail.com
// 0: c++
// 1: javascript
// 2: react
// 3: angular
// 4: python
// 5: c


// In Method 2, we use a combination of array_walk_recursive() and list() functions to recursively iterate over each element in 
// the array and print the key-value pairs. The printKeyValue() function is used as the callback function for array_walk_recursive().


// Method 3: Using a combination of array_map(), array_keys(), and array_values()
$keys = array_map('ucfirst', array_keys($user));
$values = array_values($user);
$values[2] = implode(', ', $values[2]);
$output = array_combine($keys, $values);
foreach ($output as $key => $value) {
    echo "$key: $value<br>";
}


// Output:
// Name: Anas
// Email: anasparvez@gmail.com
// Skills: c++, javascript, react, angular, python, c



// In Method 3, we use a combination of array_map(), array_keys(), and array_values() functions to create two new arrays: one 
// containing the capitalized keys and one containing the values. We then use array_combine() function to create a new array 
// with the keys and values combined. Finally, we use a foreach loop to print the key-value pairs.


// Explanation:
// PHP provides several methods to print all the elements of an array in a specific order. The most common methods are using a 
// foreach loop or a combination of array functions. In the examples above, we have demonstrated three different methods to print 
// the elements of the $user array in the specified order.
