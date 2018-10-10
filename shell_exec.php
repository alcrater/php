<?php
$output = shell_exec('ls -lah');
echo "$output";

$pwd = shell_exec('pwd');
echo ="$pwd";
?>

<?php
$filename = "/var/www/html/audrey/audrey/php/test";

if (file_exists($filename)) {
    echo "$filename does exist";
   

} else {
    echo "$filename does not exist";
   
  } 
  
 ?>