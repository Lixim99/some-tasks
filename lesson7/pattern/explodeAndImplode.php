<?php
    echo '<h1>Работа с регистром символов</h1>';

    echo '<h3>Task 1</h3>';

    $strArr = explode(' ','html css php');
    var_dump($strArr);

    echo '<h3>Task 2</h3>';
    $splitArr = ['html', 'css', 'php'];
    echo implode(' ', $splitArr);

    echo '<h3>Task 3</h3>';
    $date = '2013-12-31';
    $dateArr = explode('-',$date);
    for($i = count($dateArr) - 1; $i >= 0; $i--) echo $i > 0?"$dateArr[$i].":"$dateArr[$i]";