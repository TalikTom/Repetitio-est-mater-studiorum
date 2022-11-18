<?php

//create randomly generated greeting

$randomNumber = rand(0,2);
$randomNumber2 = rand(0,2);

$greeting = ['Hola', 'Hey', 'Wassup'];

$celestialObject = ['planet', 'moon', 'star'];

echo "{$greeting[$randomNumber]} {$celestialObject[$randomNumber2]}";


