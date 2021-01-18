<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/header.php');

    echo '<h3>Task 1</h3>';
    echo '<div>Дан массив с числами. Найдите среднее арифметическое его элементов (сумма элементов делить на количество) не используя цикл.</div>';

    $arr = [1, 2, 5, 6, 23, 56];
    echo array_sum($arr) / count($arr);

    echo '<h3>Task 2</h3>';
    echo '<div>Найдите сумму чисел от 1 до 100 не используя цикл</div>';

    $arr = range(1, 100);
    echo array_sum($arr);

    echo '<h3>Task 3</h3>';
    echo '<div>Выведите столбец чисел от 1 до 100 не используя цикл</div>';

    $arr = range(1, 100);
    array_map('print_r', $arr);

    echo '<h3>Task 4</h3>';
    echo '<div>Заполните массив 10-ю иксами не используя цикл.</div>';

    print_r(array_fill(0, 10, 'x'));

    echo '<h3>Task 5</h3>';
    echo '<div>Заполните массив 10-ю случайными числами от 1 до 10 так, чтобы они не повторялись. Цикл использовать нельзя.</div>';

    $arr = range(1, 10);
    shuffle($arr);
    print_r($arr);

    echo '<h3>Task 6</h3>';
    echo '<div> Найдите факториал заданного числа не используя цикл. Факториал - это произведение чисел от 1 до заданного числа включительно.</div>';

    $fac = 4;
    print_r(array_product(range(1, $fac)));

    echo '<h3>Task 7</h3>';
    echo '<div> Дано число. Найдите сумму цифр этого числа не используя цикл.</div>';

    $num = 422;
    print_r(array_sum(str_split($num, 1)));

    echo '<h3>Task 8</h3>';
    echo '<div> Дана <b>строка</b>. Сделайте заглавным последний символ этой строки не используя цикл.</div>';

    $string = 'asdfha asdf asd alsdf jh asd';
    $string = explode(' ', $string);
    $string[count($string) - 1] = strrev(ucfirst(strrev($string[count($string) - 1])));
    $string = implode(' ', $string);
    print_r($string);

    echo '<h3>Task 9</h3>';
    echo '<div> Дан массив с числами. Получите из него массив с квадратными корнями этих чисел не используя цикл..</div>';

    $arr = [1, 2, 3, 5];
    print_r(array_map("sqrt", $arr));

    echo '<h3>Task 10</h3>';
    echo '<div> Заполните массив числами от 1 до 26 так, чтобы ключами этих чисел были буквы английского алфавита: [a=>1, b=>2...]. Сделайте это не используя цикл</div>';

    $arr1 = range(chr(97), chr(122));
    $arr2 = range(1, 26);
    print_r(array_combine($arr1, $arr2));

    echo '<h3>Task 11</h3>';
    echo '<div> Дана строка с числами 1234567890. Найдите сумму пар чисел: 12+34+56+78+90. Решите задачу, не используя цикл</div>';

    $arr = array_sum(str_split('1234567890', 2));
    print_r($arr);


    require_once($_SERVER['DOCUMENT_ROOT'] . '/footer.php');