<?php

require 'functions.php';
require 'Task.php';



$pdo = connectToDb();
$tasks = fetchAllTasks($pdo);




require 'index.view.php';


//create randomly generated greeting

// $randomNumber = rand(0,2);
// $randomNumber2 = rand(0,2);

// $greeting = ['Hola', 'Hey', 'Wassup'];

// $celestialObject = ['planet', 'moon', 'star'];

// $names = ['marija', 'luka', 'milena', 'arsen'];

// $names[]= 'petar';

// $person = [
//     'age' => 31,
//     'hair' => 'black',
//     'career' => 'web developer'
// ];

// $person['height'] = 180;




// $task = [

//     'title' => 'Finish homework',
//     'due' => 'today',
//     'assigned_to' => 'Luka',
//     'completed' => false

// ];


//class - blueprint, look for nouns eg. person, task, user, product



// $task = new Task('Go to the store'); // a new todotask object

// $task->complete(); // complete the todotask

//dd($todoTask->isComplete()); // check if the todotask is completed

// $tasks = [
//     new Task('Buy milk'),
//     new Task('Practice PHP'),
//     new Task('Intro to PDO')
// ];



// $tasks[0]->complete();
















require 'index.view.php';





