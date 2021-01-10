<?php
    echo '<h1>Abs</h1>';

    echo '<h3>1 task.</h3>';

    $a = -3;
    $b = 23;
    echo abs($a - $b);

    echo '<h3>2 task.</h3>';

    $arr = [1, 2, -1, -2, 3, -3];
    for ($i = 0; $i < count($arr); $i++) $arr[$i] = abs($arr[$i]);
    var_dump($arr);