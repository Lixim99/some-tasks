<?php
    echo '</br>For Each</br>';

    echo '</br>Task 1</br>';
    $arr = ['html', 'css', 'php', 'js', 'jq'];
    foreach($arr as $value) {
        echo "$value </br>";
    }

    echo '</br>Task 2</br>';
    $arr = [1, 2, 3, 4, 5];
    foreach($arr as $value){
        $result += $value;
    }
    echo isset($result)?"result = $result": 'oops';

    echo '</br>Task 3</br>';
    $arr = [1, 2, 3, 4, 5];
    foreach($arr as $value){
        $result += $value * $value;
    }
    echo isset($result)?"result = $result": 'oops';
