<?php
    echo '<h1>Tasks</h1>';

    echo '<h3>1 task.</h3>';

    $arr = [2, 5, 9, 15, 0, 4];
    foreach ($arr as $value) if ($value > 3 && $value < 10) echo "$value ";

    echo '<h3>2 task.</h3>';
    $arrCounter = 10;
    for ($i = 0; $i <= $arrCounter; $i++) $arr[] = rand(-100,100);
    var_dump($arr);
    for ($i = 0; $i <= count($arr); $i++) if($arr[$i] > 0) echo "</br>$arr[$i] ";


    echo '<h3>3 task.</h3>';
    $arr = [1, 2, 5, 9, 4, 13, 4, 10];
    foreach ($arr as $value) {
        if($value == 4){
            echo 'Есть!';
            break;
        }
    }

    echo '<h3>4 task.</h3>';
    $arr = ['10', '20', '30', '50', '235', '3000'];
    foreach ($arr as $value) if ($value[0] == 1 || $value[0] == 2 || $value[0] == 5) echo "$value ";

    echo '<h3>5 task.</h3>';
    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    for($i = 0; $i < count($arr); $i++) echo $i == count($arr) - 1?"-{$arr[$i]}-":"-{$arr[$i]}";

    echo '<h3>6 task.</h3>';
    $arr = [
       1 =>'Monday',
       2 =>'Tuesday',
       3 =>'Wednesday',
       4 =>'Thursday',
       5 =>'Friday',
       6 =>'Saturday',
       7 =>'Sunday'
    ];

    foreach ($arr as $k =>$v) echo strtolower($v[0]) == 's'? "<b>$v</b> " : "$v ";

    //or
    $arr = [
       1 =>'Понедельник',
       2 =>'Вторник',
       3 =>'Среда',
       4 =>'Четверг',
       5 =>'Пятница',
       6 =>'Суббота',
       7 =>'Воскресенье'
    ];

    foreach ($arr as $key => $day) echo $key > 5?"<b>$day</b>" : "$day ";


    echo '<h3>7 task.</h3>';

    $arr = [
        1 =>'Понедельник',
        2 =>'Вторник',
        3 =>'Среда',
        4 =>'Четверг',
        5 =>'Пятница',
        6 =>'Суббота',
        7 =>'Воскресенье'
    ];

    $day = 'Понедельник';

    foreach ($arr as $key => $val) echo strpos($day,$val) === false?" $val ":"<i>$val</i>";

    echo "<h1>It's a little harder</h1>";
    echo '<h3>1 task.</h3>';

    for ($i = 0; $i <= 100; $i++) echo ' ' . $newArr[] = $i;

    echo '<h3>2 task.</h3>';
    $arr = ['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];
    foreach ($arr as $k => $v){
        $enArr[] = $k;
        $ruArr[] = $v;
    }
    echo 'look at the code';

    echo '<h3>3 task.</h3>';
    $num = 1000;
    while ($num >= 50) {
        $num /= 2;
        $iter++;
    }
    echo "$num iterations = $iter";

    //or
    $iter = 0;
    for($i = 1000; $i >= 50; $i /= 2) $iter++;
    echo "</br>$i iterations = $iter";