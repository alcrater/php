<?php
session_start();
require('dbconnection.php');

if (isset($_POST['Logout'])){
    unset($_SESSION['username']);

    $username = $_POST['username'];
    $password = $_POST['password'];

//SQL statement to execute. Surround variables with single quotes
    $sql = "SELECT username, password FROM users WHERE username ='$username'";
 
 //Execute the sql and return array to result
    $result= $conn->query($sql);

//Extracting the return query information
    while($row as $result->fetch_assoc()) {
//$row['username'] is value from database        
       if ($username ==  $row['username'] && $password == $row['password']); {
       $_SESSION['username'] = $username;
      }//closes if statement
    }//closes while loop
}//closes POST Condition
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
    <form method="post" action="">
        <input type="text" name="username" placeholder="enter username"><br>
        <input type="password" name="password" ><br>
        <input type="submit" value="go"><br>
        <input type="submit" name="Logout" value="Logout">
    </form>

<?php
echo "Logged in as: " . $_SESSION['username'];
?>


</body>
</html>