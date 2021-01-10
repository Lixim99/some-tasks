<?php
    echo '<h1>While and for</h1>';

    echo '<h3>1 task.</h3>';
    $num = 1;
    while ($num <= 100) echo $num++ . ' ';
    //or
    for ($i = 1; $i <= 100; $i++) echo "$i ";

    echo '<h3>2 task.</h3>';
    for ($i = 11; $i <= 33; $i++) echo "$i ";
    //or
    $num = 11;
    while($num <= 33) echo $num++ . ' ';

    echo '<h3>3 task.</h3>';
    for ($i = 2; $i <= 100; $i += 2) echo "$i ";

    // or
    $num = 2;
    while ($num <= 100){
        echo "$num ";
        $num += 2;
    }

    //or
    $num = 0;
    while ($num <= 100){
        $num++;
        if($num % 2 == 0) echo "$num  ";
    }

    echo '<h3>4 task.</h3>';

    for ($i = 0, $result = 0; $i <= 100; $i++){
        $result += $i;
    }

    echo isset($result) ? "$result ":'ooops';

