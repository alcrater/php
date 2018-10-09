<?php

$cookie_name = "lastVisit";

$cookie_value = date("l jS \of F Y h:i:s A");// l -day of the week


if (isset($_COOKIE['lastVisit']))

{

  $notification = "Last time you were here Mate was " . (time()- $lastVisit) . " seconds ago";

}

 ?>

<!DOCTYPE html>
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

            
        ?>

    </p>

  </body>

</html>