<?php

$cookie_name = "last_visit";

$cookie_value = date("l jS \of F Y h:i:s A");// l -day of the week

//setcookie($cookie_name,$cookie_value, time() + (86400*30), "/");

//86400 = 1 day

if (isset($_COOKIE['last_visit']))

{

  $notification = "Welcome Back Mate: I see you have been here before.";

  $last_visit = $_COOKIE['last_visit'];

  setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

}

else {

  $notification = "Welcome Mate!!! I see this is your first visit";

  setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

}


if (isset($_COOKIE['last_visit']))

{

  $notification = "Last time you were here Mate was " . (time()- $last_visit) . " seconds ago";

}

 ?>

<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cookie</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <p>

      <?php

          echo $notification;

          echo ($last_visit != "")? "<br /> Last Visit: " . $last_visit : "";
      
        ?>

    </p>

  </body>

</html>