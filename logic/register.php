<?php

require 'messages.php';
require 'sanitize.php';
require './sql/querys.php';

$user = $_POST['user'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm-password'];

if (isset($_POST['submit'])) {

    if (isset($user) && isset($password) && isset($confirm_password)) {

        if ($password === $confirm_password) {

            if (strlen($user) <= 20) {

                if (strlen($password) <= 20) {
                    
                    addToDB(sanitize('user', $user), $password);

                    echo '<script>
                        window.location.replace(`../success-pages/registerS.html`)
                    </script>';

                } else {
                    echo error('The password has more characters than allowed!');
                    echo backToPreviusPage(3, '../register.html');
                }

            } else {
                echo error('The user has more characters than allowed!');
                echo backToPreviusPage(3, '../register.html');
            }

        } else {
            echo error('The passwords doesn'. `'` . 't match');
            echo backToPreviusPage(3, '../register.html');
        }

    } else {
        echo error('Some of the fields were not filled. Try again please');
        echo backToPreviusPage(3, '../register.html');
    }

} else {
    echo error('There was an error sending the form');
    echo backToPreviusPage(3, '../register.html');
}

?>