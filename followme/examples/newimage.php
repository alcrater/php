<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?> 






 <!doctype html>

<html lang="en">

<head>

	<meta charset="utf-8" />

	<link rel="icon" type="image/png" href="../assets/img/favicon.ico">

	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />



	<title>by chaos</title>



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

    <nav class="navbar navbar-expand-md fixed-top navbar-transparent" color-on-scroll="150">

        <div class="container">

			<div class="navbar-translate">

	            <button class="navbar-toggler navbar-toggler-right navbar-burger" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">

					<span class="navbar-toggler-bar"></span>

					<span class="navbar-toggler-bar"></span>

					<span class="navbar-toggler-bar"></span>

	            </button>

	            <a class="navbar-brand" href="#">Edit Picture</a>

			</div>

			<div class="collapse navbar-collapse" id="navbarToggler">

	            <ul class="navbar-nav ml-auto">

               

                <li class="nav-item">

                   <a href="profile.php" class="nav-link">Profile</a>

               </li>

                <li class="nav-item">

                   <a href="editprofile.php" class="nav-link">Edit Profile</a>

               </li>

                  <li class="nav-item">

                      <a href="users.php" class="nav-link">Users</a>

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

        <div class="page-header page-header-xs" data-parallax="true" style="background-image: url('../assets/img/fabio-mangione.jpg');">

			<div class="filter"></div>

		</div>

    <!-- pasted in here-->



    <div class="section landing-section">

        <div class="container">

            <div class="row">

                <div class="col-md-8 ml-auto mr-auto">

                    <h2 class="text-center">New Image Upload</h2> 
                    <form action="upload.php" method="post" enctype="multipart/form-data">
                        Select image to upload:
                        <input type="file" name="fileToUpload" id="fileToUpload">
                        <input type="submit" value="Upload Image" name="submit">
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

                        © <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by Chaos

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





<!--  Paper Kit Initialization snd functons -->

<script src="../assets/js/paper-kit.js?v=2.1.0"></script>