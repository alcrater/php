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
    //var_dump($testArray);

    //   foreach ($testArray as $filename=>$value) {

    //   }

      foreach($testArray as $key => $value) {
          if ($value == "." || $value=="..") (continue;)
          echo $value . "<br />";
      }

    } else {
        "test exists and is a file";
    }
} else {
    mkdir("test");

}

?>




