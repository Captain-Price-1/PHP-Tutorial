<?php

// Example 1: Multiplication has higher precedence than addition
echo 2 + 3 * 4; // Output: 14

// Example 2: Division has higher precedence than subtraction
echo 10 - 6 / 3; // Output: 8

// Example 3: Parentheses can be used to change operator precedence
echo (2 + 3) * 4; // Output: 20

// Example 4: Modulo has higher precedence than addition
echo 10 % 3 + 2; // Output: 3

// Example 5: Comparison operators have higher precedence than logical operators
var_dump(true || false == true); // Output: bool(true)

// Example 6: Bitwise shift has higher precedence than bitwise AND
echo 2 & 3 << 1; // Output: 2

// Example 7: Ternary operator has lower precedence than comparison operators
echo 2 == 2 ? 'true' : 'false'; // Output: true

// Example 8: Assignment operator has lower precedence than arithmetic operators
$x = 2 + 3 * 4;
echo $x; // Output: 14

// Example 9: Logical AND has higher precedence than logical OR
var_dump(true || false && true); // Output: bool(true)

// Example 10: Unary operators have higher precedence than binary operators
$x = -3 * 4;
echo $x; // Output: -12

/* Explanation: 
Operator precedence determines the order in which operators are evaluated in a statement. It is important to understand 
operator precedence to ensure that your code behaves as expected. If the user does not understand operator precedence, they 
may get the wrong answer. In some cases, using parentheses can help to clarify the order of operations.*/