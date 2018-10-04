<?php

$cookie_name="user";
$cookie_value="bob";
//setcookie($cookie_name, $cookie_value, time() +(86400 x 30), "/"); // this is equal to one day
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
        if (isset($_COOKIE['user'])) {
            echo " You have been here before";
        } else {
            echo " This is your first time here";
            setcookie($cookie_name, $cookie_value, time() +(86400 x 30), "/"); // this is equal to one day
        }
    ?>



</body>
</html>