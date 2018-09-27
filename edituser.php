<?php
// check to see if session is started
if (!isset($_SESSION)){
    session_start();
  }
  
  if (!isset($_SESSION['username'])){
    header('Location: login.php');
  }
  
 

  if(isset($_POST['Submit'])){//if the submit button is clicked
  
    require('dbconnection.php');

    
  	$username = $_POST['username'];
	
    $password = $_POST['password'];
    
    $newpassword = $_POST['newpassword']

    $confirmnewpassword = $_POST['confirmnewpassword']
  
    $result = mysql_query("SELECT password FROM users WHERE login='$username'");
        if(!$result)
        {
        echo "The username you entered does not exist";
        }
        else if($password!= mysql_result($result, 0))
        {
        echo "You entered an incorrect password";
        }
        if($newpassword=$confirmnewpassword)
        $sql=mysql_query("UPDATE users SET password='$newpassword' where login='$username'");
        if($sql)
        {
        echo "Congratulations You have successfully changed your password";
        }
       else
        {
       echo "The new password and confirm new password fields must be the same";
       }

  if (isset($_GET['id']) && $_GET['edit']=="edit") {
    require('dbconnection.php'); //bring in database connection
    $sql = "SELECT * from users where userid = " . $_GET['id']; //id is int datatype don't quote it
    $result = $conn->query($sql);
  
    echo "<form action=\"\" method=\"post\">";
  
    while ($row = $result->fetch_assoc()) {
      echo "<input name=\"userid\" type=\"text\" disabled value=\"" . $row['userid'] . "\">";
      echo "<br />";
      echo "<input name=\"username\" type=\"text\" value=\"" . $row['username'] . "\">";
      echo "<br />";
      echo "<input name=\"password\" type=\"text\" value=\"" . $row['password'] . "\">";
      echo "<br />";
      echo "<input type=\"submit\" name=\"submit\" value=\"change\">";
    }
  
    echo "</form>";
  
  
  } else {
    echo "You should not be here.";
  }
  
  
?>