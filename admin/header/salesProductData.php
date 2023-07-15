<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sparks";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// $id = $_POST['id'];

// $sql = "SELECT * FROM clientmaster WHERE clientid  = $id";
// $result = mysqli_query($conn, $sql);

// if ($result) {
//     $row = mysqli_fetch_assoc($result);
//     $values = array(
//         'address' => $row['address'],
//         'contact' => $row['contact']
//     );

//     echo json_encode($values);
// }


// $id = $_POST['id'];
if(isset($_POST['id'])){
$sql = "SELECT * FROM purchasemaster WHERE productname = $id";
$result = mysqli_query($conn, $sql);
echo "$sql";
if ($result) {
    $row = mysqli_fetch_assoc($result);
    $values = array(
        // 'address' => $row['address'],
        'selectInput2' => $row['IMEINo']
    );

    echo json_encode($values);
}
}

// $id = $_POST['id'];
// $sql = "SELECT * FROM purchasemaster WHERE purchaseId  = $id";
// $result = mysqli_query($conn, $sql);

// if ($result) {
//     $row = mysqli_fetch_assoc($result);
//     $values = array(
//         'activationDate' => $row['activationDate'],
//         'serialNumber' => $row['serialNumber'],
//         'simno1' => $row['simno1'],
//         'simno2' => $row['simno2']
//     );

//     echo json_encode($values);
// }

mysqli_close($conn);
?>
