<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sparks";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = $_POST['id'];
$pResult = "SELECT productName FROM productmaster WHERE productid  = $id";
$row = $pResult->fetch_row();
$productname = $row[0];

$sql = "SELECT P.`productName`, `IMEINo` FROM `purchasemaster` P WHERE p.productName = $productname";
// -- $sql =  "SELECT p.productName, p.IMEINo
// -- FROM purchasemaster p
// -- WHERE p.productName = $name";


$result = mysqli_query($conn, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $values = array(
        // 'address' => $row['address'],
        'imeiNo' => $row['IMELNo']
    );

    echo json_encode($values);
}


// $id = $_POST['id'];
// $sql = "SELECT * FROM purchasemaster WHERE purchaseId  = $id";
// $result = mysqli_query($conn, $sql);

// if ($result) {
//     $row = mysqli_fetch_assoc($result);
//     $values = array(
//         'activationDate' => $row['activationDate'],
//         'serialNumber' => $row['serial/CCIDNo'],
//         'simno1' => $row['sim1No'],
//         'simno2' => $row['sim2No']
//     );

//     echo json_encode($values);
// }

mysqli_close($conn);
?>
