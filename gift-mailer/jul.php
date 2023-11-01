<!DOCTYPE html>

<html>
<head>
  <title>Congrats, you won!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, 
user-scalable=no">
</head>
<body>

<?php
// Message
$message = 'Time to vipps! Dette er julegaven.';

//$headers[] = ‘MIME-Version: 1.0’;
//$headers[] = ‘Content-type: text/html; charset=iso-8859-1’;
$headers = "From: frederick.nilsen@gmail.com";

mail("frederick.nilsen@gmail.com","Kode er scannet.",$message,$headers);
?>
<h1>God jul, X!</h1>
<p>Du har "vunnet" penger for <strong>tiltak</strong> på en verdi av N kr!</p>
<p><i>Merk at det kan ta inntil 10 minutter fra koden er scannet, før pengene er overført.</i>
<p>Igjen, god jul X!!</p>
</body>
</html>
