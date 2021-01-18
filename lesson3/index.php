<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/header.php');

    $a = '';
    var_dump($a);
    echo "</br>";
    echo empty($a)?'empty':'not empty';
    echo "</br>";
    echo isset($a)?'exist':'not exist';

    echo '1 task.</br>';

    $a = rand(-3,1);

    if ($a > 0) echo "$a > 0";
    elseif($a < 0) echo "$a < 0";
    elseif($a == 0) echo 0;

    $a = rand(-3,5);
    if($a > 0 && $a < 5) Echo "$a > 0 and $a < 5";
    elseif($a == 0 || $a == 2) Echo $a+=7;

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

    echo 'Task 1. </br>';
    $day = rand(1,31);
    echo $day . '</br>';
    if($day <= 10) echo 1;
    elseif($day > 10 and $day < 20) echo 2;
    else echo 3;

    echo '</br> Task 2. </br>';
    $month = rand(1,12);
    echo $month . '</br>';
    if($month < 4) echo 'winter';
    elseif($month > 3 and $month < 7)  echo 'spring';
    elseif($month > 6 and $month < 10) echo 'summer';
    else echo 'fall';

    echo '</br> Task 3. </br>';
    $string = 'fbcde';
    if($string[0] == 'a') echo 'yes';

    require_once($_SERVER['DOCUMENT_ROOT'] . '/footer.php');