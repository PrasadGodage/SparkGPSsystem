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
	$vendorName = $_POST['vendorName'];
	
	
	$insertitem = "INSERT INTO `purchasemaster` (`prdName`, `vendorName`,`purchaseDate` , `imeiNo`, `uidNo`, `sim1no`, `sim2no`) VALUES ('$productName','$vendorName', '$date' ,'$imeiNumber','$serialNumber','$simno1', '$simno2')";
	if (mysqli_query($con, $insertitem)) {
		$last_id = mysqli_insert_id($con);
		$insertStock = "INSERT INTO `inventorystk`( `ProductId`, `IMEINo`, `CCIDNo`, `Sim1No`, `Sim2No`, `StkStatus`,`VendorId`, `PurchaseId`) VALUES ('$productName','$imeiNumber','$serialNumber','$simno1','$simno2','purchase','$vendorName'','$last_id')";

		mysqli_query($con,$insertStock);
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




// ======================== INSERT DATA FOR STOCK AND PURCHASE ======================  




if (isset($_POST['data'])) {
	echo "<script>
	console.log('There are no fields to generate a report');
	</script>";

// Retrieve the data from the AJAX request
$jsonData = $_POST['data'];

// Parse the JSON data into a PHP array
$data = json_decode($jsonData, true);






// Insert the data into the database
foreach ($data as $item) {
// VenodrName
  $vemdorName = $item['selectInput']; // Replace 'field1' with your actual 
  $productName = $item['productname']; // Replace 'field2' with your actual 
  $serialNumber = $item['serialNumber'];
  $simno1 = $item['simno1'];
  $simno2 = $item['simno2'];
  $activationdate = $item['activationdate'];
  $imeiNumber = $item['imeiNumber'];
  $todayDate = date("Y-m-d");

  $sql = "INSERT INTO `purchasemaster`( `purchaseDate`,`vendorName`, `productName`, `IMELNo`, `serial/CCIDNo`, `sim1No`, `sim2No`, `activationDate`) VALUES ('$todayDate','$vendorName','$productName','$imeiNumber','$serialNumber','$simno1','$simno2','$activationdate'))";

  echo $sql;

  $res = mysqli_query($con,$sql);
  if ($res != true) {
    echo 'Error inserting data: ';
  } else {
	echo "<script>
	alert('There are no fields to generate a report');
	</script>";
	// window.location.href='admin/ahm/panel';
  }
}



}