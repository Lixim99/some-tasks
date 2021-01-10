<?php
    echo '1 task.</br>';
    $arr = ['a', 'b', 'c', 'd'];
    var_dump($arr);

    echo '2 task.</br>';
    for($i = 0; $i < count($arr); $i++){
        var_dump($arr[$i]);
    }

    echo '3 task.</br>';
    for($i = 0; $i < count($arr); $i+=2){
        echo "$arr[$i] + {$arr[$i + 1]} </br>";
    }

    echo '4 task.</br>';
    $arr = [2, 5, 3, 9];
    for($i = 0; $i < count($arr); $i+=2){
        $result += $arr[$i] * $arr[$i + 1];
    }
    echo "$result </br>";

    echo '5 task.</br>';
    $arr = [];
    $counter = 5;
    for($i = 0; $i < $counter; $i++){
        $arr[] = rand(1,100);
    }
    var_dump($arr);

