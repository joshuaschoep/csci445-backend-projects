<?php
error_reporting(E_ALL);
ini_set('display_errors', True);
?>

<?php
$servername="localhost";
$username="mysql";
$password="password";

$conn = new mysqli($servername, $username, $password);

if($conn->connect_error){
    die("Connection failed:" . $conn->connect_error);
}
$conn->query("USE store");
?>

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
	$service_file = "shop";
	include("../templateHeader.php");
	?>

    <form action="ajax_submit.php" onreset="removePic()" method="post">
        <fieldset>
            <legend>Name and Information</legend>
            First name*: <input name="first" id="first" type="text" onkeyup="getResultsFirstName(this.value)" pattern="[a-zA-Z ']*" required><br>
            <div class="select-dropdown" id="firstname"></div>
            Last name*: <input name="last" id="last" type="text" onkeyup="getResultsLastName(this.value)" pattern="[a-zA-Z ']*" required><br>
            <div class="select-dropdown" id="lastname"></div>
            Email*: <input name="email" id="email" type="email" onkeyup="getResultsEmail(this.value)" required>
            <div class="select-dropdown" id="email_address"></div>
        </fieldset>
        <fieldset id="itemselect">
            <legend>Which item?</legend>
            Item*: <select id="itemlist" name="items" required onchange="displayPic()">
                    <option disabled selected value>--select option--</option>
                    <?php
                        $query = "SELECT product_id, product_name, price, quantity, image_path FROM Products";
                        $prods = $conn->query($query);

                        while($row = $prods->fetch_assoc()){
                            echo "<option value=" 
                            . $row["product_id"] 
                            . " data-img=" 
                            . $row["image_path"];
                            if($row["quantity"] <= 0){
                                echo " disabled";
                            }
                            echo ">"; 

                            echo $row["product_name"] . ", " 
                            . $row["price"];
                            if($row["quantity"] <= 0){
                                echo ": SOLD OUT";
                            }
                            echo "</option>";
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
                <input type="radio" name="donation" value="1"> Yes!

                <input type="hidden" name="time" value="<?php echo date("Y-m-d H:i:s");?>">
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
