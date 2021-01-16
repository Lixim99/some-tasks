<?php
    echo '<h1>Работа с count</h1>';

    echo  '<a href="#bottom">s</a>';

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

    echo '<h1>Работа с array_splice</h1>';

    echo '<h3>Task 1</h3>';
    $arr = ['a' => 1, 'b' => 2, 'c' => 3];
    $keys = array_keys($arr);
    $values = array_values($arr);
    print_r($keys);
    print_r($values);

    echo '<h3>Task 2</h3>';
    $arr = ['a', 'b', 'c'];
    $anotherArr = [ 1, 2, 3];
    print_r(array_combine($arr,$anotherArr));

    echo '<h1>Работа с array_flip, array_reverse</h1>';

    echo '<h3>Task 1</h3>';
    $arr = ['a' => 1, 'b' => 2, 'c' => 3];
    print_r(array_flip($arr));

    echo '<h3>Task 2</h3>';
    $arr = [1, 2, 3, 4, 5];
    print_r(array_reverse($arr));

    echo '<h1>Работа с array_splice</h1>';

    echo '<h3>Task 1</h3>';
    $arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
    echo array_search('-',$arr);

    echo '<h3>Task 2</h3>';
    $arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
    array_splice($arr,array_search('-',$arr),1);
    print_r($arr);

    echo '<h3>Task 3</h3>';
    $arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
    $arr = array_splice($arr,array_search('-',$arr),1);
    print_r($arr);

    echo '<h1>Работа с array_replace</h1>';

    echo '<h3>Task 1</h3>';
    $arr = ['a', 'b', 'c', 'd', 'e'];
    $arr = array_replace($arr,[0 => '!', 3 => '!!']);
    print_r($arr);

    echo '<h1>Работа с сортировкой</h1>';

    echo '<h3>Task 1</h3>';
    $arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
    sort($arr);
    print_r($arr);

    $arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
    asort($arr);
    print_r($arr);

    $arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
    arsort($arr);
    print_r($arr);

    $arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
    ksort($arr);
    print_r($arr);

    $arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
    krsort($arr);
    print_r($arr);

    $arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
//    usort($arr);
    print_r($arr);

    $arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
    natsort($arr);
    print_r($arr);


    echo '<h1>Работа с array_rand</h1>';

    echo '<h3>Task 1</h3>';
    $arr = ['a'=>1, 'b'=>2, 'c'=>3];
    print_r(array_rand($arr));

    echo '<h3>Task 2</h3>';
    $arr = ['a'=>1, 'b'=>2, 'c'=>3];
    echo $arr[array_rand($arr)];

    echo '<h1>Работа с shuffle</h1>';

    echo '<h3>Task 1</h3>';
    $arr = ['a'=>1, 'b'=>2, 'c'=>3];
    shuffle($arr);
    print_r($arr);

    echo '<h3>Task 2</h3>';
    $arr = range(1,25);
    shuffle($arr);
    print_r($arr);

    echo '<h3>Task 3</h3>';
    $arr = range(chr(97),chr(122));
    shuffle($arr);
    print_r($arr);

    echo '<h3>Task 4</h3>';
    $arr = range(chr(97),chr(103));
    shuffle($arr);
    echo implode($arr);

    echo '<h1>Работа с array_pad, array_fill, array_fill_keys, array_chunk</h1>';

    echo '<h3>Task 1</h3>';
    $arr = ['a', 'b', 'c'];
    print_r(array_pad($arr, count($arr) + 3, '-'));

    echo '<h3>Task 2</h3>';
    print_r(array_fill( 0,10, 'x'));

    echo '<h3>Task 3</h3>';
    print_r(array_chunk(range(1,21), 5));

    echo '<h1>Работа с array_unique</h1>';

    echo '<h3>Task 1</h3>';
    print_r(array_unique([ 'a', 'b', 'c', 'b', 'a']));

    echo '<h1>Работа с array_shift, array_pop, array_unshift, array_push</h1>';

    echo '<h3>Task 1</h3>';
    $arr = [1, 2, 3, 4, 5];
    print_r(array_shift($arr));
    print_r(array_pop($arr));
    print_r($arr);

    echo '<h3>Task 2</h3>';
    $arr = [1, 2, 3, 4, 5];
    print_r(array_unshift($arr, 0));
    print_r(array_push($arr, 6));
    print_r($arr);

    echo '<h3>Task 3</h3>';
    $arr = [1, 2, 3, 4, 5, 6, 7, 8];
    foreach ($arr as $v) echo array_shift($arr) . array_pop($arr);

    echo '<h1>Работа с array_count_values</h1>';

    echo '<h3>Task 1</h3>';
    $arr = ['a', 'b', 'c', 'b', 'a'];
    print_r(array_count_values($arr));

    echo '<h1>Работа с array_map</h1>';

    echo '<h3>Task 1</h3>';
    $arr = [1, 2, 3, 4, 5];
    print_r(array_map('sqrt',$arr));

    echo '<h3>Task 2</h3>';
    $arr = ['<b>php</b>', '<i>html</i>'];
    print_r(array_map('strip_tags',$arr));

    echo '<h3>Task 3</h3>';
    $arr = [' a     ', ' b ', ' с '];
    var_dump($arr);
    var_dump(array_map('trim',$arr));

    echo '<h1>Работа с array_intersect, array_diff</h1>';

    echo '<h3>Task 1</h3>';

    $array1 = array (1, 2, 3, 4, 5);
    $array2 = array (3, 4, 5, 6, 7);
    $result = array_intersect($array1, $array2);
    print_r ($result);

    echo '<h3>Task 1</h3>';
    $array1 = array (1, 2, 3, 4, 5);
    $array2 = array (3, 4, 5, 6, 7);
    $result = array_diff($array1, $array2);
    print_r ($result);

    echo '<h1>Задачи</h1>';

    echo '<h3>Task 1</h3>';

    $str = '1234567890';

    print_r(array_sum(str_split($str,1)));

    echo '<h3>Task 2</h3>';

    $arr1 = range(chr(97),chr(122));
    $arr2 = range(1,count($arr1));
    print_r(array_combine($arr1,$arr2));

    echo '<h3>Task 3</h3>';

    $arr1 = range(1,9);
    print_r(array_chunk($arr1, 3));

    echo '<h3>Task 4</h3>';

    $arr1 = array_unique([1, 2, 4, 5, 5]);
    rsort($arr1);
    print($arr1[1]);