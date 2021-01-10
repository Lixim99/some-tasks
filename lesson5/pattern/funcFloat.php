<?php
    echo '<h1>Float methods</h1>';

    echo '<h3>1 task.</h3>';

    echo round(sqrt (379)) . '</br>' . round(sqrt (379), 1)
        . '</br>' . round(sqrt (379), 2);

    echo '<h3>2 task.</h3>';

    echo ceil(sqrt(587)) . '</br>' . floor(sqrt(587)). '</br>';
    $arr['floor'] = ceil(sqrt(587));
    $arr['ceil'] = floor(sqrt(587));
    var_dump($arr);