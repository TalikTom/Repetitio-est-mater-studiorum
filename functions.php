<?php

function dd($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();

};


function fetchAllTasks($pdo) {

    $statement = $pdo->prepare('select * from todos');
    
    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_OBJ);
    
    }


//practice function check age

function retirementAge($age) {
    if ($age > 70) {
        echo "you can retire now";
    } else {
        echo "no pension for you!";
    }
};