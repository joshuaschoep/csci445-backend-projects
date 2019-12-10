<!doctype html>
<html lang="en-US">

<head>
	<title>Project 4 Home</title>
	<meta charset="UTF-8">
	<meta name="author" content="Josh Schoep">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../styles.css">
    <link rel="stylesheet" type="text/css" href="form_submit.css">
</head>
<body>
	<?php 
	$root = "../";
	$service_file = "io";
	include("../templateHeader.php");
	?>

    <form action="form_submit.php" onreset="removePic()" method="post">
        <fieldset>
            <legend>Name and Information</legend>
            First name*: <input name="first" type="text" required><br>
            Last name*: <input name="last" type="text" required><br>
            Email*: <input name="email" type="email" required>
        </fieldset>
        <fieldset id="itemselect">
            <legend>Which item?<legend>
            Item*: <select id="itemlist" name="items" required onchange="displayPic()">
                    <option disabled selected value>--select option--</option>
                    <?php 
                    $file = fopen("items.csv");
                    for($i = 0; $i < 4; $i += 1){
                        $next = fgetcsv($file, "r");
                        echo "<option value=$next[0]>$next[0], $next[1]</option>";
                    }
                    ?>
                  </select>
                  <img id="itempicture" src="" height="350px">
                  <script src="form.js"></script>
        </fieldset>
        <fieldset>
            <legend>Other</legend>
            Quantity*: <input type="number" name="quantity" min="1" required><br>
            Donate?
                <input type="radio" name="donation" value="0" required>No thanks
                <input type="radio" name="donation" value="5">$5
                <input type="radio" name="donation" value="10">$10

                <input type="hidden" name="time" value="<?php date("l, M d, Y h:m");?>">
        </fieldset>
        <fieldset>
                <legend>Finished?</legend>
                <input type="reset" value="Reset">
                <input type="submit" value="Submit">
        </fieldset>
    </form>

    <?php include("../templateFooter.php")?>
</body>

</html>