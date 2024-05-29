<?php

class Invoice{

    public function process($amount, $description){
        if($amount < 0){
            // it will throw a generic exception with some generic message
            throw new Exception('Amount cannot be negative');
        }
    }
}

// instead of throwing generic exception there we can throw a specific exception

// like 
// throw new InvalidArgumentException('Invalid invoice amount')

// we can also make custom exceptions here

class InvalidInvoiceAmountException extends Exception{  
    if($amount < 0){
        // it will throw a generic exception with some generic message
        throw new Exception('Amount cannot be negative');
    }
    if(empty($this->customer->getBilling)){
        throw new MissingBillingException('Customer does not have a billing address');
    }
}

// this is how we can make the missingbillingexceptions

class MissingBillingInfoException extends Exception{
    // to avoid the duplication of error messages , meaning passing those error 
    // messages when we throw this exception, it makes more sense to include that 
    // default message here

    protected $message = 'Customer does not have a billing address';
}

// and now in the code we can do something like 
// throw new MissingBillingInfoException();

// alright, in the console you will notice that it will say
// "Uncaught" and the message will be "MissingBillingInfoException: Customer does not have a billing address"

// but what is the meaning of uncaught and how do we solve that ? 

// we can use the try catch block

try{
    $invoice = new Invoice();
    $invoice->process(-100);
}
catch(MissingBillingInfoException $e){
    // do something here
    echo $e->getMessage(). ' '. $e->getFile() . ' ' . $e->getLine();
}
// error will be shown something like this
// Custom doesn't have a billing information /var/www/app/Invoice.php:20;


// we can also catch multiple exception in the catch block

catch(MissingBillingInfoException|InvalidInvoiceAmountException $e){
    // do something here
    echo $e->getMessage(). ' '. $e->getFile() . ' ' . $e->getLine();
}


// the purpose of finally block is to do something when the try block is done

finally{
    // do something here
}
// finally block will execute regardless whether an exception was thrown or not