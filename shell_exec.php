<?php
$output = shell_exec('ls -lah');echo "$output";

$pwd = shell_exec('pwd');echo "<pre>$pwd</pre>";

?>

<?php

$file_test = file_exists ("test");

if ($file_test) {
    $folder_test = is_dir("test");
    if ($folder_test) {

    echo "test exists, and is a folder";

    } else {
        "test exists and is a file";
    }
} else {
    mkdir("test");
}

?>



<?php
$files = scandir($imgspath); 
$total = count($files); 
$images = array(); 
for($x = 0; $x <= $total; $x++): 
    if ($files[$x] != '.' && $files[$x] != '..') 
    { $images[] = $files[$x]; }
?> 
