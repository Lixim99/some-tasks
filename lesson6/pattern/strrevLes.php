<?php
    echo '<h1>Работа с strrev</h1>';

    echo '<h3>Task 1</h3>';

    $strArr = '12345';
    echo strrev($strArr);

    echo '<h1>Работа с str_shuffle</h1>';

    echo '<h3>Task 1</h3>';

    $strArr = '12345';
    echo str_shuffle($strArr);

    echo '<h1>Работа с number_format</h1>';

    //???????????????

//    $strArr = '12345678';
//    echo number_format($strArr, 2,' ');

    echo '<h1>Работа с str_shuffle</h1>';

    echo '<h3>Task 1</h3>';

    for ($i = 1; $i <= 9; $i++) echo str_repeat('x',$i) . '</br>';

    echo '<h3>Task 1</h3>';

    for ($i = 1; $i <= 9; $i++) echo str_repeat("$i",$i) . '</br>';

    echo '<h1>Работа с strip_tags и htmlspecialchars</h1>';

    echo '<h3>Task 1</h3>';

    $str = 'html, <b>php</b>, js';
    echo htmlspecialchars($str);

    echo '<h3>Task 2</h3>';

    $str = 'html, <b>php</b>, <i>js</i>';
    echo strip_tags($str,'<i>');

    echo '<h3>Task 3</h3>';

    $str = 'html, <b>php</b>, js';
    echo strip_tags($str);

    echo '<h1>Работа с chr и ord</h1>';

    echo '<h3>Task 1</h3>';

    echo ord('a') . ' ' . ord('b') . ' ' . ord('c') . ' ' . ord(' ');

    echo chr(33);

    echo '<h1>Работа с strchr, strrchr</h1>';

    echo '<h3>Task 1</h3>';

    $str =  'ab-cd-ef';
    echo strchr($str,'-');

    echo '<h3>Task 2</h3>';

    $str =  'ab-cd-ef';
    echo strrchr($str,'-');

    echo '<h1>Работа с strstr</h1>';

    echo '<h3>Task 1</h3>';

    $str =  'ab--cd--ef';
    echo strstr($str,'--');

    echo '<h3>Task 2</h3>';

    echo '<h1>Задачи</h1>';

    echo '<h3>Task 1</h3>';

    $str = 'var_test_text';

    $str = explode('_', $str);
    for ($i = 1; $i < count($str);$i++) $str[$i] = ucfirst($str[$i]);

    echo implode($str);

    echo '<h3>Task 2</h3>';

    $arr = [31, 32, 534, 24, 64, 56, 23, 32];

    for ($i = 0; $i < count($arr);$i++)
        if (strpos($arr[$i], '3') > 0 || strpos($arr[$i], '3') === 0) echo "$arr[$i] ";