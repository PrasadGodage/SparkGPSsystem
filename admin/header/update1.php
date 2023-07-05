<?php 

include'config.php';


$prd_id = $_POST['id'];

$prd_name = $_POST['prd_name'];
$prd_link = $_POST['prd_link'];
$prd_price = $_POST['prd_price'];

$filename = $_FILES["prd_img"]["name"];
$temp = $_FILES["prd_img"]["tmp_name"];
$folder = "uploadImage/".$filename;
move_uploaded_file($temp,'uploadImage/'.$filename);

if (mysqli_query($con, "UPDATE `product` SET `prd_name`= '$prd_name',`prd_price`='$prd_price',`prd_img`='$folder',`prd_link`='$prd_link' WHERE `id` = '$prd_id'")) {
	echo "Success";
} else {
	echo "Error";
}

// header("location:view_Product.php");


?>