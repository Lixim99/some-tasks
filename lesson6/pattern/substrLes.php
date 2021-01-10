<?php
    echo '<h1>Работа с регистром символов</h1>';

    echo '<h3>Task 1</h3>';

    $string = 'html css php';
    echo substr($string,-3) . ' ' . substr($string,0, 3) . ' ' .
            substr($string, -7, 3);

    echo '<h3>Task 2</h3>';