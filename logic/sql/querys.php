<?php

function addToDB($user, $password) {
    require './sql/connection.php';

    $add = $connect -> prepare('insert into users (user, pass) values (?, ?)');
    $add -> bindParam(1, $user, PDO::PARAM_STR);
    $add -> bindParam(2, $password, PDO::PARAM_STR);
    $add -> execute();
}

function verifyDB($user, $password) {
    require './sql/connection.php';

    $verify = $connect -> prepare('select * from users where (user, pass) = (?, ?)');
    $verify -> bindParam(1, $user, PDO::PARAM_STR);
    $verify -> bindParam(2, $password, PDO::PARAM_STR);
    $verify -> execute();
    return $verify -> fetchAll();
}

?>