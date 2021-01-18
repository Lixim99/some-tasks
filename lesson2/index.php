<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/header.php');

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

    echo '1 task.</br>';

    $arr = [
        'cms' => ['joomla', 'wordpress', 'drupal'],
        'colors' => ['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый']
    ];

    foreach($arr as $k){
        $counter = 0;
        foreach ($k as $value) {
            if($counter > 0) echo "</br>$value";
            $counter++;
        }
    }

    echo '</br>2 task.</br>';
    $arr = [
        'ru' => ['Понедельник','Вторник','Среда','Четверг','Пятница','Суббота','Воскресенье'],
        'en' => ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday']
    ];
    echo "{$arr['ru'][0]}  {$arr['en'][3]}";

    echo '</br>3 task.</br>';
    $lang = 'ru';
    $day = 3;

    echo $arr[$lang][$day-1];


    require_once($_SERVER['DOCUMENT_ROOT'] . '/footer.php');