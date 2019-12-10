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

    <?php
    $item = $_POST['items'];
    if($item == "boots"){
        $unit_cost = 60.0;
    } elseif($item == "shoes"){
        $unit_cost = 50.0;
    } elseif($item == "shirt"){
        $unit_cost = 30.0;
    } else {
        $unit_cost = 40.0;
    }
    
    $subtotal = $_POST['quantity'] * $unit_cost;
    $tax = $subtotal * 0.07;
    $total = $subtotal + $tax;
    if($_POST['donation'] == 1){
        $donation = ceil($total) - $total;
    }
    $total = $subtotal + $tax + $donation;
    ?>
<section class="content">
    <h1>The shop</h1>

    <h4>Order submitted by      </h4><p><?php echo $_POST['first'];
                                              echo " ";
                                              echo $_POST['last'];?></p><br>
    <h4>Order submitted at      </h4><p><?php echo $_POST['time'];?></p><br>
    <br>
    <h4>Item purchased          </h4><p><?php echo $_POST['items'];?></p><br>
    <br>
    <h4>Price per unit          </h4><p><?php echo $unit_cost;?></p>
    <h4>Quantity                </h4><p><?php echo $_POST['quantity'];?></p>
    <h4>Subtotal                </h4><p><?php echo $_POST['quantity'] * $unit_cost;?></p>
    <h4>Tax                     </h4><p><?php echo $tax;?></p>
    <h4>Donation                </h4><p><?php echo $donation;?></p>
    <h4>Total                  </h4><p><?php echo $total;?></p>

</section>

    <?php include("../templateFooter.php")?>
</body>

</html>
