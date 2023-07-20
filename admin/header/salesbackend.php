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

$sql = "SELECT * FROM productmaster WHERE `productid` = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $values = array(
        'input1' => $row['productname'],
        'input2' => $row['productid']
    );

    echo json_encode($values);
}

mysqli_close($conn);
?>
