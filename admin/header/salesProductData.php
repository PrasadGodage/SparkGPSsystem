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
// if(isset($_POST['id'])){
// $sql = "SELECT * FROM purchasemaster WHERE productname = $id";
// $result = mysqli_query($conn, $sql);
// echo "$sql";
// if ($result) {
//     $row = mysqli_fetch_assoc($result);
//     $values = array(
//         // 'address' => $row['address'],
//         'selectInput2' => $row['IMEINo']
//     );

//     echo json_encode($values);
// }
// }

<<<<<<< Updated upstream

// // $id = $_POST['id'];
// if(isset($_POST['id'])){
// $sql = "SELECT * FROM purchasemaster WHERE productname = $id";
// $result = mysqli_query($conn, $sql);
// echo "$sql";
// if ($result) {
//     $row = mysqli_fetch_assoc($result);
//     $values = array(
//         // 'address' => $row['address'],
//         'selectInput2' => $row['IMEINo']
//     );

//     echo json_encode($values);
// }
// }

$id = $_POST['id'];
$sql = "SELECT * FROM inventorystk WHERE StkId  = $id";
=======
$id = $_POST['id'];
$sql = "SELECT * FROM purchasemaster WHERE purchaseId  = $id";
>>>>>>> Stashed changes
$result = mysqli_query($conn, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $values = array(
<<<<<<< Updated upstream
        'salesDate' => $row['ActivationDate'],
        'serialNumber' => $row['CCIDNo'],
        'simno1' => $row['Sim1No'],
        'simno2' => $row['Sim2No']
=======
        'activationDate' => $row['activationDate'],
        'serialNumber' => $row['serial/CCIDNo'],
        'simno1' => $row['sim1No'],
        'simno2' => $row['sim2No']
>>>>>>> Stashed changes
    );

    echo json_encode($values);
}

mysqli_close($conn);
?>
