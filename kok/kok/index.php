<!DOCTYPE html>
<html>
<head><title>Notater</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>




<style>
a{
	font-size: 120%;
}
a:visited
</style>
</head>
<body>
<div class="jumbotron">
<h1>YouKok.tk</h1>
<h6>Trykk på ".." for å gå tilbake.</h6>


<?php
$dir = getcwd();

// Sort in ascending order - this is default
$a = scandir($dir);
// Sort in descending order
$b = scandir($dir,1);


$blacklist = array('index.php', 'script.js', 'style.css', '.');
foreach ($a as $value) {
	if (! in_array($value, $blacklist)){
	echo "<a href='$value'>$value</a><br>";
	}
}

?>
</div>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</html>