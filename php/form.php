<!doctype html>
<html lang="en-US">

<head>
	<title>Project 4 Home</title>
	<meta charset="UTF-8">
	<meta name="author" content="Josh Schoep">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../styles.css">
	<link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
	<?php 
	$root = "../";
	$service_file = "form";
	include("../templateHeader.php");
	?>

    <form action="form_submit.php" onreset="removePic()" method="post">
        <fieldset>
            <legend>Name and Information</legend>
            First name*: <input name="first" type="text" pattern="[a-zA-Z ']*" required><br>
            Last name*: <input name="last" type="text" pattern="[a-zA-Z ']*" required><br>
            Email*: <input name="email" type="email" required>
        </fieldset>
        <fieldset id="itemselect">
            <legend>Which item?</legend>
            Item*: <select id="itemlist" name="items" required onchange="displayPic()">
                    <option disabled selected value>--select option--</option>
                    <option value="boots">Boots, $60</option>
                    <option value="shoes">Shoes, $50</option>
                    <option value="shirt">Shirt, $30</option>
                    <option value="pants">Pants, $40</option>
                  </select>
                  <img id="itempicture" src="" height="350px">
                  <script src="form.js"></script>
        </fieldset>
        <fieldset>
            <legend>Other</legend>
            Quantity*: <input type="number" name="quantity" min="1" required><br>
            Donate?
                <input type="radio" name="donation" value="0" required>No thanks
                <input type="radio" name="donation" value="1"> Yes!

                <input type="hidden" name="time" value="<?php echo date("l, M d, Y h:m");?>">
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
