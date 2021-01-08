<?php
    echo '<h1> Chars </h1>';
    echo '1 task.</br>';
    $text = 'abcde';
    echo $text[0] . $text[2] . $text[4]  . '</br>';

    echo '2 task.</br>';
    $text[0] = '!';
    echo "$text </br>";

    echo '3 task.</br>';
    $text = '12345';
    $sumChar = 0;
    for($i = 0; $i < strlen($text); $i++){
        $sumChar += (int)$text[$i];
    }
    echo  $sumChar;