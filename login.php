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

<?php
 $username = $_GET['username'];
 $password = $_GET['password'];
 ?>

<body>
    <form method="get" action="">
        <input type="text" name="username" placeholder="enter username"><br>
        <input type="password" name="password" ><br>
        <input type="submit" value="go">
    </form>

<?php
echo "Username was " + $username;
echo "<br>";
echo "Password was " + $password; 
?>

</body>
</html>