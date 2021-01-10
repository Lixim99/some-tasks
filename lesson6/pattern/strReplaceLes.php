<?php
    echo '<h1>Работа с регистром символов</h1>';

    echo '<h3>Task 1</h3>';

    echo str_replace('.','-','31.12.2013');

    echo '<h3>Task 2</h3>';

    $str = 'abc';
    echo strtr($str,['a' => '1','b' => '2','c' => '3']);

    echo '<h3>Task 3</h3>';

    $str = 'a;sldfj;as';
    echo substr_replace($str,'!!!',2);
