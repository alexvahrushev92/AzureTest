<?php

$username="Mike";
$password="pass";

$user = $_POST['username'];
$pass = $_POST['password'];

if($user == $username && $pass == $password){
    setcookie('access_level','standarduser');
    header("location:homepage.php");
}
else{
    echo "incorrect details";
}

