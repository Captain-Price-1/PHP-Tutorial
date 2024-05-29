<?php 


// Switch statements in PHP:
// Example 1
$dayOfWeek = 'Monday';
switch ($dayOfWeek) {
    case 'Monday':
        echo "It's Monday.";
        break;
    case 'Tuesday':
        echo "It's Tuesday.";
        break;
    case 'Wednesday':
        echo "It's Wednesday.";
        break;
    default:
        echo "It's not Monday, Tuesday, or Wednesday.";
}
// Output: It's Monday.

// Example 2
$number = 10;
switch ($number) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "The number is between 1 and 5.";
        break;
    case 6:
    case 7:
    case 8:
    case 9:
    case 10:
        echo "The number is between 6 and 10.";
        break;
    default:
        echo "The number is not between 1 and 10.";
}
// Output: The number is between 6 and 10.

// Example 3
$fruit = 'Apple';
switch ($fruit) {
    case 'Apple':
    case 'Orange':
    case 'Banana':
        echo "The fruit is a common fruit.";
        break;
    case 'Durian':
    case 'Mangosteen':
    case 'Jackfruit':
        echo "The fruit is an exotic fruit.";
        break;
    default:
        echo "The fruit is not in our database.";
}
// Output: The fruit is a common fruit.

// Example 4
$grade = 'B';
switch ($grade) {
    case 'A':
    case 'B':
        echo "You passed the exam.";
        break;
    case 'C':
        echo "You need to work harder.";
        break;
    default:
        echo "You failed the exam.";
}
// Output: You passed the exam.

// Example 5
$letter = 'a';
switch ($letter) {
    case 'A':
    case 'a':
        echo "The letter is A.";
        break;
    case 'B':
    case 'b':
        echo "The letter is B.";
        break;
    default:
        echo "The letter is not A or B.";
}
// Output: The letter is A.

// Expert level examples:
// Example 6
$year = 2023;
switch (true) {
    case ($year % 4 == 0 && $year % 100 != 0):
    case ($year % 400 == 0):
        echo "The year is a leap year.";
        break;
    default:
        echo "The year is not a leap year.";
}

// Example 7
$dayOfMonth = 21;
switch ($dayOfMonth) {
    case $dayOfMonth >= 1 && $dayOfMonth <= 10:
        echo "It's the first third of the month.";
        break;
    case $dayOfMonth >= 11 && $dayOfMonth <= 20:
        echo "It's the second third of the month.";
        break;
    case $dayOfMonth >= 21 && $dayOfMonth <= 31:
        echo "It's the last third of the month.";
        break;
    default:
        echo "Invalid day of the month.";
}

// Example 8
$amount = 200;
$discount = 0;
switch (true) {
    case ($amount >= 100 && $amount < 200):
        $discount = 10;
        break;
    case ($amount >= 200 && $amount < 300):
        $discount = 20;
break;
case ($amount >= 300):
$discount = 30;
break;
}
echo "Your discount is $discount%.";

// Example 9
$grade = 'B+';
switch ($grade) {
case 'A+':
case 'A':
case 'A-':
$letterGrade = 'A';
break;
case 'B+':
case 'B':
case 'B-':
$letterGrade = 'B';
break;
case 'C+':
case 'C':
case 'C-':
$letterGrade = 'C';
break;
default:
$letterGrade = 'F';
}
echo "Your letter grade is $letterGrade.";

// Example 10
$language = 'Python';
switch ($language) {
case 'PHP':
case 'JavaScript':
case 'Python':
$category = 'Scripting';
break;
case 'Java':
case 'C#':
case 'Swift':
$category = 'Compiled';
break;
default:
$category = 'Unknown';
}
echo "The language is in the $category category.";

// Explanation:
// The switch statement in PHP is a control structure that is used to select one of several blocks of code to be executed based on
// the value of an expression. It is an alternative to the if-elseif-else statement and is often used when you have multiple options
// to choose from.

// In the examples above, we have demonstrated five basic examples of switch statements that check the value of a variable and
// execute different blocks of code depending on the value. We have also provided five expert-level examples that demonstrate more
// complex uses of the switch statement, such as checking for leap years, calculating discounts based on purchase amount, and
// categorizing programming languages.

// Since PHP switch does the loose comparison, there is no built-in way to introduce strict comparison in switch statements.
// However, you can use the strict comparison operator (===) in the case expressions to achieve the same effect.

// The advantages of switch statements over if-else statements are:

// 1. Concise: Switch statements are more concise and easier to read than if-else statements, especially when you have multiple
// options to choose from.

// 2. Faster execution: Switch statements are generally faster than if-else statements because the value of the expression is
// evaluated only once.

// 3. Better performance: Switch statements are more efficient than if-else statements when you have a large number of options to
// choose from.

// 4. Clearer code: Switch statements can make your code clearer and more expressive, especially when you use descriptive case
// labels to explain the different options.