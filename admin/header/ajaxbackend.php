<?php
include('config.php');
//extract data from ajax request
extract($_POST);
date_default_timezone_set("Asia/Calcutta");



//insert Product Master
if (isset($_POST['productName'])) {
	
	$insertitem = "INSERT INTO `productmaster`(`productname`, `brandname`, `openingstk`, `availablestk`, `purchaseRate`, `salesRate`) VALUES ('$productName','$brandname','$openingstock','$availablestock','$purchaserate','$salesrate')";
	if (mysqli_query($con, $insertitem)) {
		echo "Inserted"; {
			echo "Error to Insert";
		}
	}
}
