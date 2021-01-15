<?php
    echo '<h1>Работа с регистром символов</h1>';

    echo '<h3>Task 1</h3>';

    $str = '1234567890';
    var_dump(str_split($str,2));

    echo '<h3>Task 2</h3>';
    $str = '1234567890';
    var_dump(str_split($str,1));

    echo '<h3>Task 3</h3>';
    echo implode(str_split('1234567890',2),'-');