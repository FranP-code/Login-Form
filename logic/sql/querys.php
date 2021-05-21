<?php

function addToDB($user, $password) {
    require './sql/connection.php';

    $add = $connect -> prepare('insert into users (user, pass) values (?, ?)');
    echo 'paso 1';
    $add -> bindParam(1, $user, PDO::PARAM_STR);
    echo 'paso 2';
    $add -> bindParam(2, $password, PDO::PARAM_STR);
    echo 'paso 3';
    $add -> execute();
    echo 'paso 4';
}

function verifyDB($user, $password) {
    require './sql/connection.php';

    $verify = $connect -> prepare('select * from users where (user, pass) = (?, ?)');
    echo 'paso 1';
    $verify -> bindParam(1, $user, PDO::PARAM_STR);
    echo 'paso 2';
    $verify -> bindParam(2, $password, PDO::PARAM_STR);
    echo 'paso 3';
    $verify -> execute();
    echo 'paso 4';
    return $verify -> fetchAll();
}

?>