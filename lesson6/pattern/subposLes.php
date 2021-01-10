<?php
    echo '<h1>Работа с регистром символов</h1>';

    echo '<h3>Task 1</h3>';

    echo strpos('abc abc abc','b') . ' ' . strrpos('abc abc abc', 'b')
            . ' ' . strpos('abc abc abc', 'b', 3)  . ' '
            . strpos('aaa aaa aaa aaa aaa', ' ',5) . '</br>';

    var_dump (strpos('asd', ' '));

    echo '<h3>Task 2</h3>';

    $str = 'asldfkj.asdlkfh';
    echo strpos($str, '..')?'Есть':'Нет';

    echo '<h3>Task 3</h3>';

    $string = 'http://site.com';
    echo strpos($string,'http://') === 0?'да':'нет';