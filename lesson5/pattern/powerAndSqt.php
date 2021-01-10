<?php
    echo '<h1>Work with keys</h1>';

    echo '<h3>1 task.</h3>';
    $st = pow(2,10);
    echo $st;

    //or
    $num = 2;
    $power = 10;
    $st = 1;
    while($power > 0){
        $st *= $num;
        $power--;
    }
    echo $st;

    echo '<h3>2 task.</h3>';

    echo sqrt(245);

    echo '<h3>3 task.</h3>';

    $arr = [4, 2, 5, 19, 13, 0, 10];

    foreach ($arr as $elem) $sum += $elem * $elem;

    echo sqrt($sum);