<?php

// Example 1: if statement with a single condition
$age = 25;
if ($age >= 18) {
    echo "You are an adult.";
}

// Example 2: if-else statement with two conditions
$age = 15;
if ($age >= 18) {
    echo "You are an adult.";
} else {
    echo "You are not an adult.";
}

// Example 3: if-elseif-else statement with multiple conditions
$age = 35;
if ($age < 18) {
    echo "You are a child.";
} elseif ($age < 60) {
    echo "You are an adult.";
} else {
    echo "You are a senior citizen.";
}

// Example 4: Nested if statement
$age = 20;
if ($age >= 18) {
    if ($age < 21) {
        echo "You are a young adult.";
    } else {
        echo "You are an adult.";
    }
}

// Example 5: Ternary operator as a shorthand for if-else statement
$age = 17;
echo ($age >= 18) ? "You are an adult." : "You are not an adult.";

// Expert level examples:
// Example 6: using logical operators in conditions
$age = 30;
$gender = 'female';
if ($age >= 18 && $gender == 'female') {
    echo "You are a woman.";
} elseif ($age >= 18 && $gender == 'male') {
    echo "You are a man.";
} else {
    echo "You are not an adult.";
}

// Example 7: using switch statement for complex conditions
$dayOfWeek = 'Monday';
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

// Example 8: using if-else statement to handle error conditions
$num1 = 5;
$num2 = 0;
if ($num2 == 0) {
    echo "Error: division by zero.";
} else {
    echo $num1 / $num2;
}

// Example 9: using shorthand if-else statement in a loop
$numList = [2, 4, 6, 8, 10];
foreach ($numList as $num) {
    echo ($num % 2 == 0) ? "$num is even." : "$num is odd.";
}

// Example 10: using elseif to check multiple conditions in a single statement
$num = 3;
if ($num == 1) {
    echo "One";
} elseif ($num == 2) {
    echo "Two";
} elseif ($num == 3) {
    echo "Three";
} else {
    echo "Unknown number.";
}

/* Explanation:
Conditional statements in PHP are used to make decisions based on certain conditions. There are several types of conditional 
statements in PHP, including if, if-else, if-elseif-else, nested if, and ternary operator. Each type of conditional statement 
allows you to evaluate one or more conditions and execute different blocks of code based on the result of the evaluation. 

The main difference between else if and elseif in PHP is the syntax. else if is two separate words, while elseif is a single 
word. Both are used to chain conditions together when multiple conditions are involved. In other words, elseif