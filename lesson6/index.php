<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/header.php');

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

    echo '<h1>Работа с регистром символов</h1>';

    echo strtoupper('php') . ' ' . strtolower('PHP') . ' ' . ucfirst('london')
        . ' ' . lcfirst('London')  . '</br>';

    echo ucwords('london is the capital of great britain') . ' ' . ucfirst(strtolower('LONDON'));

    echo '<h1>Работа с регистром символов</h1>';

    echo '<h3>Task 1</h3>';

    echo strlen('html css php');

    echo '<h3>Task 2</h3>';

    $password = 'asdksdf';

    echo (strlen($password) > 5 && strlen($password) < 10)? 'password is correct':'password is not correct';

    echo '<h1>Работа с регистром символов</h1>';

    echo '<h3>Task 1</h3>';

    echo str_replace('.','-','31.12.2013');

    echo '<h3>Task 2</h3>';

    $str = 'abc';
    echo strtr($str,['a' => '1','b' => '2','c' => '3']);

    echo '<h3>Task 3</h3>';

    $str = 'a;sldfj;as';
    echo substr_replace($str,'!!!',2);

    echo '<h1>Работа с strrev</h1>';

    echo '<h3>Task 1</h3>';

    $strArr = '12345';
    echo strrev($strArr);

    echo '<h1>Работа с str_shuffle</h1>';

    echo '<h3>Task 1</h3>';

    $strArr = '12345';
    echo str_shuffle($strArr);

    echo '<h1>Работа с number_format</h1>';

    //???????????????

    //    $strArr = '12345678';
    //    echo number_format($strArr, 2,' ');

    echo '<h1>Работа с str_shuffle</h1>';

    echo '<h3>Task 1</h3>';

    for ($i = 1; $i <= 9; $i++) echo str_repeat('x',$i) . '</br>';

    echo '<h3>Task 1</h3>';

    for ($i = 1; $i <= 9; $i++) echo str_repeat("$i",$i) . '</br>';

    echo '<h1>Работа с strip_tags и htmlspecialchars</h1>';

    echo '<h3>Task 1</h3>';

    $str = 'html, <b>php</b>, js';
    echo htmlspecialchars($str);

    echo '<h3>Task 2</h3>';

    $str = 'html, <b>php</b>, <i>js</i>';
    echo strip_tags($str,'<i>');

    echo '<h3>Task 3</h3>';

    $str = 'html, <b>php</b>, js';
    echo strip_tags($str);

    echo '<h1>Работа с chr и ord</h1>';

    echo '<h3>Task 1</h3>';

    echo ord('a') . ' ' . ord('b') . ' ' . ord('c') . ' ' . ord(' ');

    echo chr(33);

    echo '<h1>Работа с strchr, strrchr</h1>';

    echo '<h3>Task 1</h3>';

    $str =  'ab-cd-ef';
    echo strchr($str,'-');

    echo '<h3>Task 2</h3>';

    $str =  'ab-cd-ef';
    echo strrchr($str,'-');

    echo '<h1>Работа с strstr</h1>';

    echo '<h3>Task 1</h3>';

    $str =  'ab--cd--ef';
    echo strstr($str,'--');

    echo '<h3>Task 2</h3>';

    echo '<h1>Задачи</h1>';

    echo '<h3>Task 1</h3>';

    $str = 'var_test_text';

    $str = explode('_', $str);
    for ($i = 1; $i < count($str);$i++) $str[$i] = ucfirst($str[$i]);

    echo implode($str);

    echo '<h3>Task 2</h3>';

    $arr = [31, 32, 534, 24, 64, 56, 23, 32];

    for ($i = 0; $i < count($arr);$i++)
        if (strpos($arr[$i], '3') > 0 || strpos($arr[$i], '3') === 0) echo "$arr[$i] ";

    echo '<h1>Работа с регистром символов</h1>';

    echo '<h3>Task 1</h3>';

    $str = '1234567890';
    var_dump(str_split($str,2));

    echo '<h3>Task 2</h3>';
    $str = '1234567890';
    var_dump(str_split($str,1));

    echo '<h3>Task 3</h3>';
    echo implode(str_split('1234567890',2),'-');

    echo '<h1>Работа с регистром символов</h1>';

    echo '<h3>Task 1</h3>';

    echo strpos('abc abc abc','b') . ' ' . strrpos('abc abc abc', 'b')
        . ' ' . strpos('abc abc abc', 'b', 3)  . ' '
        . strpos('aaa aaa aaa aaa aaa', ' ',5) . '</br>';

    var_dump (strpos('asd', ' '));

    echo '<h3>Task 2</h3>';

    $str = 'asldfkj.asdlkfh';
    echo strpos($str, '..')?'Есть':'Нет';

    echo '<h3>Task 3</h3>';

    $string = 'http://site.com';
    echo strpos($string,'http://') === 0?'да':'нет';

    echo '<h1>Работа с регистром символов</h1>';

    echo '<h3>Task 1</h3>';

    $string = 'html css php';
    echo substr($string,-3) . ' ' . substr($string,0, 3) . ' ' .
        substr($string, -7, 3);

    echo '<h3>Task 2</h3>';

    echo '<h1>Работа с регистром символов</h1>';

    echo '<h3>Task 1</h3>';
    echo trim('  ;sdlkf asd     ', '.,/');

    echo '<h3>Task 2</h3>';
    echo trim('/php/', '/');

    echo '<h3>Task 3</h3>';
    echo rtrim('слова слова слова    .',' .') . '.';

    require_once($_SERVER['DOCUMENT_ROOT'] . '/footer.php');

