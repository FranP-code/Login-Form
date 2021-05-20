<?php

require 'messages.php';
require 'sanitize.php';

$user = $_POST['user'];
$password = $_POST['password'];

if (isset($_POST['submit'])) {

    if(isset($user) && isset($password)) {

        if(strlen($user) <= 20) {

            if(strlen($password) <= 20){

                sanitize('user', $user);

            } else {
                echo error('The password has more characters than allowed!');
                echo backToPreviusPage(3, '../login.html');
            }

        } else {
            echo error('The user has more characters than allowed!');
            echo backToPreviusPage(3, '../login.html');
        }

    } else {
        echo error('Some of the fields were not filled. Try again please');
        echo backToPreviusPage(3, '../login.html');
    }

} else {
    echo error('There was an error sending the form');
    echo backToPreviusPage(3, '../login.html');
}

?>