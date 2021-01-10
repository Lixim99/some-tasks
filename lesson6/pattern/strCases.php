<?php
    echo '<h1>Работа с регистром символов</h1>';

    echo strtoupper('php') . ' ' . strtolower('PHP') . ' ' . ucfirst('london')
             . ' ' . lcfirst('London')  . '</br>';

    echo ucwords('london is the capital of great britain') . ' ' . ucfirst(strtolower('LONDON'));