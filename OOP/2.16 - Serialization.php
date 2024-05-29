<?php

$invoice = new Invoice();

echo serialize(true).PHP_EOL; // Outputs: s:1:"1"; 
echo serialize(1).PHP_EOL; // Outputs: s:1:"1"; 
echo serialize(2.5).PHP_EOL; // Outputs: s:6:"2.5"; 
echo serialize('hello world').PHP_EOL; // Outputs: s:13:"hello world"; 
echo serialize([1,2,3]).PHP_EOL; // Outputs: a:3:{i:0;i:1;i:2;i:3;} 
echo serialize(['a'=>1,'b'=>2]).PHP_EOL; // Outputs: a:2:{s:1:"a";i:1;s:1:"b";i:2;} 

// Unserializing is similar to serializing, but the syntax is different.
// The unserialize() function takes a serialized string as its argument and returns an object or array.

// Here is how unserialize works:

// 1. It takes a string as an argument.
// 2. It checks if the string is a serialized string.
// 3. If it is, it extracts the data type and the value from the string.
// 4. It then creates a new object or array of the same type based on the data type.
// 5. It assigns the value to the object or array.
// 6. Finally, it returns the object or array.

// Example of using unserialize:

$unserializedInvoice = unserialize('O:8:"Invoice":0:{}');
// Output: object(Invoice)#1 (0) {}


// Example 1:
$invoice = new Invoice();
$serializedInvoice = serialize($invoice);
$unserializedInvoice = unserialize($serializedInvoice);
var_dump($unserializedInvoice); // Output: object(Invoice)#1 (0) {}

// Example 2:
$user = new User('John', 25);
$serializedUser = serialize($user);
$unserializedUser = unserialize($serializedUser);
var_dump($unserializedUser); // Output: object(User)#2 (2) { ["name"]=> string(4) "John" ["age"]=> int(25) }

// Example 3:
$data = ['name' => 'Jane', 'age' => 30];
$serializedData = serialize($data);
$unserializedData = unserialize($serializedData);
var_dump($unserializedData); // Output: array(2) { ["name"]=> string(4) "Jane" ["age"]=> int(30) }


// when you unserialize the object , it doesn't refer to the same object