<?php
 if (!isset($_SESSION)) {
     session_start();
 }

 if (!isset($_SESSION['username'])) {
  //die ("Don't even think about it, Kill page");
  header('Location: login.php'); //header always gets loaded before html
 }

    var_dump(_$POST['upload']);
    echo "<hr />";
    var_dump($_FILES['upload']);

if (isset($_FILES['upload'])) {
    echo $target_dir . "br>";
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES['upload'] ['name']);
    echo $target_dir . "br>";
    
    move_uploaded_file($_FILES['upload'] ['tmp_name', $target_file]);

}

 ?>

 Upload your file.

 <form action="" method="post" enctype="multipart/form-data">
 <input type="file" name="upload"><br>
 <input type="submit">
 </form>