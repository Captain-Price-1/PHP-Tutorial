<?php   

class Transaction {
    const STATUS_PAID = 'paid';
    const STATUS_PENDING = 'pending';
    const STATUS_DECLINED = 'declined';

    public function __construct(){

    }
}

// we can call the class constants like this 
Transaction::STATUS_PAID;

// it can also work something like 
$transaction = new Transaction();
echo $transaction::STATUS_PAID;

// we can access the class constants within the class itself using the following methods:
class Transaction {
    const STATUS_PAID = 'paid';
    const STATUS_PENDING = 'pending';
    const STATUS_DECLINED = 'declined';

    public function __construct(){
        // access the constants using the class name
        echo self::STATUS_PAID;
        // access the constants using the instance
        echo $this::STATUS_PAID;
        // access the constants using the constant name
        echo Transaction::STATUS_PAID;
    }
}

// to get fully qualified class name we have something like 
echo Transaction::class; // will print "Transaction"


class Transaction {
    const STATUS_PAID = 'paid';
    const STATUS_PENDING = 'pending';
    const STATUS_DECLINED = 'declined';

    public function __construct(){
        $this->setStatus('pending');
    }
    public function setStatus(string $status):self{
        $this->status = $status;
        return $this;
    }
};

$transaction = new Transaction();
// will output out as paid, the transaction status will be set to paid
$transaction->setStatus('paid');

// the purpose of the constants was not the above, anyone can 
// pass anything to setStatus method.
// first we need to make change in here such as 

class Transaction {
    const STATUS_PAID = 'paid';
    const STATUS_PENDING = 'pending';
    const STATUS_DECLINED = 'declined';

    public function __construct(){
        // change here
        $this-setStatus(self::STATUS_PENDING);
    }
    public function setStatus(string $status):self{
        $this->status = $status;
        return $this;
    }
};

// then another change here
$transaction = new Transaction();
$transaction->setStatus(Transaction::STATUS_PAID);

// instead of jamming everything into the transaction class we can create a class called Status

class Status {
    const STATUS_PAID = 'paid';
    const STATUS_PENDING = 'pending';
    const STATUS_DECLINED = 'declined';
}

// so now in the transaction we can reference this one 

class Transaction {
    // in the construct function
    public function __construct(){
        $this->setStatus(Status::PENDING);
    }
}

// so same goes for here as well
$transaction->setStatus(STATUS::STATUS_PAID);