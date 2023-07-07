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
if (isset($_POST['vendername'])) {

	$insertitem = "INSERT INTO `vendermaster`(`vendername`, `gstin `, `address`, `email`, `contactfirm`, `contactsales`,`contacttechnical `) VALUES ('$vendername','$gstin','$address','$email','$contactfirm','$contactsales','$contacttechnical')";
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


if (isset($_POST['productName'])) {

	$date = date("Y-m-d");
	$insertitem = "INSERT INTO `purchasemaster` (`prdName`, `vendorName`,`purchaseDate` , `imeiNo`, `uidNo`, `sim1no`, `sim2no`) VALUES ('$productName','$vendorName', '$date' ,'$imeiNumber','$serialNumber','$simno1', '$simno2')";
	if (mysqli_query($con, $insertitem)) {
		echo "Inserted";
	} else {
		echo "Error";
	}
}




if (isset($_POST['vendorname'])) {
	
	// $insertitem = "INSERT INTO `vendermaster`(`vendername`, `gstin `, `address`, `email`, `contactfirm`, `contactsales`,`contacttechnical `) VALUES ('$vendername','$gstin','$address','$email','$contactfirm','$contactsales','$contacttechnical')";
	$insertitem = "INSERT INTO `vendermaster`(`vendername`, `gstin`, `address`, `email`, `contactfirm`, `contactsales`, `contacttechnical`) VALUES ('$vendorname','$gstin','$address','$email','$contactfirm','$contactsales','$contacttechnical')";
	if (mysqli_query($con, $insertitem)) {
		echo "Inserted"; {
			echo "Error to Insert";
		}
	}
}


if (isset($_POST['clientname'])) {
	
	$insertitem = "INSERT INTO `clientmaster`(`clientname`, `GSTIN`, `address`, `email`, `contact`, `OpeningOutstanding`, `Outstanding`, `ClientType`, `Status`) VALUES ('$clientname','$gstin','$address','$email','$contact','$openingoutstanding','$outstanding','$clienttype','$status')";
	if (mysqli_query($con, $insertitem)) {
		echo "Inserted"; {
			echo "Error to Insert";
		}
	}
}
