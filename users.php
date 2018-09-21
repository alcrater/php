<?php
// check to see if session is started
if (!isset($_SESSION)) {
  session_start();
}
//if username not logged in, will move them to login page
if (!isset($_SESSION['username'])) {
   header('Location: login.php');
}

//bring in database connections
//remember if your connection page is named different change
require('dbConnect.php');

//create the sql Query
$sql = "SELECT * from users;";

//exacute the sql query
$result = $conn->query($sql);
//close db connection
$conn->close();


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
<th>Actions</th>
</tr>

<?php
//Loop through all table records

</table>
    
</body>
</html>

