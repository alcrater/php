<?php
$output = shell_exec('ls -lah');
echo "<pre>$output</pre>";

$pwd = shell_exec('pwd');
echo ="<pre>$pwd</pre>";
?>

<?php
$filename = "/var/www/html/audrey/audrey/php/test";

if (file_exits($filename)) {
    echo "The file $filename";
    echo "<br>- exists";

} else {
    echo "The file $filename";
    echo "<br>- not exists";
  } 
  
  ?>