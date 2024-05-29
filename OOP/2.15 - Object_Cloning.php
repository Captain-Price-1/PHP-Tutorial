<?php

$invoice1 = new Invoice();
// if we want to clone the object we can use clone keyword
$invoice2 = clone $invoice1;

// we can't use something like 
$invoice2 = $invoice1;
//because the invoice2 will point to the same object as the invoice1

// but the use of the clone keyword shallow copies from the invoice object 
// therefore it copies the id property of object with the value

// also the constructors are not called when you clone the object