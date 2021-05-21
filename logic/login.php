<?php

require 'messages.php';
require 'sanitize.php';
require './sql/querys.php';

$user = $_POST['user'];
$password = $_POST['password'];

if (isset($_POST['submit'])) {

    if(isset($user) && isset($password)) {

        if(strlen($user) <= 20) {

            if(strlen($password) <= 20){

                $c = verifyDB($user, $password);

                if ($c[0][1] === $user && $c[0][2] === $password) {
                    echo '<script>
                    
                    window.location.replace(`../success-pages/loginS.html`)
                    
                    </script>';

                } else {
                    echo error('The User or the Password are wrong. Please try again');
                    echo backToPreviusPage(4, '../login.html');
                }

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