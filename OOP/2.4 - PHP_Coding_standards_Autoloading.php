<?php

// Autoloading is a feature in PHP that allows us to dynamically load classes and interfaces when they are referenced in the code.

// Without autoloading, we would have to include files manually to make sure that all the classes and interfaces are available.

// This can lead to a lot of manual work, especially in large projects with many classes and interfaces.

// With autoloading, we can easily manage our code by separating it into different files and directories, and let PHP handle the loading of the necessary classes and interfaces.

// To activate autoloading, we need to use the spl_autoload_register() function, which is a built-in function in PHP.

spl_autoload_register(function ($class_name) {
    // Get the directory name containing the class file
    $dir_name = str_replace('\\', '/', $class_name);
    // Get the class file
    $file_name = $dir_name . '.php';
    // Check if the file exists
    if (file_exists($file_name)) {
        // Include the class file
        include_once $file_name;
    }
});

// Now we can use any class without having to include it manually

// For example, if we have a class called "Car" in a file called "Car.php", we can use it like this:

$car = new Car();

// Instead of having to include "Car.php" manually before we can use the class.

// Autoloading makes our lives easier by making sure that all the necessary classes and interfaces are loaded automatically when we use them.

// another example 

spl_autoload_register(function($class)){
    $path =__DIR__. '/'.  lcfirst(str_replace('\\','/',$class)).php;
    require
}

// PHP-FIG (PHP Framework Interoperability Group) is a group of developers who work together to define standards for PHP.

// The PHP-FIG has defined a set of standards known as the PSR (PHP Standard Recommendations).

// PSR-0 is the PHP-FIG's standard for autoloading, which is the standard that we used in the previous example.

// PSR-1 is the standard for coding style. It provides guidelines for writing clean, consistent, and readable code.

// PSR-4 is the standard for autoloading, which is an alternative to PSR-0. It is more strict and requires a more formal directory structure.

// PSR-6 is the standard for caching.

// PSR-7 is the standard for HTTP messages.

// PSR-11 is the standard for annotations.

// PSR-12 is the standard for coding style for new PHP code.

// Example of PSR-1:

// The example below is an example of a class that follows the PSR-1 standard:

namespace Foo\Bar;

/**
 * This is an example class.
 *
 * @package Foo\Bar
 */
class BazClass
{
    /**
     * @var int
     */
    private $foo;

    /**
     * @param int $foo
     */
    public function __construct($foo)
    {
        $this->foo = $foo;
    }

    /**
     * @return int
     */
    public function getFoo()
    {
        return $this->foo;
    }
}