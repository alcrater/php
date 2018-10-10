<?php
$output = shell_exec('ls -lah');
echo "<pre>$output</pre>";

$pwd = shell_exec('pwd');
echo ="<pre>$pwd</pre>";
?>

<?php
$execQuery = "sudo -u audrey /usr/bin/test -c '/usr/bin/audrey create test10 test10'";
$out = shell_exec ("$execQuery 2>&1");
echo $out
?>