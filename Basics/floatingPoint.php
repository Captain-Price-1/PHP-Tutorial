<?php

$x = floor((0.1 + 0.7) * 10);
echo $x; // Output: 7

$x = ceil((0.1 + 0.2) * 10);
echo $x; // Output: 4

$x = 0.23;
$y= 1-0.77;

if($x == $y){
    echo 'Yes';
}
else {
    echo 'No';
}
// Output: No
// Explanation: The output is 'No' because $x and $y are not equal due to floating point imprecision. The calculation of $y actually results in 0.22999999999999998, which is not equal to $x.

$x = 5;
/* Output: float(5)
Explanation:
The value of $x is first cast to a float using (float) casting function, which results in a float value of 5. 
The var_dump function then outputs the data type and value of the variable, which is float(5). */
var_dump((float) $x);

$x = 'esdf';
/* Output: float(0)
Explanation:
The string value 'esdf' cannot be directly converted to a float, so the (float) casting function converts it to the float value 0. 
The var_dump function then outputs the data type and value of the variable, which is float(0). */
var_dump((float) $x);



