<?php
    echo '<h1>Работа с регистром символов</h1>';

    echo '<h3>Task 1</h3>';

    echo strlen('html css php');

    echo '<h3>Task 2</h3>';

    $password = 'asdksdf';

    echo (strlen($password) > 5 && strlen($password) < 10)? 'password is correct':'password is not correct';