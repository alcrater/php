<?php



echo (basename($_SERVER['PHP_SELF']) == 'users.php') ? "<a href=users.php><strong>| Users |</strong></a>" : "<a href=users.php>| Users |</a>";



echo (basename($_SERVER['PHP_SELF']) == 'upload.php') ? "<a href=upload.php><strong> Upload | </strong></a>" : "<a href=upload.php> Upload |</a>";



echo (basename($_SERVER['PHP_SELF']) == 'login.php') ? "<a href=login.php><strong> Login | </strong></a>" : "<a href=login.php> Login |</a>";



?>
