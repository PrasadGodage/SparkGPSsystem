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

//insert Vender Master
if (isset($_POST['vendername '])) {
	
	$insertitem = "INSERT INTO `vendermaster`(`vendername`, `gstin `, `address `, `email `, `contactfirm `, `contactsales`,`contacttechnical `) VALUES ('$vendername','$gstin','$address','$email','$contactfirm','$contactsales','$contacttechnical')";
	if (mysqli_query($con, $insertitem)) {
		echo "Inserted"; {
			echo "Error to Insert";
		}
	}
}

//insert Client Master
// if (isset($_POST['productName'])) {
	
// 	$insertitem = "INSERT INTO `productmaster`(`productname`, `brandname`, `openingstk`, `availablestk`, `purchaseRate`, `salesRate`) VALUES ('$productName','$brandname','$openingstock','$availablestock','$purchaserate','$salesrate')";
// 	if (mysqli_query($con, $insertitem)) {
// 		echo "Inserted"; {
// 			echo "Error to Insert";
// 		}
// 	}
// }
