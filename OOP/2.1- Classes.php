<?php

class Transaction{
    public $amount;
    public $description;

    public function __construct($amount,$description){
        $this->amount = $amount;
        $this->description = $description;
    }

    public function addTax(float $rate){
        $this->amount  += $this->amount * $rate/100;
    }

    public function applyDiscount(float $rate){
        $this->amount -= $this->amount * $rate/100;
    }

}

$transaction = new Transaction(15,'This is a sample transaction');
echo "Transaction amount: {$transaction->amount}\n";
echo "Transaction description: {$transaction->description}\n";

$transaction->addTax(8);
echo "Transaction amount with tax: {$transaction->amount}\n";

$transaction->applyDiscount(5);
echo "Transaction amount with tax and discount: {$transaction->amount}\n";

// Output:
// Transaction amount: 15
// Transaction description: This is a sample transaction
// Transaction amount with tax: 21.0
// Transaction amount with tax and discount: 16.1


// Using public as the access modifier for class variables is not recommended because it allows
// any part of the program to directly access and modify the variables, which can lead to unexpected
// behavior and a loss of data integrity. Instead, it is better to use private access modifiers
// and provide getter and setter methods to control access to the variables. This allows you to
// perform validation and other operations when accessing or modifying the variables, and ensures
// that the variables are always in a valid state.

    // Set the properties as private and use getter functions to achieve the same result

   class Transaction {
    private $amount;
    private $description;

    public function getAmount(){
        return $this->amount;
    }

    public function getDescription(){
        return $this->description;
    }

    public function setAmount($amount){
        $this->amount = $amount;
    }

    public function setDescription($description){
        $this->description = $description;
    }

    public function __construct($amount,$description){
        $this->setAmount($amount);
        $this->setDescription($description);
    }
 

   }



   // how to chain different methods together ? 

    // Option 1: Using chainable methods
    // class Transaction {
    //     public function addTax(float $rate){
    //         $this->amount += $this->amount * $rate/100;
    //         return $this;
    //     }

    //     public function applyDiscount(float $rate){
    //         $this->amount -= $this->amount * $rate/100;
    //         return $this;
    //     }
    // }

    // Option 2: Using separate methods with return values
    class Transaction {
        // ...
        public function addTax(float $rate):Transaction{
            $this->amount += $this->amount * $rate/100;
            return $this;
        }

        public function applyDiscount(float $rate):Transaction{
            $this->amount -= $this->amount * $rate/100;
            return $this;
        }
    }

// now we can do something like this 

$transaction2= new Transaction(100,'Transaction 2');
$transaction->addTax(8)->applyDiscount(10);


    /**
     * Destructor, which is a special method that is called when an object is destroyed
     * This is important because it allows us to free up any resources we allocated to the object when we are done using it
     * This can be useful for things like closing database connections, closing files, releasing locks, etc
     */
    public function __destruct(){
        echo "Transaction object destroyed\n";
    }

    public function __destruct(){
        echo "Destructing transaction: '{$this->description}'<br/>";
    }

    // This is because the __destruct method is a special method that is called automatically when the object is destroyed,
    // which can happen when the object goes out of scope. So when we do $amount = (new Transaction(100,'Transaction 1'))->addTax(8)->applyDiscount(10)->getAmount(),
    // the object is destroyed immediately after the getAmount() method is called, so the destructor is called before the var_dump() is executed.
    // However, when we do $transaction = (new Transaction(100,'Transaction 2'))->addTax(8)->applyDiscount(10); $amount = $transaction->getAmount(); var_dump($transaction->getAmount()),
    // the object is not destroyed until after the var_dump() is executed, so the destructor is called after the var_dump() is executed.


    /**
     * The destructor can be called in the following ways:
     * 
     * 1. When the object goes out of scope: This is the most common way. For example:
     * 
     * $transaction = new Transaction(100,'Transaction 1');
     * $amount = $transaction->getAmount();
     * 
     * In this case, the destructor will be called when $transaction goes out of scope, which is after the $amount variable is assigned.
     * 
     * 2. When the object is unset: This is another way to call the destructor. For example:
     * 
     * $transaction = new Transaction(100,'Transaction 2');
     * unset($transaction);
     * 
     * In this case, the destructor will be called immediately after the unset() function is called.
     * 
     * 3. When the object is garbage collected: This is the third way to call the destructor. This is when PHP's garbage collector determines that there are no more references to the object and decides to free up the memory used by the object. This is done automatically by PHP, so we don't need to do anything to trigger it. For example:
     * 
     * $transaction = new Transaction(100,'Transaction 3');
     * 
     * In this case, the destructor will be called when the garbage collector decides to free up the memory used by the object.
     */


    // Example of using json_decode():
    $jsonString = '{"name":"John", "age":30, "hobbies":["swimming","running"]}';
    $decodedObject = json_decode($jsonString);

    // The $decodedObject is an object
    // The output of the vardump will look like:
    // object(stdClass)#1 (3) {
    //   ["name"]=> string(5) "John"
    //   ["age"]=> int(30)
    //   ["hobbies"]=> array(2) {
    //     [0]=> string(9) "swimming"
    //     [1]=> string(7) "running"
    //   }
    // }
    // So the value of the vardump is an object with three properties: name, age, and hobbies. The name is a string "John", the age is an integer 30, and hobbies is an array with two elements "swimming" and "running".


    #usage of the (object) method in php

    $arr = [1,2,3];
    $obj = (object)$arr;
    // The structure of $obj will be:
    // object(stdClass)#1 (3) {
    //   [0]=> int(1)
    //   [1]=> int(2)
    //   [2]=> int(3)
    // }
        var_dump($obj->{1});
       // Output: int(2)

       var_dump($obj[1]); // Output: int(2)