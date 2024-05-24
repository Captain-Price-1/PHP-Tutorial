<?php

namespace App;
class CoffeeMaker
{
    public function makeCoffee(){
        echo static::class. "is making coffee". PHP_EOL;
    }
}

// here we have a latte maker which extends the above class

class LatteMaker extends CoffeeMaker{
    public function makeLatte(){
        echo static::class. "is making latte". PHP_EOL;
    }
}

// here we have a Cappuccino maker which extends the above class

class CappuccinoMaker extends CoffeeMaker{
    public function makeCappuccino(){
        echo static::class. "is making cappuccino". PHP_EOL;
    }
}

$latteMaker = new LatteMaker();
$latteMaker->makeCoffee();
$latteMaker->makeLatte();


$cappuccinoMaker = new CappuccinoMaker();
$cappuccinoMaker->makeCoffee();
$cappuccinoMaker->makeCappuccino();

/* --------------TRAITS---------------------------------------------------------------------------------------------------- */

// we are currently creating a trait 

trait LatteTrait
{
    public function makeLatte(){
        echo static::class. "is making latte". PHP_EOL;
    }
}

trait CappuccinoTrait
{
    public function makeCappuccino(){
        echo static::class. "is making cappuccino". PHP_EOL;
    }
}

// now we make changes to these existing latte and cappuccino classes

class LatteMaker extends CoffeeMaker{
    use LatteTrait;
}

// here we have a Cappuccino maker which extends the above class

class CappuccinoMaker extends CoffeeMaker{
    use CappuccinoTrait;
}

// you can pull in multiple traits by comma separating them

class AllInOneCoffeeMaker extends CoffeeMaker{
    use LatteTrait, CappuccinoTrait;
}


// think of trait as copy and paste , it simply copies the traits and paste them into the 
// class where it is used / required.

// we can redefine the traits even if we are using it in out class

// for example 
class cappuccinoMaker extends CoffeeMaker{
    use CappuccinoTrait;
    
    public function makeCappuccino(){
        echo static::class. "is making cappuccino updated". PHP_EOL;
    }
}

// the precedence of the trait get's precedence over the parent class from where it is inheriting from

// sounds complicated ? 

// example 
// suppose in the cappuccino trait we have the makeCoffee method , which is already in the parent class
// and if we use that cappuccino trait in the cappuccino class, it will use the makeCoffee 
// method from the trait not which was inherited from the parent class

// also if you have defined the coffeemaker trait in the cappuccino trait. and imported that trait in the
// allinonecoffee maker class, it won't be able to decide which makecoffee trait it should be using

// example 

class AllInOneCoffeeMaker extends CoffeeMaker{
    use LatteTrait, CappuccinoTrait;
    // the above cappuccinotrait will throw error because we have defined the makeCoffee in that cappuccino
    // trait as well as in the CoffeeMaker class (which this class extends from).
    // so the it won't be able to decide which coffeemaker it should use
}

// a very simple solution lies which is 

// use this syntax

use CappuccinoTrait{
    CappuccinoTrait::makeCoffee insteadof CappuccinoTrait;
}

// now it is use the makeCoffee method from the makeCoffee Class

// we can also define properties and methods in the traits as well

// example 

trait LatteTrait{
    protected string $milkType = "whole milk";
    public function makeLatte(){
        echo static::class. "is making latte with ".$this->milkType. PHP_EOL;
    }
}