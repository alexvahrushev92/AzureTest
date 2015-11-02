<html>
<head>
    <title>User Login</title>
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
<?php
/* valid username and password */
$user = 'johndoe';
$pass = 'password';

if (isset($_POST['username']) && isset($_POST['password')) {

    if (($_POST['username'] == $user) && ($_POST['password'] == $pass)) {

        if (isset($_POST['rememberme'])) {
            /* Set cookie to last 1 year */
            setcookie('username', $_POST['username'], time()+60*60*24*365, 'http://microsoftstillsucks.azurewebsites.net/login.php');
            setcookie('password', md5($_POST['password']), time()+60*60*24*365, 'http://microsoftstillsucks.azurewebsites.net/login.php');

        } else {
            /* Cookie expires when browser closes */
            setcookie('username', $_POST['username'], false, 'http://microsoftstillsucks.azurewebsites.net/login.php');
            setcookie('password', md5($_POST['password']), false, 'http://microsoftstillsucks.azurewebsites.net/login.php');
        }
        header('Location: index.php');

    } else {
        echo 'Username/Password Invalid';
    }

} else {
    echo 'You must supply a username and password.';
}
?>
