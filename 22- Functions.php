<?php
/** Functions */
//important points
function foo(){
    echo 'Foo';
    function bar(){
        echo "bar";
    }
}
//note that you cannot do something like this
//bar() because that foo function hasn't run yet and bar hasn't been declared


//RETURN TYPE
function foo1():int{
    return '1';
}
//in this above function it wont throw an error , because php tries to convert the datatype whenever possible
// here it is converting that '1' to 1
//so using the string '1' as return value , it wont throw an error
//but if you use something as an array , then it will throw you an error

//we can also use something like this to include multiple possible return types
function foo2(): int|float|array {
    return 1.5;
}

