<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/header.php'); ?>

<?php

    echo '<h1>Значения по умолчанию</h1>';

    function cut($string, $firstCut = 10) {
        return substr($string, 0, $firstCut);
    }
    echo cut('asdklfjasldkfjas;ldkfjasl;dkfjasl;dkfj');

    echo '<h1>Работа с рекурсией</h1>';

    function recursion($arr) {
        var_dump(array_shift($arr));
        if (count($arr) > 0) return recursion($arr);
    }

    $aree= array(1,2,3,4);
    recursion($aree);

    function anotherRecursion($num) {
        $sum = array_sum(str_split($num,1));
        return $sum > 9? anotherRecursion($sum) : $sum;
    }

    $aree= 1234;
    echo anotherRecursion($aree);

?>


<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>