<!DOCTYPE html>
<html>
<body>

<h2>Attempting to run following code:</h2>
<code>
<?php 
echo nl2br( file_get_contents('test.py') );
?>
</code>

<h2>Result:</h2>
<?php
$prereq = escapeshellcmd('python3 -m pip install numpy');
$command = escapeshellcmd('python3 test.py');
$trynp = shell_exec($prereq);
echo $trynp;
$output = shell_exec($command);
echo $output;



?>
</body></html>