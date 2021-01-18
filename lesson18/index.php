<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/header.php');

    function isNumberlnRange($num)
    {
        return $num > 0 && $num < 10;
    }

    $arr = range(6, 15);
    for ($i = 0; $i <= count($arr); $i++) if (isNumberlnRange($arr[$i])) $newArr[] = $arr[$i];
    print_r($newArr);

    function getDigitsSum($num)
    {
        return array_sum(str_split($num, 1));
    }

    echo '</br>';
    $arr = range(1, 2021);
    foreach ($arr as $num) if (getDigitsSum($num) == 13) $newerArr[] = $num;
    print_r($newerArr);

    echo '</br>';

    function isEven($a)
    {
        return $a % 2 === 0;
    }

    $newerArr = [];
    $arr = range(25, 38);
    foreach ($arr as $number) if (isEven($number)) $newerArr[] = $number;
    print_r($newerArr);

    function getDivisors($num)
    {

        foreach (range(1, $num) as $numValue) if ($num % $numValue === 0) $newerArr[] = $numValue;
        return $newerArr;

    }

    function getCommonDivisors($num1, $num2)
    {
        return array_intersect(getDivisors($num1), getDivisors($num2));
    }

    print_r(getCommonDivisors(4, 6));

    require_once($_SERVER['DOCUMENT_ROOT'] . '/footer.php');