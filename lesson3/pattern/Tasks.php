<?php
    echo 'Task 1. </br>';
    $day = rand(1,31);
    echo $day . '</br>';
    if($day <= 10) echo 1;
    elseif($day > 10 and $day < 20) echo 2;
    else echo 3;

    echo '</br> Task 2. </br>';
    $month = rand(1,12);
    echo $month . '</br>';
    if($month < 4) echo 'winter';
    elseif($month > 3 and $month < 7)  echo 'spring';
    elseif($month > 6 and $month < 10) echo 'summer';
    else echo 'fall';

    echo '</br> Task 3. </br>';
    $string = 'fbcde';
    if($string[0] == 'a') echo 'yes';