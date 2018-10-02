<?php

if (basename($_SERVER['PHP_SELF']) == 'users.php') {
    echo "<a href='users.php'><b>Users</b></a>";
}else {
    echo "<a href="uploads.php"><b>Uploads</b></a>";
} else {
    echo "<a href=login.php')<b>Login</b></a>";
}

// echo (basename($_SERVER['PHP_SELF']) == 'users.php') ? "<a href=users.php><strong>| Users |</strong></a>" : "<a href=users.php>| Users |</a>";



// echo (basename($_SERVER['PHP_SELF']) == 'upload.php') ? "<a href=upload.php><strong> Upload | </strong></a>" : "<a href=upload.php> Upload |</a>";



// echo (basename($_SERVER['PHP_SELF']) == 'login.php') ? "<a href=login.php><strong> Login | </strong></a>" : "<a href=login.php> Login |</a>";



?>
