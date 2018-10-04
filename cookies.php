<?php

$cookie_name="user";
$cookie_value="bob";
//setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // this is equal to one day
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

    <?php
   //check to see if cookie has already been set 
        if (isset($_COOKIE['user']))
         {
         $last = $_COOKIE['user']; }

        $year = 31536000 + time() ; //this adds one year to the current time, for the cookie expiration

        setcookie(user, time (), $year) ;

        if (isset ($last))
        {
        $change = time () - $last;

        if ( $change > 86400)
        {
        echo "Hello Mate!!! <br> You last visited this page on ". date("m/d/y",$last);
        // Tells the user when they last visited if it was over a day ago
        }
        else
        {
        echo "This is your first visit to this page.";
        //Greets a first time user
        }
    }
     ?> 

        <!--setcookie($cookie_name, $cookie_value, time() + (60), "/"); // this expires the cookie-->
  
</body>
</html>