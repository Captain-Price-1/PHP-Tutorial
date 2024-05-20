<?php

$arr1 = array("a" => "red", "b" => "green");
$arr2 = array("b" => "yellow", "c" => "blue");

$result = array_merge($arr1, $arr2);
print_r($result);
// Output
// Array
// (
//     [a] => red
//     [b] => yellow
//     [c] => blue
// )

// variation 1: numeric array
$arr3 = array(1, 2, 3);
$arr4 = array(4, 5, 6);
$result1 = array_merge($arr3, $arr4);
print_r($result1);
// Output
// Array
// (
//     [0] => 1
//     [1] => 2
//     [2] => 3
//     [3] => 4
//     [4] => 5
//     [5] => 6
// )

// variation 2: associative array
$arr5 = array("a" => "red", "b" => "green");
$arr6 = array("b" => "yellow", "c" => "blue");
$result2 = array_merge($arr5, $arr6);
print_r($result2);
// Output
// Array
// (
//     [a] => red
//     [b] => yellow
//     [c] => blue
// )

// variation 3: multidimensional array
$arr7 = array(array("a" => "red", "b" => "green"), array("b" => "yellow", "c" => "blue"));
$result3 = array_merge(...$arr7);
print_r($result3);
// Output
// Array
// (
//     [a] => red
//     [b] => yellow
//     [c] => blue
// )

// Example 1: Simple array reduce
$arr8 = array(1, 2, 3, 4, 5);
$result4 = array_reduce($arr8, function($carry, $item) {
    return $carry + $item;
}, 0);
echo $result4 . PHP_EOL;
// Output
// 15


// Example 2: Advanced array reduce
$arr12 = array(
    array("name" => "John", "age" => 24),
    array("name" => "Jane", "age" => 26),
    array("name" => "Bob", "age" => 28)
);
$result8 = array_reduce($arr12, function($carry, $item) {
    $carry[$item['name']] = $item['age'];
    return $carry;
}, array());
print_r($result8);
// Output
// Array
// (
//     [John] => 24
//     [Jane] => 26
//     [Bob] => 28
// )


// array_search - Searches the array for a given value and returns the corresponding key if successful
// Syntax: mixed array_search ( mixed $needle , array $haystack [, bool $strict = false ] )
// Parameters:
//   $needle - The value to search for
//   $haystack - The array to search
//   $strict - If the third parameter strict is set to true then the array_search() function will search for identical elements (of the same type). This means the type of $needle must be the same as the type of the value in $haystack to be considered identical.

$arr13 = array("red", "green", "blue");
$key = array_search("green", $arr13);
echo $key . PHP_EOL;
// Output
// 1

// This code won't work as expected because the array_search() function returns the key of the searched value if found, or false if not found.
//  The comparison with false using the == operator will not work as expected because false is a boolean value and the array_search() function returns false as a string. To get the expected result, the comparison should be done with the === operator which checks for both the value and the type. The code should be rewritten as follows:

$array = [1,2,34,5,5];
$key = array_search('a',$array);
if($key === false){
    echo 'key not found';
}



// array_diff - Computes the difference of arrays
// Syntax: array array_diff ( array $array1 , array $array2 [, array $... ] )
// Parameters:
//   $array1 - The first array.
//   $array2 - The second array.
//   $... - Additional arrays.
// Returns an array containing all the entries from array1 that are not present in any of the other arrays.

$arr1 = array("a" => "red", "b" => "green", "c" => "blue");
$arr2 = array("a" => "red", "b" => "yellow", "d" => "pink");
$result_diff = array_diff($arr1, $arr2);
print_r($result_diff);
// Output
// Array
// (
//     [c] => blue
// )

// array_diff_assoc - Computes the difference of arrays with additional index check
// Syntax: array array_diff_assoc ( array $array1 , array $array2 [, array $... ] )
// Parameters:
//   $array1 - The first array.
//   $array2 - The second array.
//   $... - Additional arrays.
// Returns an array containing all the entries from array1 that have key values that are not present in any of the other arrays.

$arr3 = array("a" => "red", "b" => "green", "c" => "blue");
$arr4 = array("a" => "red", "b" => "yellow", "c" => "blue");
$result_diff_assoc = array_diff_assoc($arr3, $arr4);
print_r($result_diff_assoc);
// Output
// Array
// (
//     [b] => green
// )