<?php

    for ($i = 1; $i < 10; $i++) $str .= $i;
    echo $str;

    echo '</br>';
    $str = '';
    for ($i = 9; $i > 0; $i--) $str .= $i;
    echo $str;

    echo '</br>';
    $str = '';
    for ($i = 1; $i < 10; $i++) $str .= $i == 9?"-$i-":"-$i";
    echo $str;

    for ($i = 0; $i <= 20; $i++) {
        for ($b = 0; $b < $i; $b++) echo 'x';
        echo '</br>';
    }

    for ($i = 0; $i < 10; $i++) {
        for ($b = 0; $b < $i; $b++) echo $i;
        echo '</br>';
    }

    for ($i = 0; $i <= 10; $i += 2) {
        for ($b = 0; $b < $i; $b++) echo 'x';
        echo '</br>';
    }

