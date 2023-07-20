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

$sql = "SELECT * FROM inventorystk WHERE productid = '$id' AND StkStatus = '0'";
$result = mysqli_query($conn, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $values = array(
        'input1' => $row['IMEINo'],
        'input2' => $row['CCIDNo'],
    );

    echo json_encode($values);
}

mysqli_close($conn);

?>