<?php

// Late Static Binding in PHP is a feature that allows you to reference the 
// called class in a context where the code was defined in a parent class. 
// This helps to avoid issues where the static method references the class 
// where the method is defined instead of the class that is actually called. 
// This can be especially useful in inheritance hierarchies.

// To understand this better, let's look at a simple example.

// Without Late Static Binding

class ParentClass {
    public static function who() {
        echo __CLASS__;
    }
    
    public static function test() {
        self::who();
    }
}

class ChildClass extends ParentClass {
    public static function who() {
        echo __CLASS__;
    }
}

ChildClass::test();


// In the above example, the test method calls self::who(). 
// The self keyword refers to the class where the method is defined
// not the class from which it is called. 
// Therefore, when ChildClass::test() is called, it outputs:
// ParentClass

// This is because self::who() inside 
// ParentClass::test() references ParentClass Not ChildClass.

// With Late Static Binding Now, let's modify the example to use 
// Late Static Binding with the static keyword instead of self.

class ParentClass {
    public static function who() {
        echo __CLASS__;
    }
    
    public static function test() {
        static::who(); // Late static binding
    }
}

class ChildClass extends ParentClass {
    public static function who() {
        echo __CLASS__;
    }
}

ChildClass::test();

// In this example, we use static::who() instead of self::who(). 
// The static keyword in this context refers to the 
// class that is called at runtime, which is ChildClass.

// So, when ChildClass::test() is called, it outputs:

// This demonstrates how Late Static Binding works. 
// It allows the test method in ParentClass to call the

// who method in the context of the class that was actually called
// which is ChildClass, instead of the class where test was originally defined.

// Summary
// self:: refers to the class where the method is defined.
// static:: refers to the class that is called at runtime 
// enabling Late Static Binding.
// Using static:: in a method allows it to be more flexible 
// and work correctly in an inheritance hierarchy, referencing the called 
// class rather than the class where the method was originally defined.

// just a note on the static and non static variable 

class Example {
    public static $staticVariable = "I am static";
    
    public static function staticFunction() {
        echo "Static function called.";
    }
    
    public $instanceVariable = "I am an instance variable";
    
    public function instanceFunction() {
        echo "Instance function called.";
    }
}

// Accessing static properties and methods using ::
echo Example::$staticVariable; // Outputs: I am static
Example::staticFunction();      // Outputs: Static function called.

// Accessing instance properties and methods using ->
$instance = new Example();
echo $instance->instanceVariable; // Outputs: I am an instance variable
$instance->instanceFunction();    // Outputs: Instance function called