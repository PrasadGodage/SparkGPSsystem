<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sparks";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (!empty($_POST["StkId"])){
    //fetch imeiNo data based on the specific product name 

    $query = " SELECT `productName`,`IMEINo` FROM `inventorystk` WHERE `ProductId`= ".$_POST["StkId"]." ";
    // $query = " SELECT `productName`,`IMEINo` FROM `inventorystk` WHERE `ProductId`= ".$_POST["StkId"]." ";
    $result = $db-> query($query);

    //Generate HTML of imeiNo option list 

    if($result->num_rows> 0){
        echo '<option value=""> select imeiNo </option>';
        while ($row = $result->fetch_assoc()) {
            echo '<option value="'.$row['StkId'].'">'.$row['IMEINo'].'</option>';
        }
    }else{
        echo '<option value=""> imei No not available </option>';
    }
}
?>