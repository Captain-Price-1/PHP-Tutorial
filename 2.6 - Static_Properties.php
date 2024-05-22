<?php
// lets us look at the static properties

class Transaction {
    public static int $count = 0;
    public $amount;
    public function __construct(
        public float $amount,
        public string $description
    ){
        self::$count++;
    }
}

$transaction = new Transaction(25,'Transaction 1');
$transaction = new Transaction(25,'Transaction 2');
$transaction = new Transaction(25,'Transaction 3');
$transaction = new Transaction(25,'Transaction 4');

// the output will be 4 because that static property is shared by all instances;

// to call the static property we use :: not -> even though with the static we can use both 
// but not the other way around.