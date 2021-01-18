<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/header.php'); ?>

<?php

    echo '<h1>Отработка циклов</h1>';

    for ($i = 0; $i <= 9; $i++)
        for($b = 0;$b < $i; $b++) echo $i;


    $arr = [
        0=>['name'=>'Коля', 'salary'=>300],
        1=>['name'=>'Вася', 'salary'=>400],
        2=>['name'=>'Петя', 'salary'=>500],
    ];

    foreach ($arr as $k) echo "</br>{$k['name']} - {$k['salary']}";

    echo '<h1>Практика</h1>';

    function ownUcfirst($string){
        $string[0] = chr(ord($string[0]) - 32);
        return $string;
    }
    echo ownUcfirst('xcvsom') . '</br>';

    function ownStrrev($string){
        return implode(array_reverse(str_split($string,1)));
    }

    function ownStrlen($string){
        return count(str_split($string,1));
    }

    echo ownStrrev('sa;sldkfj');
    echo '</br>';
    echo ownStrlen('sa;sldkfj');
    echo '</br>';

    function triangl (string $string) {
        for ($i = 0; $i < strlen($string); $i++) echo str_repeat($string[$i],$i + 1) . '</br>';
    }

    function reversTriangl (string $string) {
        for ($i = strlen($string); $i >= 0; $i--) echo str_repeat($string[$i],$i + 1) . '</br>';
    }
    triangl(1234);
    reversTriangl('xxxxx');

    function repearter($arr) {
        for ($i = 0; $i < count($arr); $i++) {
            for ($b = 1; $b <= $arr[$i]; $b++) $newArr[] =  $arr[$i];
        }
        return $newArr;
    }

    var_dump(repearter([1, 3, 2, 4, 1]));

    function keyer($arr) {
        for ($i = 0; $i < count($arr) - 1; $i++) $newarr[$arr[$i]] = $arr[$i + 1];
        return $newarr;
    }

    echo '</br>';
    var_dump(keyer([1, 3, 3, 4, 5, 6]));

    function delStrin($string) {
        for ($i = 0;$i < strlen($string);$i+=2) $newString .= $string[$i];
        return $newString;
    }

    echo '</br>';
    var_dump(delStrin('sal;'));
?>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>