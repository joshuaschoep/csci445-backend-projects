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

$query = "SELECT product_name, quantity, price FROM Products WHERE product_id = ?";
$get_product = $conn->prepare( $query );
if ($get_product === FALSE) {
    echo $query;
    die ("Mysql Error: " . $conn->error);
}

$query = "INSERT INTO Orders(customer_id, product_id, quantity, tax, order_time, donation) VALUES (?, ?, ?, ?, ?, ?)";
$place_order = $conn->prepare( $query );
if ($place_order === FALSE) {
    echo $query;
    die ("Mysql Error: " . $conn->error);
}

$query = "SELECT customer_id FROM Customers WHERE 
    first_name = ? AND
    last_name = ? AND
    email = ?";
$find_customer = $conn->prepare( $query );
if ($find_customer === FALSE) {
    echo $query;
    die ("Mysql Error: " . $conn->error);
}

$query = "INSERT INTO Customers(first_name, last_name, email) VALUES (?, ?, ?)";
$add_customer = $conn->prepare( $query );
if ($add_customer === FALSE) {
    echo $query;
    die ("Mysql Error: " . $conn->error);
}

$query = "UPDATE Products SET quantity = quantity - ? WHERE product_id = ?";
$reduce_quantity = $conn->prepare( $query );
if ($reduce_quantity === FALSE){
    echo $query;
    die ("Mysql Error: " . $conn->error);
}

$get_product->bind_param("i", $_POST["items"]);
$get_product->execute();
$prod = $get_product->get_result()->fetch_assoc();
$unit_cost = $prod["price"];
$subtotal = $_POST['quantity'] * $unit_cost;
$tax = $subtotal * 0.07;
$total = $subtotal + $tax;
if($_POST['donation'] == 1){
    $donation = ceil($total) - $total;
}else{
    $donation = 0;
}
$total = $subtotal + $tax + $donation;
?>


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
	$service_file = "";
	include("../templateHeader.php");?>
    
    <section class="content">
        <h1>The shop</h1>
        <?php
            $find_customer->bind_param("sss", $first, $last, $mail);
            $first = $_POST["first"];
            $last = $_POST["last"];
            $mail = $_POST["email"];
            $find_customer->execute();

            $result = $find_customer->get_result();

            if( $result->num_rows == 0 ){
                echo "Welcome new customer!";
                $add_customer->bind_param("sss", $first, $last, $mail);
                $first = $_POST["first"];
                $last = $_POST["last"];
                $mail = $_POST["email"];
                $success = $add_customer->execute();

                $find_customer->bind_param("sss", $first, $last, $mail);
                $find_customer->execute();
                $cust_id = $find_customer->get_result()->fetch_assoc()["customer_id"];
            }else{
                $cust_id = $result->fetch_assoc()["customer_id"];
                echo "Thanks for shopping with us again!";
            }
        ?>
        <h4>Order submitted by      </h4><p><?php echo $_POST['first'] . " " . $_POST['last'];?></p><br>
        <h4>Order submitted at      </h4><p><?php echo $_POST['time'];?></p><br>
        <br>
        <h4>Item purchased          </h4><p><?php echo $prod["product_name"];?></p><br>
        <br>
        <h4>Price per unit          </h4><p><?php echo $unit_cost;?></p>
        <h4>Quantity                </h4><p><?php echo $_POST['quantity'];?></p>
        <h4>Subtotal                </h4><p><?php echo $_POST['quantity'] * $unit_cost;?></p>
        <h4>Tax                     </h4><p><?php echo $tax;?></p>
        <h4>Donation                </h4><p><?php echo $donation;?></p>
        <h4>Total                  </h4><p><?php echo $total;?></p>


        <?php
        $place_order->bind_param("iiidsd", $cust_id, $_POST["items"], $_POST["quantity"], $tax, $_POST["time"], $donation);
        $success = $place_order->execute();

        if($success){
            $reduce_quantity->bind_param("ii", $_POST["quantity"], $_POST["items"]);
        }
        ?>
    </section>

    <?php include("../templateFooter.php")?>
</body>

</html>
