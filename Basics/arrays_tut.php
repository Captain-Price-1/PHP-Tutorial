<?php

// ARRAYS

// Create an array of programming languages
$programmingLanguages = ['PHP', 'Java', 'Python'];

// Access array elements using array notation
echo $programmingLanguages[0]; // Output: PHP
echo $programmingLanguages[2]; // Output: Python

// Accessing elements with negative index is only supported in PHP 7.1 and later
echo $programmingLanguages[-1]; // Output: Python

// Check if an item exists in an array using the isset function
var_dump(isset($programmingLanguages[2])); // Output: bool(true)
var_dump(isset($programmingLanguages[3])); // Output: bool(false)

// Update an array element
$programmingLanguages[1] = 'C++';
echo($programmingLanguages[1]); // Output: C++

// Count the number of elements in an array
echo(count($programmingLanguages)); // Output: 3

// Add an element to the end of an array using the [] syntax
$programmingLanguages[] = 'Ruby';
var_dump($programmingLanguages); // Output: array(4) { [0]=> string(3) "PHP" [1]=> string(3) "C++" [2]=> string(6) "Python" [3]=> string(4) "Ruby" }

// Add an element to the end of an array using the array_push function
array_push($programmingLanguages, 'Another upcoming language');
var_dump($programmingLanguages); // Output: array(5) { [0]=> string(3) "PHP" [1]=> string(3) "C++" [2]=> string(6) "Python" [3]=> string(4) "Ruby" [4]=> string(23) "Another upcoming language" }

// Create an associative array (a.k.a. dictionary or hash)
$programmingLanguages = [
    'php' => '8.1',
    'python' => '3.9'
];

// Output the contents of an array using print_r function
print_r($programmingLanguages); // Output: Array ( [php] => 8.1 [python] => 3.9 )

$programmingLanguages = array('php', 'C++', 'Python');

// Count the number of elements in an array
echo count($programmingLanguages); // Output: 3

// Add an element to the end of an array using the [] syntax
$programmingLanguages[] = 'Ruby';
var_dump($programmingLanguages); // Output: array(4) { [0]=> string(3) "PHP" [1]=> string(3) "C++" [2]=> string(6) "Python" [3]=> string(4) "Ruby" }


$newLanguage = 'go'; // Create a variable called $newLanguage and set its value to 'go'

$programmingLanguages['go'] = '1.15'; // Add a new key-value pair 'go' => '1.15' to the $programmingLanguages array

echo $programmingLanguages; // Attempt to output the $programmingLanguages array as a string, but it will only output the string "Array"

$programmingLanguages = [
    'php' => [
        'creator' => 'Rasmus Lerdorf', // Add a key-value pair to the 'php' array with the key 'creator' and value 'Rasmus Lerdorf'
        'extension' => '.php' // Add a key-value pair to the 'php' array with the key 'extension' and value '.php'
    ],
    'python' => [
        'creator' => 'Guido Van Rossum', // Add a key-value pair to the 'python' array with the key 'creator' and value 'Guido Van Rossum'
        'extension' => '.py' // Add a key-value pair to the 'python' array with the key 'extension' and value '.py'
    ]
];


$array = [true => 'a', 1=>'b','1'=>'c',1.8=>'d'];

var_dump($array);

$array = ['a', 'b', 50 => 'c', 'd', 'e'];
// Define an array with five elements, including a key-value pair with a numeric key of 50

print_r($array);
// Output the contents of the $array array, including keys and values
// Output: Array ( [0] => a [1] => b [50] => c [51] => d [52] => e )


echo array_pop($array);
// Remove and return the last element from the $array array, and output it to the console
// Output: e

print_r($array);
// Output the contents of the $array array, including keys and values
// Output: Array ( [0] => a [1] => b [50] => c [51] => d )

echo array_shift($array);
// Remove and return the first element from the $array array, and output it to the console
// Output: a

print_r($array);
// Output the contents of the $array array, including keys and values
// Output: Array ( [1] => b [50] => c [51] => d )
