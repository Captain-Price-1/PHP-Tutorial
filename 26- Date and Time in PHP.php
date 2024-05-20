<?php
//this will give you the number of time in seconds elasped after 1970s
echo time(); // 1611000276 for example

//we can also manipulate the time such as
$currentTime = time();
$currentTime = $currentTime + 5*24*60*60;

//the above one will give me the time after 5 days

//we can convert the date and time such as
$convertedTime = date('m/d/Y', $currentTime);
echo $convertedTime;

//to convert it into different timezone we can do something like
date_default_timezone_set('UTC');
