<?php

// Question: What are expressions in PHP, briefly explain it?

// Expressions are combinations of values, variables, operators, and functions that, when evaluated, result in a value.

$x = 5;
$t = $x;

$z = $x === $y;

// Question: What are operators?

// Operators are symbols or keywords used to perform operations on values and variables in PHP.

// Question: What is arithmetic operator?

// Arithmetic operators are used to perform mathematical operations such as addition, subtraction, multiplication, division, and modulus in PHP.

$x = 10;
$y =2 ;

var_dump($x + $y); // int(12)
var_dump($x % $y); // int(0)

var_dump($x ** $y); // int(100)

$x ='10';
$y = -2;

var_dump($x); // string(2) "10"

var_dump(+$x); // int(10)

var_dump(-$x); // int(-10)

// Question: Tell me all the scenarios along with the examples when dividing two numbers result in float in PHP?

// Dividing a float by an integer, dividing an integer by a float, or dividing two floats will result in a float in PHP. For example:

$x = 5.0 / 2; // float(2.5)
$y = 10 / 3.0; // float(3.3333333333333)
$z = 1.0 / 3.0; // float(0.33333333333333)

// Question: Why (10.5 % 2.9) result in 0?

// The modulus operator (%) returns the remainder of a division. In this case, the result of the modulus operation is 3.8, but since 3.8 is not an integer, it is rounded down to 3. Therefore, the result is 0 because 10.5 is not divisible by 2.9.

// Question: What happens when doing mod one of the number is negative?

// When using the modulus operator with negative numbers, the result will be negative if the dividend is negative. For example:

$x = -5 % 2; // -1

// Question: Explain me the below expression:

// This code assigns the value 10 to $y and then adds 5 to it. The result is stored in $x, which is equal to 15. $y remains 10.

$x = ($y = 10) + 5;
var_dump($x,$y); // int(15) int(10)

// Question: Compare between strict and normal comparison giving examples?

// In PHP, normal comparison (==) compares the values of two variables and returns true if they are equal. Strict comparison (===) not only compares the values but also the data type of the variables. For example:

$x = 5;
$y = '5';
var_dump($x == $y); // bool(true)
var_dump($x === $y); // bool(false)

// Question: Please explain spaceship operator in PHP?

// The spaceship operator (<=>) compares two values and returns -1 if the left operand is less than the right operand, 0 if they are equal, and 1 if the left operand is greater than the right operand. For example:

$x = 5;
$y = 10;
var_dump($x <=> $y); // int(-1)

// Question: What does var_dump(0 == 'hello') output in PHP 7.xx version and PHP 8.xx version and why?

// In PHP 7.xx, the expression will output
// false because the two values are not equal, and PHP performs a type conversion, converting the string 'hello' to 0. In PHP 8.xx, a warning will be issued because of the comparison of a number with a non-numeric string, and the expression will output false.

var_dump(0 == 'hello'); // PHP 7.xx: bool(false),
//  PHP 8.xx: Warning: A non-numeric value encountered in ... on line ... bool(false)

/* ------------------------------------------------------------------------------------------------------------------ */

// This code initializes a variable $x with the string 'Hello World',
// and a variable $y with the result of searching for the character 'H' in the string using the PHP function strpos().

// The code then enters an if-else block, where the condition checks if $y is equal to false using the assignment operator '=' instead of the comparison operator '=='.

// Since the assignment operator returns the assigned value, the condition will always be false, and the code will always execute the else block, outputting the message 'H Found at index' concatenated with the value of $y, which is 0 since the character 'H' is found at the beginning of the string.

$x = 'Hello World';
$y = strpos($x,'H');
if($y = false){
echo 'H not found';
}
else{
echo 'H Found at index'. $y;
}

// Output: 'H Found at index 0'


// This code initializes a variable $result with a ternary operation using the === operator.

// If $y is exactly equal to false, 'H not found' is assigned to $result.

// Otherwise, 'H found at index' with the value of $y is assigned to $result.

// The value of $result is then outputted to the screen.

$result = $y === false ? 'H not found' : 'H found '.$y;
echo $result;

// Output: 'H found 0'

// The ?? operator is the null coalescing operator.

// In this code, $y is assigned $x if it's not null, and 'Hello' otherwise.

// This code could be used to provide a default value for a variable if it's null.

// For example:

$user = getUser() ?? getDefaultUser();

// If getUser() returns null, $user will be assigned the value of getDefaultUser().


/* ------------------------------------------------------------------------------------------------------------------ */
// The error control operator "@" is used to suppress error messages in PHP.

// For example:

$file = @fopen('file.txt', 'r');

// If the file 'file.txt' cannot be opened for reading, the error message will not be displayed.

// Increment and decrement operators are used to increase or decrease the value of a variable by 1.

// The increment operator is "++", and the decrement operator is "--".

// For example:

$x = 5;
echo ++$x; // 6
echo --$x; // 5

// The increment and decrement operators have some corner cases, such as using them with non-numeric strings or null values, which can lead to unexpected results.

// The "&&" and "and" operators, and the "||" and "or" operators, are logical operators in PHP.

// The main difference between them is that "&&" and "||" have higher precedence than "and" and "or", which means that they are evaluated first.

// For example:

$x = true;
$y = false;

if($x || $y and $y) {
echo 'Hello World';
}



// The output of the below code depends on the value of $x, and the output of the hello() function.

// If $x is false, hello() will not be executed and the expression will evaluate to true, because "false && true" is false, and "false || true" is true.

// If $x is true, hello() will be executed, but the expression will still evaluate to true, because "true && false" is false, and "false || true" is true.

$x = false;
$y = false;

function hello(){
echo 'Hello World';
return false;
}

var_dump($x && hello() || true);

// Output: bool(true)

/* ------------------------------------------------------------------------------------------------------------------ */

// Bitwise operators are used to perform operations on the binary representation of numbers.

// There are six bitwise operators in PHP: "&", "|", "^", "~", "<<", and ">>".

// Here are 5 examples of each type of bitwise operator:

// & - bitwise AND

$x = 5; // 101
$y = 3; // 011

echo $x & $y; // 001

// | - bitwise OR

$x = 5; // 101
$y = 3; // 011

echo $x | $y; // 111

// ^ - bitwise XOR

$x = 5; // 101
$y = 3; // 011

echo $x ^ $y; // 110

// ~ - bitwise NOT

$x = 5; // 101

echo ~$x; // -6

// << - bitwise left shift

$x = 5; // 101

echo $x << 2; // 10100

// >> - bitwise right shift

$x = 5; // 101

echo $x >> 1; // 10


// The bitwise operators can have some corner cases, such as using them with negative numbers, or with numbers that are too large to be represented as integers, which can lead to unexpected results.

// The array operators in PHP are used to manipulate arrays.

// There are two array operators: "+" and "===".

// The "+" operator returns the union of two arrays, i.e., an array containing all the values of both arrays, without any duplicates.

// The "===" operator returns true if both arrays have the same key/value pairs in the same order, and false otherwise.

// For example:

$x = ['a','b','c'];
$y = ['d','e','f'];

$z = $x + $y;

print_r($z); // Array ( [0] => a [1] => b [2] => c [3] => d [4] => e [5] => f )

$x = ['a' => 1, 'b'=>2,'c'=>3];
$y = ['a'=>4,'e'=>5];
print_r($x + $y); // Array ( [a] => 1 [b] => 2 [c] => 3 [e] => 5 )

// The "+" operator can have some corner cases, such as using it with associative arrays, where the values of duplicate keys may be overwritten or merged in unexpected ways.







