<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/header.php');

    echo '<h3>1 Task</h3>';

    function eql($a, $b)
    {
        return $a == $b;
    }

    function minNum($a)
    {
        return $a < 0;
    }

    require_once($_SERVER['DOCUMENT_ROOT'] . '/footer.php');