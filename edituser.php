<?php
// check to see if session is started
if (!isset($_SESSION)){
    session_start();
  }
  
  if (!isset($_SESSION['username'])){
    header('Location: login.php');
  }
  
   
    
    

    if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
      require('dbconnection.php');

$username = $_POST['username'];
$password = $_POST['password'];

if($username !=''||$password !=''){
$query = sql_query($connection,"insert into users(username,password) values ('$username', '$password')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
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