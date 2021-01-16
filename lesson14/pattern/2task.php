<?php

    echo '<h3>1 Task</h3>';

    echo array_search(5,[1,2,3,5])?'да ':'нет ';

    echo '<h3>2 Task</h3>';

    $num = 31;

    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            $res = true;
            break;
        }else
            $res = false;
    }
    var_dump($res);

    echo '<h3>3 Task</h3>';

    $arr = [1, 2, 3, 4, 5, 6, 5];
    for ($i = 0;$i < count($arr) - 1; $i++){
        if ($arr[$i] == $arr[$i + 1]){
            $res = true;
            break;
        }else $res = false;
    }
    var_dump($res);