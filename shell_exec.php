<?php
$output = shell_exec('ls -lah');echo "$output";

$pwd = shell_exec('pwd');echo "<pre>$pwd</pre>";

?>

<?php

$file_test = file_exists ("test");

if ($file_test) {
    $folder_test = is_dir("test");
    if ($folder_test) {

    echo "test exists, and is a folder <br />";
    
    $testArray = scandir("test/");

    foreach ($testArray as $key=>$value) {

          if ($value == "." || $value == "..") {
              continue;
            }
          echo $value . "<br />";
         
        
      }
   
     
    } else {
        "test exists and is a file";
    }
} else {
    mkdir("test");

}

$users = shell_exec("w");
$usersExploded = explode("\n", $users);
foreach ($usersExploded as skey => $value) {
    if ($key == "0" || $key == "1") {continue;}
    $username = substr($value, 0, strrpos($value, ' '));
    echo $username . "<br>";
}

?>




