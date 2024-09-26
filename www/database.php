<?php
    $host = '127.0.0.1';
    $user = 'root';
    $password = '';
    $database = 'compware';

    #polaczenie z baza danych
    $connection = new mysqli($host,$user,$password,$database);