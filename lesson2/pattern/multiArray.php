<?php
    echo '1 task.</br>';

    $arr = [
        'cms' => ['joomla', 'wordpress', 'drupal'],
        'colors' => ['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый']
    ];

    foreach($arr as $k){
        $counter = 0;
        foreach ($k as $value) {
            if($counter > 0) echo "</br>$value";
            $counter++;
        }
    }

    echo '</br>2 task.</br>';
    $arr = [
        'ru' => ['Понедельник','Вторник','Среда','Четверг','Пятница','Суббота','Воскресенье'],
        'en' => ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday']
    ];
    echo "{$arr['ru'][0]}  {$arr['en'][3]}";

    echo '</br>3 task.</br>';
    $lang = 'ru';
    $day = 3;

    echo $arr[$lang][$day-1];


