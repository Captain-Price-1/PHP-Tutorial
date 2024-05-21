<?php

// Namespaces in PHP serve several purposes, primarily aimed at organizing and managing code more effectively, especially in large projects. They help avoid name conflicts between different pieces of code and provide a way to group related classes, interfaces, functions, and constants together.

// Key Functions of Namespaces
// Avoiding Name Conflicts: Namespaces prevent naming conflicts between code from different libraries or components. For example, two libraries might have a Logger class, and namespaces allow both to be used without conflict.

// Organizing Code: Namespaces help organize code logically, grouping related classes and functions together, making the codebase more readable and maintainable.

// Enhancing Readability: By using namespaces, you can create a clear structure within your codebase, making it easier to understand and navigate.

// Example of Namespaces
// Let's illustrate the use of namespaces with an example.

// Directory Structure
// Assume we have the following directory structure:

/*

project/
|-- src/
|   |-- Utils/
|   |   |-- Logger.php
|   |   `-- Helper.php
|   `-- Models/
|       `-- User.php
`-- index.php

*/
// src/Utils/Logger.php
namespace Utils;

class Logger {
    public function log($message) {
        echo "Log message: " . $message . PHP_EOL;
    }
}

// src/Utils/Helper.php
namespace Utils;

class Helper {
    public function assist() {
        echo "Assisting..." . PHP_EOL;
    }
}

// src/Models/User.php
namespace Models;

class User {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

index.php

<?php

require_once 'src/Utils/Logger.php';
require_once 'src/Utils/Helper.php';
require_once 'src/Models/User.php';

use Utils\Logger;
use Utils\Helper;
use Models\User;

$logger = new Logger();
$logger->log("This is a log message.");

$helper = new Helper();
$helper->assist();

$user = new User("John Doe");
echo "User name: " . $user->getName() . PHP_EOL;
/*


Explanation
Defining Namespaces: Each class file defines a namespace at the top using the namespace keyword. For example, Logger.php and Helper.php are under the Utils namespace, while User.php is under the Models namespace.

Including Files: The index.php file includes the necessary class files using require_once.

Using Namespaces: The use keyword in index.php imports the classes from their respective namespaces, allowing them to be used without fully qualifying their names.

Creating Objects: Objects are created from the imported classes (Logger, Helper, and User), and their methods are called as needed.

Benefits
No Naming Conflicts: If another library also has a Logger class, you can differentiate between them using namespaces.
Logical Organization: The code is organized into namespaces reflecting their functionality (Utils for utilities and Models for data models).
Simplified Imports: The use keyword simplifies referencing classes from other namespaces.
Fully Qualified Names
If you prefer not to use the use keyword, you can reference classes with their fully qualified names:

    */



    // Example of using multiple namespaces:

    // Without using the use keyword, classes would have to be referenced with their fully qualified names:
    // $logger = new \Utils\Logger();
    // $helper = new \Utils\Helper();
    // $user = new \Models\User();

    // Using the use keyword, classes can be referenced without fully qualifying their names:
    use \Utils\Logger;
    use \Utils\Helper;
    use \Models\User;

    // The use keyword can also be used with aliased names:
    use \Utils\Logger as Log;
    use \Utils\Helper as HelperClass;
    use \Models\User as UserClass;

    // The fully qualified names can still be used if needed:
    $logger = new Log();
    $helper = new HelperClass();
    $user = new UserClass();

    // Namespaces are more beneficial compared to the require syntax because they:

    // 1. Prevent naming conflicts: With require, if two libraries have a class with the same name, they will conflict.
    // 2. Make code more readable: With require, you have to write the fully qualified name of the class, which can be long and messy.
    // 3. Make code more maintainable: With require, if you need to change the name of a class, you have to update every file that uses it.


    // suppose we have a tranaction.php in the folder called stripe

    // /PaymentGateway/Stripe/Transaction.php
    <?php
    namespace PaymentGateway\Stripe;
    class Transaction{

    }

    // /PaymentGateway/PayPal/Transaction.php
    <?php
    namespace PaymentGateway\PayPal;
    class Transaction{

    }

    // using the namespace of the above files
    use PaymentGateway\Stripe\Transaction as StripeTransaction; 
    use PaymentGateway\PayPal\Transaction as PayPalTransaction;

    var_dump(new Transaction());

    // in the above code we have to use the Aliases for that otherwise it will turn into conflict like 

    // using the namespace of the above files
    use PaymentGateway\Stripe\Transaction;
    use PaymentGateway\PayPal\Transaction;

    $stripeTransaction = new Transaction();
    $paypalTransaction = new Transaction(); // This will cause a conflict

    var_dump($stripeTransaction);
    var_dump($paypalTransaction);


    /* ----------------------------------------------------ANOTHER USAGE-------------------------------------------------------------- */

/*    
project/
|-- src/
|   |-- PaymentGateway/
|   |   |-- Stripe/
|   |   |   `-- Transaction.php
|   |   `-- PayPal/
|   |       `-- Transaction.php
|   `-- index.php
*/

// src/PaymentGateway/Stripe/Transaction.php
<?php
namespace PaymentGateway\Stripe;

class Transaction {
    public function __construct() {
        echo "Stripe Transaction created\n";
    }
}

// src/PaymentGateway/PayPal/Transaction.php
<?php
namespace PaymentGateway\PayPal;

class Transaction {
    public function __construct() {
        echo "PayPal Transaction created\n";
    }
}

// Importing and Using the Classes
// src/index.php

use PaymentGateway\Stripe\Transaction as StripeTransaction;
use PaymentGateway\PayPal\Transaction as PayPalTransaction;

$stripeTransaction = new StripeTransaction();
$paypalTransaction = new PayPalTransaction();

var_dump($stripeTransaction);
var_dump($paypalTransaction);


/* ----------------ANOTHER EXAMPLE-------------------------------------------------------------------------------------------------- */

// PHP also tries to search for the namespace within the current directory even if you don't include 
// the namespace , for example 

<?php
namespace PaymentGateway\Paddle;

class Transaction{
    public function __construct() {
        var_dump(new CustomerProfile());
    }
}

// in the above code it will try to look for CustomerProfile namespace 
// in the current folder( if it is defined; otherwise it will be global) ,even if 
// dont include the namespace

// suppose you have defined a namespace and you want to use another class which is not 
// in that namespace ,then you will have to include a '\' to tell PHP that you should import 
// this from the global
// like for example 

<?php
namespace PaymentGateway\Paddle;

class Transaction{
    public function __construct() {
        var_dump(new \DateTime());
    }
}


// Qualified name example
namespace PaymentGateway\Paddle;
class Transaction {
    public function __construct() {
        var_dump(new \DateTime());
    }
}

// Fully qualified name example
$transaction = new \PaymentGateway\Paddle\Transaction();

var_dump($transaction);