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

//get the q parameter from URL
$q = $_GET["q"];
$t = $_GET["t"];

if($t == "first"){
    $query = "SELECT first_name, last_name, email FROM Customers WHERE
            first_name LIKE ?";
}elseif($t == "last"){
    $query = "SELECT first_name, last_name, email FROM Customers WHERE
            last_name LIKE ?";
}elseif($t == "email"){
    $query = "SELECT first_name, last_name, email FROM Customers WHERE
            email LIKE ?";
}

$wildcard = '%' . $q . '%';
$get_customers = $conn->prepare( $query );
$get_customers->bind_param("s", $wildcard);
$get_customers->execute();
$customers = $get_customers->get_result();

$response = "";

if($customers->num_rows > 0){
    while($row = $customers->fetch_assoc()){
        if($response != ""){
            $response .= "<br>";
        }
        $response .= "<a onclick='updateInfo(" . '"' . $row["first_name"] . " " . $row["last_name"] . " " . $row["email"] . '"' . ")'"
            . '>' . $row["first_name"] . " " . $row["last_name"]. " (". $row["email"] . ")</a>";
    }
}else{
    $response = "No suggestions";
}

echo $response
?>