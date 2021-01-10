<?php
    echo '<h1>Work with keys</h1>';

    echo '<h3>1 task.</h3>';
    $arr = [
        'green' => 'зеленый',
        'red' => 'красный',
        'blue' => 'голубой'
    ];
    foreach($arr as $v => $k){
        echo "$v => $k </br>";
    }
    echo '<h3>2 task.</h3>';
    $arr = [
        'Коля' => '200',
        'Вася' => '300',
        'Петя' => '400'
    ];
    foreach($arr as $v => $k){
        echo "$v - зарплата $k долларов </br>";
    }






