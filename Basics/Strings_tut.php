<?php

// STRINGS

$firstName = 'Anas';
$lastName = 'Parwez';

// Concatenate the first name and last name
$name = $firstName . ' ' . $lastName;
echo $name . '<br/>';

// Access individual characters in a string using array notation
echo $name[1]; // Output: n

// Accessing characters with negative index is only supported in PHP 7.1 and later
echo $name[-2]; // Output: z

// Update a character in a string
$name[1] = 'I';
echo $name; // Output: AIns Parwez

// Output the data type and value of the variable
var_dump($name); // Output: string(13) "AIns Parwez"

// HEREDOC

$x = 10;
$y = 20;

// Use heredoc syntax to create a string with variables
$text = <<<TEXT
LINE1 $x
LINE2 $y 
LINE3
LINE4
;
TEXT;

// Output the string with line breaks
echo nl2br($text);

// NOWDOC

$x = 10;
$y = 20;

// Use nowdoc syntax to create a string with variables
$text = <<<'TEXT'
LINE1 $x
LINE2 $y 
LINE3
LINE4
;
TEXT;

// Output the string as is (without parsing variables or escape sequences)
echo nl2br($text);