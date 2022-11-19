<?php

require "functions.php";

//create randomly generated greeting

$randomNumber = rand(0,2);
$randomNumber2 = rand(0,2);

$greeting = ['Hola', 'Hey', 'Wassup'];

$celestialObject = ['planet', 'moon', 'star'];

$names = ['marija', 'luka', 'milena', 'arsen'];

$names[]= 'petar';

$person = [
    'age' => 31,
    'hair' => 'black',
    'career' => 'web developer'
];

$person['height'] = 180;




$task = [

    'title' => 'Finish homework',
    'due' => 'today',
    'assigned_to' => 'Luka',
    'completed' => false

];



require 'index.view.php';




