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