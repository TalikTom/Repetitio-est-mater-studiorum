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


//class - blueprint, look for nouns eg. person, task, user, product

class todoTask {

    public $description;

    protected  $completed = false;


    public function __construct($description)
    {
        //current instance of the class. instance of a class is an object.
        //decription in this case is name of the property.
        $this->description = $description;

    }

    public function isComplete()
    {

        return $this->completed;

    }


    public function complete()
    {
        $this->completed = true;
    }
}

$todoTask = new todoTask('Go to the store'); // a new todotask object

$todoTask->complete(); // complete the todotask

dd($todoTask->isComplete()); // check if the todotask is completed

require 'index.view.php';





