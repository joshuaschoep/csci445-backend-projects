<!DOCTYPE html>
<html lang="en-US">

<head>
	<title>Hi, I'm Josh</title>
	<meta charset="UTF-8">
	<meta name="description" content="All about me">
	<meta name="author" content="Josh Schoep">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../styles.css">
	<link rel="stylesheet" type="text/css" href="aboutme.css">
</head>

<body>
	<?php 
	$root = "../";
	$service_file = "aboutme";
	include("../templateHeader.php");
	?>
	<section>
		<h2>About me</h2>
		<p>
			<!-- I really hope that del or strikethrough counts as a text decoration,
			ALSO, XHTML standard says to close empty elements, but </br> just makes a second
			breakline, so I removed those closed breaks.-->
			I'm Josh, <del>if the metadata didn't work.</del><br>
			I'm in web programming to learn how to be a more versatile programmer.<br>
			I spent my summer doing program development at <abbr title="Lucent Government Solutions">LGS</abbr> Labs, 
			until the end of my project where it turned out that my team had no full stack developers and needed a webapp. <br>
			I was thrust into it, and I actually enjoyed it a lot!
		</p>
	</section>
	<hr>
	<section>
		<h2>The stuff</h2>
		<p>
			The part that I'd actually like to share with the TAs and all is what I think is a <a href="#code">cool side-project</a>,
			which this class might help me continue to develop. It started out as a personal website (just with some
			static info to practice my CSS), and now I'm developing it into a public site that I can share on my resumes.
			With credentials, it should show:
		</p>
		<ul>
			<li>System diagnostics</li>
			<li>Some of my home file systems, in case I forget my computer</li>
			<li>And some host information like github repositories (<a href="http://github.com/joshuaschoep">Github</a>)</li>
			<li>Email? <a href="mailto:joshuaschoep@mines.edu">joshuaschoep@mines.edu</a></li>
		</ul>
		<p>Here's a code snippet of the backend:</p>
		<h3 id="code">webappmain.go</h3>
		<code>
			package main<br>
			<br>
			...<br>
			<br>
			func main() {
				r := gin.Default()
				r.NoRoute(func(c *gin.Context) {
					c.File("./public/dist/webapp/index.html")
					}
				})
					
		</code>
		<br>
		<br>
		<p>And here's an image of the front-end:</p>
		<img src="../images/frontend.png" alt="Front-end screenshot of my website">
	</section>
	<hr>
	<section>
		<h2>Tables and stuff</h2>
		<table id="schedule">
			<caption>My schedule</caption>
			<thead>
				<tr>
					<th>Class</th>
					<th>Days</th>
					<th>Times</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>CSCI445</td>
					<td>Tues</td>
					<td>4-4:50</td>
				</tr>
				<tr>
					<td>HASS200</td>
					<td>Tues, Thurs</td>
					<td>12:00-1:15</td>
				</tr>
				<tr>
					<td>CSCI470</td>
					<td>Tues, Thurs</td>
					<td>8:00-9:15</td>
				</tr>
			</tbody>
		</table>

		<table id="fruits">
			<caption>Fruits</caption>
			<thead>
				<tr>
					<th></th>
					<th></th>
					<th>Taste</th>
					<th>Color</th>
					<th>Coolness</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td rowspan="4">Fruit</td>
					<td>Apples</td>
					<td>5</td>
					<td>7</td>
					<td>2</td>
				</tr>
				<tr>
					<td>Oranges</td>
					<td>8</td>
					<td>4</td>
					<td>5</td>
				</tr>
				<tr>
					<td>Bananas</td>
					<td>3</td>
					<td>2</td>
					<td>9</td>
				</tr>
				<tr>
					<td>Beans</td>
					<td colspan="3">BEANS ARE NOT A FRUIT</td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<td></td>
					<td>Average</td>
					<td>5.33</td>
					<td>4.33</td>
					<td>5.33</td>
				</tr>
			</tfoot>
		</table>

		<table id="days">
			<caption>Favorite Days</caption>
			<thead>
				<tr>
					<th>Day of the week</th>
					<th>Score</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Monday</td>
					<td>3</td>
				</tr>
				<tr>
					<td>Tuesday</td>
					<td>1</td>
				</tr>
				<tr>
					<td>Wednesday</td>
					<td>5</td>
				</tr>
				<tr>
					<td>Thursday</td>
					<td>7</td>
				</tr>
				<tr>
					<td>Friday</td>
					<td>9</td>
				</tr>
			</tbody>
		</table>
	</section>
	<?php include("../templateFooter.php")?>
</body>

</html>