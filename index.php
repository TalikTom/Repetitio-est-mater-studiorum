<?php

//create randomly generated greeting

$randomNumber = rand(0,2);

$celestialObject = ['planet', 'moon', 'star'];

$greeting = "Universe";
echo "hello {$celestialObject[$randomNumber]}";
