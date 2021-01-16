<?php

    echo '<h1>Timestamp: time и mktime</h1>';

    echo time() . '</br>';

    echo mktime(0,0,0, 3,1,2025) . '</br>';
    echo mktime(0,0,0, 12,31) . '</br>';
    echo mktime(13,12,59, 3,15,2000) . '</br>';
    echo mktime(7,23,48) / 3600 . '</br>';

    echo '<h1>Функция date</h1>';

    echo date('Y:m:d i:s') . '</br>';

    $date = '2025-12-31';
    echo mktime($date);

    //continue ......