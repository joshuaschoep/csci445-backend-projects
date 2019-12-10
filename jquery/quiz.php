<!doctype html>
<html lang="en-US">

<head>
	<title>Project 4 JQuery</title>
	<meta charset="UTF-8">
	<meta name="author" content="Josh Schoep">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="quiz.js"></script>
	<link rel="stylesheet" type="text/css" href="../styles.css">
	<link rel="stylesheet" type="text/css" href="quiz.css">
</head>
<body>
	<?php 
	$root = "../";
	$service_file = "quiz";
	include("../templateHeader.php");
	?>
	<aside>
		Question History
		<ul>
			
		</ul>
	</aside>

	<section class="quiz">
		<label for="question">
			Question
			<div id="question">

			</div>
		</label>

		<label for="answer">
			Answer
			<div id="answer">
				<input type="radio" name="quiz" value="true"> True<br>
				<input type="radio" name="quiz" value="false"> False<br>
				<button>Check answer</button>
			</div>
		</label>

		<section class="buttons">
			<button id="apple">Apples</button>
			<button id="banana">Bananas</button>
			<button id="orange">Oranges</button>
			<button id="grape">Grapes</button>
		</section>
	</section>
	<?php include("../templateFooter.php")?>
</body>

</html>