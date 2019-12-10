<!doctype html>
<html lang="en-US">

<head>
	<title>Project 4 Home</title>
	<meta charset="UTF-8">
	<meta name="author" content="Josh Schoep">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<?php 
	$root = "./";
	$service_file = "index";
	include("templateHeader.php");
	?>
	<section>
		<h2>Welcome</h2>
		<p>
			This is my website all about me and my experience in web programming
			(CSCI445).
		</p>
		<p>
			Stick around and find out how I feel about the days of the week, other
			projects I'm working on, and other information about me and my HTML/CSS
			projects.
		</p>
	</section>
	<?php include("templateFooter.php")?>
</body>

</html>