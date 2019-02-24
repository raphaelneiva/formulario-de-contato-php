<?php
    define('HOST','localhost');
    define('USER','root');
    define('PASS','');
    define('DBNAME','database');

    $conexao = new PDO ('mysql:host=' . HOST . ';dbname=' . DBNAME . ';', USER, PASS);