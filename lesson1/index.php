<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/header.php'); ?>

<?php
    echo '<h1> Chars </h1>';
    echo '1 task.</br>';
    $text = 'abcde';
    echo $text[0] . $text[2] . $text[4]  . '</br>';

    echo '2 task.</br>';
    $text[0] = '!';
    echo "$text </br>";

    echo '3 task.</br>';
    $text = '12345';
    $sumChar = 0;
    for($i = 0; $i < strlen($text); $i++){
    $sumChar += (int)$text[$i];
    }
    echo  $sumChar;

    echo '<h1> Decrements </h1>';

    echo '1 task.</br>';
    $var = 47;
    $var += 7;
    $var -= 18;
    $var *= 10;
    $var /= 20;

    echo "$var </br>";

    echo '2 task.</br>';
    $text = 'Я';
    $text .=' хочу';
    $text .=' знать';
    $text .=' PHP!';
    echo $text . '</br>';;

    echo '3 task.</br>';
    $var = 10;
    $var++;
    $var++;
    $var--;
    echo $var . '</br>';

    echo '4 task.</br>';
    $var = 10;
    $var +=7;
    $var++;
    $var--;
    $var +=12;
    $var *=7;
    $var -=15;
    echo $var;

    echo '<h1> Int </h1>';
    echo '1 task.</br>';
    $a = 3;
    echo "a = $a</br>";

    echo '</br>2 task.</br>';
    $b = 10;
    $c = 2;
    echo "b = $b </br> c = $c </br> ";
    echo $b + $c . ' sum </br>';
    echo $b - $c . ' min </br>';
    echo $b * $c . ' mult </br>';
    echo $b % $c . ' lost </br>';

    echo '</br>3 task.</br>';
    $a = 10;
    $b = 2;
    $c = 5;
    echo "a = $a </br> b = $b </br> c = $c </br> ";
    $result = $a + $b + $c;
    echo "sum result = $result </br>";

    echo '</br>4 task.</br>';
    $a = 17;
    $b = 10;
    $c = $a - $b;
    $d = 7;
    $result = $c + $d;
    echo "sum result = $result </br>";

    echo '<h1> Practice </h1>';
    echo '1 task.</br>';
    $secInHour = 3600;
    $secInDay = 24 *  $secInHour;
    $secInMonth = 30 * $secInDay;
    echo "sec in june = $secInMonth </br>";

    echo '2 task.</br>';
    $hour = 11;
    $minute = 32;
    $second = 25;
    echo "$hour:$minute:$second </br>";

    echo '3 task.</br>';
    $number = 3;
    echo $number *= $number;

    echo '<h1> String </h1>';
    echo '1 task.</br>';
    $text = 'Hello world';
    echo $text . '</br>';

    echo '2 task.</br>';
    $text1 = 'Hello ';
    $text2 = 'world';
    echo $text1 . $text2 . '</br>';

    echo '3 task.</br>';
    echo $text1 . 'Max</br>';

    echo '4 task.</br>';
    $age = 19;
    echo "$age y.o.</br>";
?>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>