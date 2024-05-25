<?php

// suppose we have a class named invoice and it has two properties the amount and the description

class Invoice {
    public $amount;
    public $description;    

    public function __construct($amount, $description) {
        $this->amount = $amount;
        $this->description = $description;
    }
}

// suppose we have two objects
$invoice1 = new Invoice(25, 'My Invoice 1');
$invoice2 = new Invoice(1, 'My Invoice 2');

// this operator does the simple comparison , it will compare 
// the simple instances of the same class and have the same property
// and values , it compares the property values using the loose comparison
echo 'invoice1 == invoice2: ' . ($invoice1 == $invoice2) . "\n";

// in this two objects will only be equal if they refer to the same 
// instance of the same class
echo 'invoice1 === invoice2: ' . ($invoice1 === $invoice2) . "\n";

// Output:
// invoice1 == invoice2: false
// invoice1 === invoice2: false

// because they are two different objects


// but if we have something like this 

$invoice1 = new Invoice(1, 'My Invoice');
$invoice2 = new Invoice(true, 'My Invoice');

// the == one will return true and the === here will return false


// but if we do something like 
$invoice1 = new Invoice(1, 'My Invoice');
$invoice2 = new Invoice(1, 'My Invoice');

// in even if we compare using the === , it will give false , because they are different objects
// pointing to the different parts in the memory

// suppose we do something like this 

$invoice3 = $invoice1;

// now the === will return true because they are the same object



/* ------------------------------------------------------------------------------------------------------------------ */