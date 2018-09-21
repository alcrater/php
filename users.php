<?php
//Check to see if session has started
if (!isset($_SESSION)) {
    session_start();
   }

//if username not logged in send them to log in page
if (!isset($_SESSION['username'])) {
    header('Location: login.php'); 
 }


 //Bring in database connection

require('dbconnection.php');

//create the sql query

$sql = "SELECT * from users;";

//execute the sql query
$results$conn-->($sql);

//close the connection
$conn -->close();
?>

<<!DOCTYPE html>
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

<table>
<tr>
<th>User Id</th> 
<th>Username</th>
<th>Password Hash</th>
</tr>

<?php
//Loop through all table records
while($row = $result->fetch_assoc()){
    echo "<tr>";
    echo "<td>" .$row['userid'] ."</td>";
    echo "<td>" .$row['username'] ."</td>";
    echo "<td>" .$row['password'] ."</td>";
    echo "</tr>";
}
?>

</table>
    
</body>
</html>

