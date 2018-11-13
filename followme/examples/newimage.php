<?php

if (!isset($_SESSION)) {

  session_start();

}


if ($_SERVER['REQUEST_METHOD'] == 'POST'){

//code for uploading file, will work after post data is sent

if (isset($_FILES['upload']) ){ 

  //check to if uploads folder exists

  if (!file_exists("uploads")){

    //if uploads folder(directory) dose not exist create it

    mkdir("uploads/");

  }

  //could use any id really, email or user_id


  //creates file for individual user, 0777 permissions, true = recursive to create file path

  if (!file_exists("uploads/" . $_SESSION['email'])) {

    mkdir("uploads/" . $_SESSION['email'], 0777,true);

  }

  // makes upload files for user by email

  $target_dir = "uploads/" . $_SESSION['email'] . "/";

  $target_file = $target_dir . basename($_FILES['upload']['name']);

$uploadVerify = true;






//global variables

if (file_exists($target_file)) {

  $uploadVerify = false;

  $ret = "Sorry file already exists";

}


//file type

$file_type = $_FILES['upload']['type'];



switch ($file_type) {

  case 'image/jpeg':

    $uploadVerify = true;

    break;



  default:

    $uploadVerify = false;

    $ret = "sorry only jpeg files allowed";

    break;

}





//php has file upload limit of 2mb by default

if ($_FILES['upload']['size'] > 1000000 ) {

  $uploadVerify = false;

  $ret = "Sorry file too big";

}



//if set value has value can be used as true w/o conditions

if ($uploadVerify) {

  //moves files

    move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file);

}

}

}

 ?>