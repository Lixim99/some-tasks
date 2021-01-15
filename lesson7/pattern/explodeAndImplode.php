<?php
    echo '<h1>Работа с count</h1>';

    echo '<h3>Task 1</h3>';
    $arr = [1, 2, 5, 6, 23, 56];
    echo count($arr);

    echo '<h3>Task 2</h3>';
    $arr = [1, 2, 5, 6, 23, 56];
    echo $arr[count($arr) - 1];

    echo '<h1>Работа с in_array</h1>';

    echo '<h3>Task 1</h3>';
    $arr = [1, 2, 5, 6, 23, 56, 3];
    echo in_array(3,$arr);

    echo '<h1>Работа с array_sum и array_product</h1>';

    echo '<h3>Task 1</h3>';
    $arr = [1, 2, 5, 6, 23, 56, 3];
    echo array_sum($arr);

    echo '<h3>Task 2</h3>';
    $arr = [1, 2, 5, 6, 23, 56, 3];
    echo array_product($arr);

    echo '<h3>Task 3</h3>';
    $arr = [1, 3];
    echo array_sum($arr) / count($arr);


    echo '<h1>Работа с range</h1>';

    echo '<h3>Task 1</h3>';
    print_r(range(1,100));

    echo '<h3>Task 2</h3>';

    $arr = range(97,122);
    foreach ($arr as $v) echo chr($v);

    echo '<h3>Task 2</h3>';

    echo implode(range(1,9),'-');

    echo '<h3>Task 3</h3>';

    echo array_sum(range(1,100));

    echo '<h3>Task 4</h3>';

    echo array_product(range(1,10));

    echo '<h1>Работа с array_merge</h1>';


    echo '<h3>Task 1</h3>';

    print_r(array_merge(range(1,3),['a', 'b', 'c']));

    echo '<h1>Работа с array_slice</h1>';

    echo '<h3>Task 1</h3>';

    print_r(array_slice(range(1,5),1, 3));

    echo '<h1>Работа с array_splice</h1>';

    echo '<h3>Task 1</h3>';
    $arr = range(1,5);
    print_r(array_splice($arr,2, 4));
    print_r($arr);

    echo '<h3>Task 2</h3>';
    $arr = range(1,5);
    print_r(array_splice($arr,1, 1));
    print_r(array_splice($arr,-1, 1));
    print_r($arr);

    echo '<h3>Task 3</h3>';
    $arr = range(1,5);
    $arr2 = [3, 'a','b','c'];
    print_r(array_splice($arr,2, 1,$arr2));
    print_r($arr);

    echo '<h3>Task 4</h3>';
    $arr = range(1,5);
    $arr2 = [3, 'a','b','c'];
    print_r(array_splice($arr,2, 1,$arr2));
    print_r($arr);