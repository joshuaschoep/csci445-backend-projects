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
	<link rel="stylesheet" type="text/css" href="allorders.css">
</head>
<body>
	<?php 
	$root = "../";
	$service_file = "shop";
	include("../templateHeader.php");
	?>

    <section class="content">
    <?php
        $customers = $conn->query("SELECT customer_id, first_name, last_name FROM Customers");
        while($row = $customers->fetch_assoc()){
            echo "<table>";
            echo "<caption>" . $row["first_name"] . " " . $row["last_name"] . "</caption>";
            echo "<thead>";
            echo "<td> Date </td>";
            echo "<td> Count </td>";
            echo "<td> Item </td>";
            echo "<td> Price </td>";
            echo "</thead>";
            $id = $row["customer_id"];
            $orders = $conn->query("SELECT * FROM Orders WHERE customer_id = $id");
            while($row2 = $orders->fetch_assoc()){
                echo "<tr>";
                echo "<td>" . $row2["order_time"] . "</td>";
                echo "<td>" . $row2["quantity"] . "</td>";

                $prod_id = $row2["product_id"];
                $product = $conn->query("SELECT * FROM Products WHERE product_id = $prod_id");
                $product = $product->fetch_assoc();

                echo "<td>" . $product["product_name"] . "</td>";
                echo "<td>" . $product["price"] * $row2["quantity"] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
    ?>
    </section>


    <?php include("../templateFooter.php")?>
</body>

</html>