<!doctype html>
<html lang="en-US">

<head>
	<title>Project 4 Javascript 1</title>
	<meta charset="UTF-8">
	<meta name="author" content="Josh Schoep">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../styles.css">
</head>
<body>
	<?php 
	$root = "../";
	$service_file = "jsmouse";
	include("../templateHeader.php");
	?>
    <canvas id="smile"></canvas>
    <button id="smile-button"></button>
    <script src="jsmouse.js"></script>
	<?php include("../templateFooter.php")?>
</body>

</html>