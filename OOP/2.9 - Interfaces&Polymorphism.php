<?php

namespace App;

interface DebtCollector{
    public function collect(float $owedAmount):float;
}

// the above interface into action
// all the methods declared in the interface must be declared in the child class
// all the methods declared in the interface must be public, you can't have private or protected methods

class CollectionAgency implements DebtCollector{
    public function collect(float $owedAmount):float{
        return $owedAmount;
    }    
}

// we can implement more than one interface in a class using the 'implements' keyword
// example 

class CollectionAgency2 implements DebtCollector, DebtCollector2{
    public function collect(float $owedAmount):float{
        return $owedAmount;
    }    
}

// an interface can extend other interfaces too 
// eg 

interface DebtCollector extends AnotherInterface, SomeOtherInterface {
    public function __construct();
    public function collect(float $owedAmount):float;
}

// when you define constants in the interfaces it can't be overridden