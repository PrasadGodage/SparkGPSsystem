<?php
// Assuming you have established a connection to your MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sparks";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['add_button'])) {
    // Retrieve form field data
    $clientName = $_POST['clientName'];
    $productName = $_POST['productName'];
    $imeiNumber = $_POST['IMEINo'];
    $activationDate = $_POST['product_name'];
    $serialNumber = $_POST['product_name'];
    $simno1 = $_POST['product_name'];
    $simno2 = $_POST['product_name'];

    // Query to insert data into the table
    $query = "INSERT INTO purchase (clientName, productName, IMEINo, activationDate, serialNumber, simno1, simno2) VALUES ('$clientName', '$productName', '$IMEINo', '$activationDate', '$serialNumber', '$simno1', '$simno2')";

    if (mysqli_query($conn, $query)) {
        echo "Data added successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
