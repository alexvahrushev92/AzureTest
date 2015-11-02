<?php
/* These are our valid username and passwords */
$user = 'jonny4';
$pass = 'delafoo';

if (isset($_COOKIE[['username']) && isset($_COOKIE['password')) {

    if (($_POST['username'] != $user) || ($_POST['password'] != md5($pass))) {
        header('Location: login.html');
    } else {
        echo 'Welcome back ' . $_COOKIE['username'];
    }

} else {
    header('Location: login.html');
}
?>
<html>
<head>
    <title>User Logon</title>
</head>
<body>
<h2>User Login </h2>
<form name="login" method="post" action="login.php">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    Remember Me: <input type="checkbox" name="rememberme" value="1"><br>
    <input type="submit" name="submit" value="Login!">
</form>
</body>
</html>
