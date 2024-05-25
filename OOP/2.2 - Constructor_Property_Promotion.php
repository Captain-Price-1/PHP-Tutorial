<?php
// Constructor property promotion is a feature introduced in PHP 8 that allows you to define and initialize class properties directly in the constructor parameters. This eliminates the need to explicitly declare the properties and assign the values in the constructor, leading to more concise and readable code.

// Traditional Way (Before PHP 8)
// Before PHP 8, you had to declare properties and initialize them in the constructor separately. For example:
    class Transaction {
        private $amount;
        private $description;
    
        public function __construct(float $amount, string $description) {
            $this->amount = $amount;
            $this->description = $description;
        }
    
        public function getAmount(): float {
            return $this->amount;
        }
    
        public function getDescription(): string {
            return $this->description;
        }
    }
    

//     In this code:

// Properties $amount and $description are declared separately.
// The constructor initializes these properties with the provided arguments.


// Using Constructor Property Promotion (PHP 8 and Later)
// With constructor property promotion, you can declare and initialize properties directly in the constructor parameters:

class Transaction {
    public function __construct(
        private float $amount,
        private string $description
    ) {}

    public function getAmount(): float {
        return $this->amount;
    }

    public function getDescription(): string {
        return $this->description;
    }
}

// you can still use the older syntax in conjuction with the new one for example 

class Transaction {
    private float $amount;
    public function __construct(
        float $amount,
        private string $description
    ) {
        $this->amount = $amount;
    }
}

// we can use those variable with or without $this keyword for example 

class Transaction {
    private float $amount;
    public function __construct(
        float $amount,
        private string $description
    ) {
        $this->amount = $amount;
        echo $description;
    }
}