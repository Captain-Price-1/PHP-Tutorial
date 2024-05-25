<?php

// PHP match statement:
// Example 1
$value = 2;
$result = match ($value) {
    1 => 'One',
    2 => 'Two',
    3 => 'Three',
    default => 'Unknown',
};
echo $result; // Output: Two

// Example 2
$fruit = 'apple';
$result = match ($fruit) {
    'apple', 'orange', 'banana' => 'Common fruit',
    'durian', 'mangosteen', 'jackfruit' => 'Exotic fruit',
    default => 'Unknown',
};
echo $result; // Output: Common fruit

// Example 3
$letter = 'b';
$result = match ($letter) {
    'A', 'a' => 'The letter is A',
    'B', 'b' => 'The letter is B',
    default => 'The letter is not A or B',
};
echo $result; // Output: The letter is B

// Difference between switch and match:
// Switch and match are similar in that they allow you to select one of several blocks of code to be executed based on the value 
// of an expression. However, there are some differences between the two:

// 1. Syntax: The syntax of match statement is more concise than switch statement. It uses the arrow (=>) instead of the colon (:)
//    to separate the case label and the corresponding code block.

// 2. Expression: The expression used in match statement must return a value, whereas in switch statement it can be any type of 
//    expression.

// 3. Type strictness: The match statement is type strict, which means that it performs strict comparison (===) between the 
//    expression and the case labels. Switch statement, on the other hand, is not type strict and performs loose comparison (==).

// Example to demonstrate the use case:
// In general, switch statements are more flexible than match statements because they can handle more complex conditions, 
// such as ranges, regular expressions, and boolean expressions. On the other hand, match statements are more concise and 
// easier to read when you have a simple mapping between the expression and the output.

// Example 4 (Switch statement)
$age = 25;
switch (true) {
    case ($age >= 18 && $age <= 30):
        echo "You're in your prime years.";
        break;
    case ($age > 30 && $age <= 60):
        echo "You're in your middle years.";
        break;
    case ($age > 60):
        echo "You're in your golden years.";
        break;
    default:
        echo "You're too young to worry about aging.";
}

// Example 5 (Match statement)
$dayOfWeek = 5;
$result = match ($dayOfWeek) {
    1, 7 => 'Weekend',
    2, 3, 4, 5, 6 => 'Weekday',
};
echo $result;

// In Example 4, we use a switch statement to categorize people into different age groups based on their age. The switch 
// statement allows us to use a boolean expression in the case labels to check for ranges.

// In Example 5, we use a match statement to categorize days of the week into weekends and weekdays. The match statement is more 
// concise and easier to read than the equivalent switch statement.


