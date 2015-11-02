<?php

if(isset($_COOKIE['user']['id'] && !empty(isset($_COOKIE['user']['id']))){
    echo "Hello, you are logged in!"
    // Logged In
}else{
    echo"Sorry you have no access to this page"
    // Not logged in :(
}
?>