<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    require('dbconnection.php');
    //grab post data could be dangerous because of xss or sql injection
    $username = $_POST['username'];
    //sanitize the username by removing tags
    $username = filter_var($username, FILTER_SANITIZE_STRING);
    //trim any white space from beginning and end of username - 
    $username = trim($username);
    //remove slashes // or \\ from username - not allowed
    $username = stripslashes($username);
    //remove spaces
    //$username = str_replace("/", '',$username); //first parameter is string to look for and second parameter is the replacement
    $username = preg_replace("/\s+/","", $username); //defeats Jake's question about tabs
    //grab the post data password - password is hashed so need to sanizite   
    $password = $_POST['password'];
    $password = password_hash(password, PASSWORD_BCRYPT);
    $sql="INSERT INTO users (username,password) VALUES('$username','$password')";
    $conn->query($sql);
}


    session_start();

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
    
<a href = "register.php">Register</a>

<a href = "login.php"> | Login</a>


   <form method="post" action="">
        <input type="text" name="username"><br>
        <input type="password" name="password"><br>
        <input type="submit">

   </form> 




</body>
</html>