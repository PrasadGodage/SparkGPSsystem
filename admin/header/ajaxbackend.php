<?php
include('config.php');
//extract data from ajax request
extract($_POST);
date_default_timezone_set("Asia/Calcutta");



//insert Item
if (isset($_POST['itemname']) && isset($_POST['itemCode']) && isset($_POST['itemhsn']) && isset($_POST['itemUname']) && isset($_POST['itemTaxId']) && isset($_POST['itemPurRate']) && isset($_POST['itemSalesRate'])) {
	$today = date("Y-m-d") . " " . date("h:i:s");
	$insertitem = "INSERT INTO `master_item`(`ItemName`, `ItemCode`, `HSNCode`, `UnitId`, `TaxGroupId`, `PurchaseRate`, `SalesRate`, `CreatedBy`, `CreatedOn`) VALUES ('$itemname','$itemCode','$itemhsn','$itemUname','$itemTaxId','$itemPurRate','$itemSalesRate','1','$today')";
	if (mysqli_query($con, $insertitem)) {
		echo "Inserted"; {
			echo "Error to Insert";
		}
	}
}
