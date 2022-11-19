<?php

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

function dd($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();

};

//dd($person);

$task = [

    'title' => 'Finish homework',
    'due' => 'today',
    'assigned_to' => 'Luka',
    'completed' => true

];



require 'index.view.php';




