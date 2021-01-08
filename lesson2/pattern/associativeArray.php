<?php
    echo '<h1> Decrements </h1>';

    echo '1 task.</br>';

    $arr = ['a' => 1, 'b' => 2, 'c' => 3];
    $counter = 0;
    foreach ($arr as $v => $k){
        if($counter == count($arr) - 1){
            echo $v;
        }
        $counter++;
    }

    echo '</br>2 task.</br>';
    foreach ($arr as $v => $k){
        $sumKey += $k;
    }
    echo isset($sumKey)?$sumKey:'Oops';

    echo '3 task.</br>';

    $arr = ['Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$'];
    $counter = 0;
    foreach ($arr as $v => $k){
        if ($counter % 2 == 0) echo "</br> $v : $k";
        $counter++;
    }

    echo '</br>4 task.</br>';

    $arr = [
        1 => 'Monday',
        2 => 'Tuesday',
        3 => 'Wednesday',
        4 => 'Thursday',
        5 => 'Friday',
        6 => 'Saturday',
        7 => 'Sunday'
    ];

    $day = 3;

    echo $arr[$day];

    echo '</br>' . date ('l');


