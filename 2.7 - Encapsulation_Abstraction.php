<?php

//suppose we have a class like this one
class Transaction {
    public static int $count = 0;
    public float $amount;
    public string $description;
    
    public function __construct(float $amount, string $description) {
        $this->amount = $amount;
        $this->description = $description;
        self::$count++;
    }
}


// now if someone does something like this 
$transaction = new Transaction(100);
// it is fine , but what if someone does something like 
$transaction->amount = 125;
// now the amount property has been changed 


// now we can use the private method
class Transaction {
    public static int $count = 0;
    private float $amount;
    public string $description;
    
    public function __construct(float $amount, string $description) {
        $this->amount = $amount;
        $this->description = $description;
        self::$count++;
    }
}

// but to access that private variable we have to define a getter method
// and a setter method to set the amount

class Transaction {
    public static int $count = 0;
    private float $amount;
    public string $description;
    
    public function __construct(float $amount, string $description) {
        $this->amount = $amount;
        $this->description = $description;
        self::$count++;
    }
    
    public function getAmount(): float {
        return $this->amount;
    }
    
    public function setAmount(float $amount): void {
        $this->amount = $amount;
    }
}


// but wait, isn't that the same, earlier we were using $transaction->amount to change the amount
// now we will have to use $transaction->setAmount($amount) to change the amount
// which is basically the same thing ? 

// one way to go about it is to not use the setter method at all
// the constructor takes care of the initialization here and we already have the 
// setter to access the private variable amount


// another way to access the private variable amount is to use the Reflection property of the PHP
// you can use the ReflectionClass and the getStaticProperty() method to get the value of a static property
// and the getProperty() method to get the value of an instance property
// for example:
$transaction = new Transaction(100,'Transaction 1');
$reflection = new ReflectionClass(get_class($transaction));
$amount = $reflection->getProperty('amount')->getValue($transaction);

/**
 * The point of private and protected is to let the one accessing the property know about 
 * the restriction of the property.
 */


 /**
  * THE ABSTRACTION PRINCIPLE 
  * The internal details of the class should be hidden from the outside world.
  */

  // in simple terms it is hiding the implementation of the inside world
  // eg 

  $transaction =  new Transaction(20);
  $transaction->process();

  // in the above function process() is the internal details of the class
  // it is not visible to the outside world
  // we don't care how that process method is implemented

  // setting variables and methods in classes to public destroys the abstraction

  // the difference between the two

  /**
   * In PHP, encapsulation and abstraction are two fundamental concepts of object-oriented programming that help manage the complexity of code and improve its maintainability. Here's a brief overview of each:

    *Encapsulation
    *Encapsulation is the practice of bundling the data (attributes) and the methods (functions) that operate on the data into a single unit, typically a class. It restricts direct access to some of the object's components, which can help prevent the accidental modification of data. This is achieved using access modifiers:

    *Public: The property or method can be accessed from anywhere.
    *Protected: The property or method can be accessed within the class itself and by inheriting classes.
    *Private: The property or method can be accessed only within the class itsel
   */

//    Key Differences
// Encapsulation is about restricting access to the inner workings of a class to protect the integrity of the data and methods, achieved using access modifiers.
// Abstraction is about simplifying complex systems by providing a simplified model, achieved through abstract classes and interfaces that define a blueprint for derived classes.

<?php
class Toaster {
    protected $maxSlices = 2;
    protected $slices = 0;

    public function addSlice($numberOfSlices) {
        $this->slices += $numberOfSlices;
        if ($this->slices > $this->maxSlices) {
            echo "Too many slices! Can only toast up to {$this->maxSlices} slices.\n";
            $this->slices = $this->maxSlices;
        } else {
            echo "Added {$numberOfSlices} slice(s). Total slices: {$this->slices}\n";
        }
    }

    public function toast() {
        if ($this->slices == 0) {
            echo "No slices to toast.\n";
        } else {
            echo "Toasting {$this->slices} slice(s)...\n";
            $this->slices = 0; // Reset slices after toasting
        }
    }
}

<?php
class ToasterPro extends Toaster {
    protected $maxSlices = 4;

    // You can add more functionality specific to ToasterPro if needed
}
?>

<?php
// Using the base Toaster class
$toaster = new Toaster();
$toaster->addSlice(1);
$toaster->toast();
$toaster->addSlice(3); // Trying to add more slices than allowed
$toaster->toast();

// Using the derived ToasterPro class
$toasterPro = new ToasterPro();
$toasterPro->addSlice(2);
$toasterPro->toast();
$toasterPro->addSlice(4); // Now allowed since ToasterPro can handle 4 slices
$toasterPro->toast();

// Output
// Added 1 slice(s). Total slices: 1
// Toasting 1 slice(s)...
// No slices to toast.
// Too many slices! Can only toast up to 2 slices.
// Added 3 slice(s). Total slices: 2
// Toasting 2 slice(s)...
// No slices to toast.
// Added 4 slice(s). Total slices: 4
// Toasting 4 slice(s)...
?>

// you can't extend the private properties , if you have slices set up to 2
// and then in the toaster pro you set it to 4, it wouldn't work

// when you make an instance of the derived class , it won't call out the constructor of the main
// class . to call the parent constructor you can use the syntax
// parent::__construct($amount, $description) in the derived class


// when overwriting the method of the parent class in the derived class we
// have to have the same signature
// the signature rules don't apply to constructor