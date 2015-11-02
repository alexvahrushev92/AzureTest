<?php
/* valid username and password */
$user = 'johndoe';
$pass = 'password';

if (isset($_COOKIE[['username']) && isset($_COOKIE['password')) {

    if (($_POST['username'] != $user) || ($_POST['password'] != md5($pass))) {
        header('Location: http://microsoftstillsucks.azurewebsites.net/index.php');
    } else {
        echo 'Welcome back ' . $_COOKIE['username'];
    }

} else {
    header('Location: http://microsoftstillsucks.azurewebsites.net/index.php');
}
?>