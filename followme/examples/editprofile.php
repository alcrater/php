

<?php 

if (!isset($_SESSION)) {

session_start();

}



if (isset($_POST['submit'])) {

require('../../example/dbconnection.php');



$username = $_POST['username'];

$username = filter_var($username, FILTER_SANITIZE_STRING);

$username = trim($username);

//$username = stripcslashes($username);

$username = str_replace("/", "", $username);

$username = str_replace("\\", "", $username);

$username = preg_replace("/\s+/", "", $username);



$_SESSION['username'] = $username;

$_SESSION['first_name'] = $_POST['first_name'];

$_SESSION['last_name'] = $_POST['last_name'];

$_SESSION['title'] = $_POST['title'];

$_SESSION['description'] = $_POST['description'];



$first_name = $_POST['first_name'];

$last_name = $_POST['last_name'];

$title = $_POST['title'];

$description = $_POST['description'];

$user_id = $_SESSION['user_id'];

//pulled from the example we did earlier in the class from reference pages/uploads file

if (isset($_FILES['upload'])) {

    $img_path = "../assets/img/faces/$user_id/";

    //checks to see if uploads directory exists

    if (!file_exists($img_path)) {

      mkdir($img_path);

    }



    $target_dir = $img_path;

    $target_file = $target_dir.basename($_FILES['upload']['name']);

    $uploadVerification = true;



    if (file_exists($target_file)) {

      $uploadVerification = false;

      $ret = "Sorry. File already exists!";

    }



    //Check file for type

    $file_type = $_FILES['upload']['type'];



    switch ($file_type) {

      case 'image/jpeg':

        $uploadVerification = true;

        break;

      case 'image/png':

        $uploadVerification = true;

        break;

      case 'image/gif':

        $uploadVerification = true;

        break;

      case 'application/pdf':

        $uploadVerification = true;

        break;

      default:

        $uploadVerification = false;

        $ret = "Sorry. Only .jpg, .png, gif, .pdf files are allowed";

    }



    if ($_FILES['upload']['size'] > 2000000) {

      $uploadVerification = false;

      $ret = "Sorry. File is too big";

    }



    if ($uploadVerification) {

      move_uploaded_file($_FILES['upload']['tmp_name'], $target_file);

    }

  }



$sql = "UPDATE fm_users SET username = '$username', first_name = '$first_name', last_name = '$last_name', title = '$title', description = '$description', image_url = '$target_file' where fm_user_id = $user_id ";

$conn->query($sql);

$_SESSION['image_url'] = $target_file;

header('Location: profile.php');

echo "test";

}


?>

<!doctype html>

<html lang="en">

<head>
<meta charset="utf-8" />
<link rel="icon" type="image/png" href="../assets/img/favicon.ico">
<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<title>Edit Profile</title>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
<meta name="viewport" content="width=device-width" />

	<!-- Bootstrap core CSS     -->
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/css/paper-kit.css?v=2.1.0" rel="stylesheet"/>

	<!--  CSS for Demo Purpose, don't include it in your project     -->
	<link href="../assets/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,300,700' rel='stylesheet' type='text/css'>
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
	<link href="../assets/css/nucleo-icons.css" rel="stylesheet">
</head>

<body>
    <!--Navigation Bar-->
        <nav class="navbar navbar-expand-md fixed-top navbar-transparent" color-on-scroll="150">
    <div class="container">
	<div class="navbar-translate">
	<button class="navbar-toggler navbar-toggler-right navbar-burger" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-bar"></span>
	<span class="navbar-toggler-bar"></span>
	<span class="navbar-toggler-bar"></span>
	</button>
	 <a class="navbar-brand" href="#">Edit Profile</a>
	</div>
	<div class="collapse navbar-collapse" id="navbarToggler">
	 <ul class="navbar-nav ml-auto">
     <li class="nav-item">
     <a href="login.php" class="nav-link">Login</a>
     </li>
     <li class="nav-item">
     <a href="profile.php" class="nav-link">Profile</a>
     </li>
     <li class="nav-item">
     <a href="editprofile.php" class="nav-link">Edit Profile</a>
    </li>
    <li class="nav-item">
     <a href="users_old.php" class="nav-link">Users</a>
     </li>
     <li class="nav-item">
    <a href="#" class="nav-link">
      <?php echo $_SESSION['email']; ?>
     </a>
    </li>
     </li>
	 </ul>
	 </div>
	</div>
  </nav> <!-- nav bar end-->
  
<div class="wrapper">
<div class="page-header page-header-xs" data-parallax="true" style="background-image: url('../assets/img/default.jpg');">
<div class="filter">
</div>
</div>
<div class="section landing-section">
<div class="container">
<div class="row">
<div class="col-md-8 ml-auto mr-auto">
<!-- ml-auto and mr-auto automatically move the div ogjects -->
<h2 class="text-center">Edit Profile</h2>
<form class="contact-form" action="" method="post" enctype="multipart/form-data">

<div class="row">
 <div class="input-group">
<img src="<?php  echo  $_SESSION['image_url']; ?>" alt="Circle Image" class="img-circle img-no-padding img-responsive">
</div>
</div>

<div class="row">
<!-- col-md-6 designates the amount of spaces used in the 12 space grid that is used -->
<div class="col-md-6">
<label>First Name:</label>
<div class="input-group">
<span class="input-group-addon">
<i class="nc-icon nc-single-02"></i>
</span>
<input type="text" name="first_name" class="form-control" placeholder="First Name" value="<?php echo $_SESSION['first_name'] ?>">
</div>
</div>
<div class="col-md-6">
<label>Last Name:</label>
<div class="input-group">
<span class="input-group-addon">
<i class="nc-icon nc-single-02"></i>
</span>
<input type="text" name="last_name" class="form-control" placeholder="Last Name" value="<?php echo $_SESSION['last_name'] ?>">
</div>
</div>
</div> <!-- ends the first row -->
<label>Title:</label>
<div class="input-group">
<span class="input-group-addon">
<i class="nc-icon nc-tag-content"></i>
</span>
<input type="text" name="title" class="form-control" placeholder="Title" value="<?php echo $_SESSION['title'] ?>">
</div>
<label>Description</label>
<textarea class="form-control" name="description" rows="4" placeholder="Tell everyone a little about you..."><?php echo $_SESSION['description'] ?></textarea>
<input type="file" name="upload">
<div class="row">
<div class="col-md-4 ml-auto mr-auto text-center">
<button class="btn btn-outline-default btn-round" name="update-btn">Update</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
<footer class="footer section-dark">
<div class="container">
<div class="row">
<nav class="footer-nav">
<ul>
<li><a href="https://www.creative-tim.com">Creative Tim</a></li>
<li><a href="http://blog.creative-tim.com">Blog</a></li>
<li><a href="https://www.creative-tim.com/license">Licenses</a></li>
</ul>
</nav>
<div class="credits ml-auto">
<span class="copyright">
© <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by Creative Tem
</span>
</div>
</div>
</div>
</footer>
</body>

<!-- Core JS Files -->
<script src="../assets/js/jquery-3.2.1.js" type="text/javascript"></script>
<script src="../assets/js/jquery-ui-1.12.1.custom.min.js" type="text/javascript"></script>

<!-- <script src="../assets/js/tether.min.js" type="text/javascript"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>

<!-- Paper Kit Initialization snd functons -->
<script src="../assets/js/paper-kit.js?v=2.1.0"></script>

</html>
