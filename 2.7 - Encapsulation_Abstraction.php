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
  */