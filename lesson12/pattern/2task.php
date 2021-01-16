<?php

    echo '<h1>Простые функции</h1>';

    function power($a) {
        return $a * $a;
    }

    function summer($a,$b) {
        return $a + $b;
    }

    function deleter($a, $b, $c){
        return ($a - $b) / $c;
    }

    function weekDay($day){
        $days = [
            1 => 'пн',
            2 => 'вт',
            3 => 'ср',
            4 => 'чт',
            5 => 'пт',
            6 => 'сб',
        ];
        return $days[$day];
    }
