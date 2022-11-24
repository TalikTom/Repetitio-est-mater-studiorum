<?php

class Task {

    public $description;

    public $completed;


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