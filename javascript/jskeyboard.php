<!doctype html>
<html lang="en-US">

<head>
	<title>Project 4 Javascript 2</title>
	<meta charset="UTF-8">
	<meta name="author" content="Josh Schoep">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../styles.css">
</head>
<body>
	<?php 
	$root = "../";
	$service_file = "jskeyboard";
	include("../templateHeader.php");
	?>
    <canvas id="picture" width="500" height="500"></canvas>
    <script src="jskeyboard.js"></script>
	<?php include("../templateFooter.php")?>
</body>

</html>