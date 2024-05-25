<?php
//The array_chunk function in PHP splits an array into smaller arrays (chunks) of a specified size.
// This function is useful when you need to break a large array into smaller, more manageable pieces.

//SYNTAX
//  array_chunk(array $array, int $size, bool $preserve_keys = false): array
//example
$input_array = [1, 2, 3, 4, 5, 6, 7, 8];
$chunked_array = array_chunk($input_array, 3);

print_r($chunked_array);


//
//The array_combine function in PHP creates an array by using one array
// forkeys and another array for values. Both arrays must have the same number of elements.

//SYNTAX
//array_combine(array $keys, array $values): array


//example

$keys = ['a', 'b', 'c'];
$values = [1, 2, 3];
$combined = array_combine($keys, $values);

print_r($combined);
//output
//Array
//(
//    [a] => 1
//    [b] => 2
//    [c] => 3
//)

//array filter

$array = [1,2,3,4,5,6,7,8];
$even = array_filter($array, fn($number)=>$number%2===0);
print_r($even);


// to get the array keys we can do something like this
$array =['a'=>4,'b'=>5,'c'=>6];
$keys = array_keys($array);
$values = array_values($array);


//array map
$array  = [1,2,3,4,5,6,7,8];
$array = array_map(fn($number)=>$number *3,$array);
print_r($array);

//we can also do something like this
$array2 = [4,5,6,7,8,9,10];
$array = array_map(fn($number1,$number2)=>$number1*$number2,$array,$array2);

//if you have less elements , then PHP will fill those array which have less elements , with the value
//such as 0 so that it matches the length of the bigger array

//MERging of the array

//if you have many arrays and want to merge , you can use something like this
$array1 = [1,2,3];
$array2 = [4,5,6];

$merged = array_merge($array,$array1,$array2);
print_r($merged);

//array reduce
$invoiceItems = [
    ['price'=>9.99,'qty'=>3,'desc'=>'Item1'],
    ['price'=>9.99,'qty'=>3,'desc'=>'Item1'],
    ['price'=>9.99,'qty'=>3,'desc'=>'Item1'],
    ['price'=>9.99,'qty'=>3,'desc'=>'Item1']
];
$total = array_reduce($invoiceItems,fn($sum,$itemCurrent)=>$sum+$itemCurrent['price'],0);

// search something in the array
$array = ['a','b','c','d','e','f'];
$key = array_search('a',$array);
var_dump($key);
//it will return the key of the first matching value


