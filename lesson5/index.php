<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/header.php');

    echo '<h1>Balance</h1>';

    echo '<h3>Task 1</h3>';
    $a = 10;
    $b = 3;
    echo $a % $b;

    echo '<h3>Task 2</h3>';
    $a = 10;
    $b = 2;
    echo $a % $b == 0?"Делится":"Делится с остатком";

    echo '<h1>Float methods</h1>';

    echo '<h3>1 task.</h3>';

    echo round(sqrt (379)) . '</br>' . round(sqrt (379), 1)
        . '</br>' . round(sqrt (379), 2);

    echo '<h3>2 task.</h3>';

    echo ceil(sqrt(587)) . '</br>' . floor(sqrt(587)). '</br>';
    $arr['floor'] = ceil(sqrt(587));
    $arr['ceil'] = floor(sqrt(587));
    var_dump($arr);

    echo '<h1>Min and Max</h1>';

    echo 'min ' . min(4, -2, 5, 19, -130, 0, 10) . '</br>' .
        'max ' . max(4, -2, 5, 19, -130, 0, 10);

    echo '<h1>Abs</h1>';

    echo '<h3>1 task.</h3>';

    $a = -3;
    $b = 23;
    echo abs($a - $b);

    echo '<h3>2 task.</h3>';

    $arr = [1, 2, -1, -2, 3, -3];
    for ($i = 0; $i < count($arr); $i++) $arr[$i] = abs($arr[$i]);
    var_dump($arr);

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

    echo '<h1>Random methods</h1>';

    echo '<h3>1 task.</h3>';

    echo rand(1,100);

    echo '<h3>2 task.</h3>';

    for ($i = 10; $i > 0; $i--) echo ' ' . $arr[] = rand(1,100);

    echo '<h1>Tasks</h1>';

    echo '<h3>1 task.</h3>';

    $num = 15;

    for ($i = 1; $i <= $num; $i++) if ($num % $i == 0) echo ' ' . $divArr[] = $i;

    echo '<h3>2 task.</h3>';

    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

    for ($i = 0, $sum = 0; $i < count($arr); $i++) {
        $sum += $arr[$i];
        if ($sum > count($arr)) break;
    }
    echo $i;

    require_once($_SERVER['DOCUMENT_ROOT'] . '/footer.php');