<?php
// Assuming you have a MySQL database setup and connection details
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "sparks";

$servername = "localhost";
$username = "u311423116_sparks";
$password = "Sparks@2023";
$dbname = "u311423116_sparks";

// Create a connection to MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the data from the POST request
$data = $_POST['data'];

// Insert each row into the MySQL database
foreach ($data as $row) {
    $vendorName = $row['selectInput']; 
    $productName = $row['productname'];  
    $serialNumber = $row['serialNumber'];
    $simno1 = $row['simno1'];
    $simno2 = $row['simno2'];
    $activationdate = $row['activationdate'];
    $imeiNumber = $row['imeiNumber'];
    $todayDate = date("Y-m-d");
    $productId = $row['productId'];
    $vendorId = $row['vendorId'];
   
    $sql = "INSERT INTO `purchasemaster`( `purchaseDate`, `vendorName`,`vendorId`, `productId`, `productName`, `IMELNo`, `serial/CCIDNo`, `sim1No`, `sim2No`, `activationDate`) VALUES ('$todayDate','$vendorName', '$vendorId' , '$productId' , '$productName','$imeiNumber','$serialNumber','$simno1','$simno2','$activationdate')";

    
    
    if ($conn->query($sql) === FALSE) {
        echo "Error inserting data: " . $conn->error;
        break;
        
    } else {
        $last_id = $conn->insert_id;
        $sql1 = "INSERT INTO `purchasedetails`(`purchaseId`, `itemId`) VALUES ('$last_id','$productId')";
        $conn->query($sql1);
    }
}

// Close the MySQL connection
$conn->close();

echo "Data inserted successfully!";
?>