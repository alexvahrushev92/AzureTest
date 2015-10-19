<!DOCTYPE html>
<html>
    <head>
    </head>
<body>
    <p><?php echo "Hello World";?></p>
    <?php//variable
    $myage='20';
    $specs='16';
    $mugs='18';
    $sausage='21';

    if ($myage >= $specs)
    {
        print "You're old enough to buy specs";
    }
    elseif ($myage >= $mugs){
    print "You're old enough to buy mugs";
    }

    elseif ($myage >= $sausage){
        print "You're old enough to buy sausage roll";
    }
    else{
        echo "you are too young";
    }

?>
</body>
</html>
