<?php
//* You can use both include and require
//* Include will result in a warning and require will result in an error

//eg -
include 'file.php';
echo "Hello World!";

//in the above code even if the file.php doesnt exist then it will print out the "hello world"
//but in the require hello world wont be printed

//include_once and require_once
//suppose you have something like this

require_once 'file.php';
require_once 'file.php';

//then it will only include the first one and it will ignore the second one
