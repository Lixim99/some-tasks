<?php
    echo '<h1>Работа с регистром символов</h1>';

    echo '<h3>Task 1</h3>';
    echo trim('  ;sdlkf asd     ', '.,/');

    echo '<h3>Task 2</h3>';
    echo trim('/php/', '/');

    echo '<h3>Task 3</h3>';
    echo rtrim('слова слова слова    .',' .') . '.';