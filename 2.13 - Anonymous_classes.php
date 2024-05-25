<?php

/**
 * Anonymous Classes in PHP
 *
 * Anonymous classes are classes that are defined anonymously, i.e. without a name. They can be used to create objects that have the same structure as regular classes but are only valid for the duration of the script.
 *
 */


$obj = new class(1,2,3){

    public function __construct($a,$b,$c){
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
}
var_dump($obj);
// Output: object(class)#1 (3) {
//   ["a"]=> int(1)
//   ["b"]=> int(2)
//   ["c"]=> int(3)
// }

// we can also use the interface syntax

// within the anonymous class you can't access the properties and methods of the 
// main class

// example 

class ClassA{
    public function __construct(public int $x, public int $y){

    }
    public function foo(): string{
        return 'foo';
    }
    public function bar():object{
        return new class{
            public function __construct(){
                // so doing this, it won't be able to access the properties of the main class
                // so we can't call the method foo like below
                echo $this->foo()
            }
        }
    }
}

// one way to counter this is to extend that anonymous class from the main class

// or if you don't want to extend then 
// you can pass down the properties into its constructor

// something like this 

return new class($this->x, $this->y) {

    public function __construct(public int $x, public int $y){
    }/
}

// The main use case of anonymous classes in PHP is to create simple, one-off objects without the need to formally define a class. They are particularly useful when:

// Implementing Simple Interfaces: Quickly implementing interfaces or abstract classes without the overhead of creating a named class.
// Defining Ad-Hoc Behavior: Adding temporary, specific behavior within a limited scope, such as within a function or method.
// Testing and Prototyping: Creating mock objects or stubs for testing purposes or during the early stages of development.
// Anonymous classes enhance code readability and maintainability by reducing the clutter of multiple small, single-use named classes.