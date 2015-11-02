<?php

if(isset($_COOKIE['user']['id'] && !empty(isset($_COOKIE['user']['id']))){
    echo "Hello, you are logged in!"
    // Logged In
}else{
    echo"Sorry you are not logged in!"
    // Not logged in :(
}
?>