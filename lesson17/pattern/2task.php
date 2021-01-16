<?php

    for ($i = 0; $i < 10; $i++) $arr[] = str_repeat('x',$i);
    var_dump($arr);
    echo '</br>';

    for ($i = 0; $i < 10; $i++) $arr1[] = str_repeat("$i",$i);
    var_dump($arr1);

    function arrayFill ($value,$count){
        return str_split(str_repeat($value,$count),1);
    }

    function arrayFillAnother ($value,$count){
        for ($i = 0; $i < $count; $i++) $arr[] = $value;
        return $arr;
    }
    echo '</br>';

    $arr = range(1,10);
    for ($i = 0;$i < count($arr);$i++) if(array_sum(array_slice($arr,0,$i)) > 10) break;

    echo $i - 1;

    echo '</br>';

    $arr = [[1, 2, 3], [4, 5], [6]];
    foreach ($arr as $k) $num += array_sum($k);
    echo $num;

    echo '</br>';

    $arr = [[[1, 2], [3, 4]], [[5, 6], [7, 8]]];
    foreach ($arr as $k) {
        foreach ($k as $vUnd) $numUnd += array_sum($vUnd);
    }
    echo $numUnd;

    echo '</br>';
    // fix me
    $arr = [];
    $counter = 3;
    for ($i = 0; $i < $counter; $i++){
        $arr1 = [];
        for ($b = $counter * ($i + 1)  - ($counter - 1); $b <= $counter * ($i + 1);$b++){
            $arr1[] = $b;
        }
        $arr[] = $arr1;
    }
    print_r($arr);
