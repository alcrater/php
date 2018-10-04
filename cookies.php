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
   $inOneday = 60 * 60 * 24 * 1 + time();
setcookie('user', date("G:i - m/d/y"), $inTwoMonths);
if(isset($_COOKIE['user']))
 
{
$visit = $_COOKIE['user'];
echo "Your last visit was - ". $visit;
}
else
echo "You've got some stale cookies!";
?> 
     

        <!--setcookie($cookie_name, $cookie_value, time() + (60), "/"); // this expires the cookie-->
  
</body>
</html>