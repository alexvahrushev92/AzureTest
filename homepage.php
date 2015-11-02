<?php

function displayAccessLevelInformation($accessLevel){
    if($accessLevel == "standarduser"){
        echo "<p>You are currently logged in a a standard user</p>";
    }
    elseif($accessLevel == "root" ){
        echo "<p>You are currently logged in a a root user</p>";
        echo "<p>You now have access to additional administrative features</p>";
    }
}

displayAccessLevelInfor

