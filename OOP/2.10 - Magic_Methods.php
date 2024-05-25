<?php

// In PHP, magic methods are special methods that have predefined names and behaviors. 
// They are used to define how objects should behave in specific scenarios, such as when properties or methods are accessed or called dynamically. 
// Magic methods typically start with two underscores (__). Here are some commonly used magic methods and their use cases:

//     __construct: This is the constructor method, which is called when an object is instantiated. It is used to initialize the object’s properties.
class MyClass {
    public $property;

    public function __construct($value) {
        $this->property = $value;
    }
}

$obj = new MyClass("Hello, World!");


// __destruct: This is the destructor method, which is called when an object is destroyed or goes out of scope. 
// It is used for cleanup activities, such as closing files or releasing resources.

class MyClass {
    public function __destruct() {
        echo "Object is being destroyed.";
    }
}

$obj = new MyClass();
unset($obj);


// __get: This method is invoked when attempting to access a property that does not exist or is not visible.
// Getting a Property (__get method):

// When you write echo $obj->name;, PHP again checks if the property name exists and is accessible in the MyClass object.
// Since name is not defined as a public property in MyClass, PHP calls the __get method.
// The __get method is defined as:

// Here, $name is "name". The method checks if $name exists in the $data array.
// Since $data['name'] was set to "John" by the __set method, __get returns "John".
class MyClass {
    private $data = array();

    public function __get($name) {
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }
        return null;
    }

    public function __set($name, $value) {
        $this->data[$name] = $value;
    }
}

$obj = new MyClass();
$obj->name = "John";
echo $obj->name; // Outputs: John

// __set: This method is called when assigning a value to a property that does not exist or is not visible.

// __isset: This method is triggered by calling isset() or empty() on inaccessible properties.

class MyClass {
    private $data = array();

    public function __isset($name) {
        return isset($this->data[$name]);
    }

    public function __unset($name) {
        unset($this->data[$name]);
    }
}

$obj = new MyClass();
echo isset($obj->name); // Outputs: false


class MyClass {
    private $data = array(); // An associative array to store dynamic properties

    // __set is called when assigning a value to a non-existent or inaccessible property
    public function __set($name, $value) {
        $this->data[$name] = $value; // Store the value in the $data array with the property name as the key
    }

    // __get is called when accessing a non-existent or inaccessible property
    public function __get($name) {
        if (array_key_exists($name, $this->data)) { // Check if the property exists in the $data array
            return $this->data[$name]; // Return the value if it exists
        }
        return null; // Return null if the property doesn't exist
    }
}

$obj = new MyClass();
$obj->name = "John"; // __set is called, sets $data['name'] to "John"
echo $obj->name; // __get is called, outputs "John"

// isset method 
// it get's called when you use isset() or empty() on inaccessible properties

// example 1:

// public function __isset($name) {
//     return isset($this->data[$name]);
// };

$invoice = new Invoice();
$invoice->amount = 14;

var_dump(isset($invoice->amount)); // Output: bool(true)

unset($invoice->amount);

var_dump(isset($invoice->amount)); // Output: bool(false)

// isset() is a built-in PHP function that checks if a variable is set and is not NULL. 
// It returns true if the variable exists and has a value other than NULL, and false otherwise.

$name = "John";

if (isset($name)) {
    echo "The variable is set.";
} else {
    echo "The variable is not set.";
}

// In this example, isset($name) will return true because the variable $name is set and has a value.

// isset() is useful when you want to check if a variable exists before using it. It prevents errors like "Undefined variable" or "Undefined index" when you try to access a variable that may or may not be set.

// Here's an example of how isset() can be used to check if a variable is set before using it:

    $age = null;

if (isset($age)) {
    echo "The age is: " . $age;
} else {
    echo "The age is not set.";
}

// In this example, isset($age) will return false because the variable $age is not set (it has a value of null).

/* -------------------------------CALL METHOD----------------------------------------------------------------------------------- */
// In PHP, the __call() method is a magic method that is called when an undefined method is invoked on an object. 
// It allows you to handle dynamic method calls on an object.
// The __call() method is typically used when you want to implement a class 
// that can respond to method calls that are not explicitly defined in the class. 
// It is often used in conjunction with the __get() and __set() magic methods to create dynamic properties.

// Here's an example of how the __call() method can be used:
class MyClass {
    public function __call($name, $arguments) {
        echo "Calling method: " . $name . PHP_EOL;
        echo "Arguments: " . implode(', ', $arguments) . PHP_EOL;
    }
}

$obj = new MyClass();
$obj->myMethod('arg1', 'arg2'); // Output: Calling method: myMethod, Arguments: arg1, arg2

// In the example above, when the myMethod() method is called on the MyClass object, the __call() method is invoked. 
// Inside the __call() method, you can handle the method call and its arguments as needed.

// The __call() method is particularly useful when you want to implement a class that 
// follows a fluent interface or when you want to provide 
// a fallback mechanism for method calls that are not explicitly defined.



// After the __call() method is invoked, the myMethod() method 
// does not exist in the class or the instance that created it. 
// it is a dynamically created method that is handled within the __call() method.

// Here's a simple real-world example to illustrate the use case:

    class User {
        private $name;
    
        public function __construct($name) {
            $this->name = $name;
        }
    
        public function __call($name, $arguments) {
            if ($name === 'setName') {
                $this->name = $arguments[0];
            } elseif ($name === 'getName') {
                return $this->name;
            }
        }
    }
    
    $user = new User('John');
    $user->setName('Alice'); // Dynamically created method call
    echo $user->getName(); // Output: Alice

// In this example, the User class has a __call() method that handles dynamic method calls. 
// When the setName() method is called on the User object, the __call() method is invoked.
// Inside the __call() method, we check if the method name is setName and update the name property accordingly. 
// Similarly, when the getName() method is called, the __call() method is invoked, and we return the value of the name property.

// By using the __call() method, we can provide a fallback mechanism for method calls
// that are not explicitly defined in the class. 
// This allows us to create dynamic methods on the fly and handle them within the __call() method.

// In the real world, this pattern can be useful when you want to implement a class
// that can handle a wide range of method calls dynamically, such as a 
// fluent interface for building objects or a class 
// that can handle method calls for different scenarios.

// suppose we pass something like this 
$invoice->process(15,'Some Description');

this above code will result in error because the argument that is going to be passed in the 
process method is going to be an array , so it is passing the entire array as the first 
argument , so instead of float we are getting an array

class MyClass {
    protected function process(float $amount, $description){
        var_dump($amount, $description);
    }
    public function __call($name, $arguments) {
        if(method_exists($this, $name)) {
            $this->name($arguments);
        }
    }
}

to resolve this issue we have this function called 
call_user_func_array([$this, $name], $arguments);

/* --------------------CALL_USER_FUNC_ARRAY---------------------------------------------------------------------------------------------- */


// The call_user_func_array function in PHP is a powerful and flexible method used to call 
// a callback function with an array of parameters. 
// This function is particularly useful when the number of parameters is 
// dynamic or unknown at the time of writing the code. It allows for a high degree of flexibility 
// and can be used in various scenarios such as dynamic function calls, enhancing code modularity
// and handling functions with variable parameters.

// Why Use call_user_func_array?
// Dynamic Function Calls: When the function name and the parameters are determined at runtime.
// Variable Number of Parameters: When a function needs to handle an unknown number of parameters.
// Higher-Order Functions: When functions are treated as first-class citizens and passed 
// as arguments to other functions.
// Code Modularity and Reusability: It helps in creating more modular and reusable code 
// by abstracting function calls.

<?php

// Basic Example
function add($a, $b) {
    return $a + $b;
}

$params = [3, 5];
$result = call_user_func_array('add', $params);

echo "Result: " . $result; // Output: Result: 8

// Using a Class Method
class Math {
    public static function multiply($a, $b) {
        return $a * $b;
    }
}

$params = [4, 7];
$result = call_user_func_array(['Math', 'multiply'], $params);

echo "Result: " . $result; // Output: Result: 28

// With Anonymous Functions
$anonymousFunction = function($a, $b, $c) {
    return $a + $b + $c;
};

$params = [1, 2, 3];
$result = call_user_func_array($anonymousFunction, $params);

echo "Result: " . $result; // Output: Result: 6

// Handling Variable Number of Arguments
function sum() {
    $args = func_get_args();
    return array_sum($args);
}

$params = [1, 2, 3, 4, 5];
$result = call_user_func_array('sum', $params);

echo "Result: " . $result; // Output: Result: 15

// Dynamic Function Call in a Framework
class UserController {
    public function show($id) {
        return "Showing user with ID: " . $id;
    }
}

$controller = new UserController();
$action = 'show';
$params = [42];

echo call_user_func_array([$controller, $action], $params); // Output: Showing user with ID: 42

?>


/* -------------------TO_STRING
METHOD----------------------------------------------------------------------------------------------- */

// The __toString() method in PHP is a magic method that allows an object to be treated as a string.
// When an object is used in a context that requires a string,
// PHP will automatically call the __toString()
// method of that object, if it is defined. This is particularly useful for debugging, logging, and
// displaying object information in a human-readable format.

// Why Use __toString()?
// Readable Object Representation: Provide a meaningful string representation of an object.
// Automatic String Conversion: Allow objects to be used in string contexts automatically.
// Debugging and Logging: Simplify the process of debugging and logging object data.


// SYNTAX
class ClassName {
public function __toString() {
// return a string representation of the object
}
}

// Examples
// Basic Example
// Here is a basic example demonstrating how to use the __toString() method:

<?php

class Person {
    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function __toString() {
        return "Person [Name: " . $this->name . ", Age: " . $this->age . "]";
    }
}

$person = new Person("John Doe", 30);
echo $person; // Output: Person [Name: John Doe, Age: 30]

?>


// Use Case in Logging
// Using __toString() for logging purposes:

<?php

class LogEntry {
    private $level;
    private $message;

    public function __construct($level, $message) {
        $this->level = $level;
        $this->message = $message;
    }

    public function __toString() {
        return "[" . $this->level . "] " . $this->message;
    }
}

$log = new LogEntry("ERROR", "File not found");
error_log($log); // Logs: [ERROR] File not found

?>

// Use Case in Debugging
// Using __toString() for debugging object data:

<?php

    class DebuggableObject {
        private $data;
    
        public function __construct($data) {
            $this->data = $data;
        }
    
        public function __toString() {
            return "DebuggableObject: " . print_r($this->data, true);
        }
    }
    
    $object = new DebuggableObject(['key1' => 'value1', 'key2' => 'value2']);
    echo $object; // Output: DebuggableObject: Array ( [key1] => value1 [key2] => value2 )
    
    ?>
// Conclusion
// The __toString() method in PHP is a useful tool for providing a string representation of an object.
// It enhances the usability of objects in string contexts, such as logging, debugging, and
// displaying information. By implementing __toString(), you can ensure that your objects
// are easily readable and provide meaningful output when treated as strings.


// Use Case: debugInfo()
// The __debugInfo() method is an alternative to __toString() that is specifically used for debugging purposes.
// It is called by the var_dump() and print_r() functions when the object is used in their non-string contexts.
// basically it tells which properties are available in the object and which ones to omit.
// Example:

class DebugInfoExample {
public $name = "John";
public $age = 30;

public function __debugInfo() {
return [
"name" => $this->name,
"age" => $this->age,
];
}
}

$obj = new DebugInfoExample();
var_dump($obj); // Output: object(DebugInfoExample)#1 (2) { ["name"]=> string(4) "John" ["age"]=> int(30) }

// a real world use case could be something like
// it returns the id and the last four digits of the account number

public function __debugInfo(){
return [
'id' => $this->id,
'accountNumber' => '****'.substr($this->accountNumber, -4),
]
}