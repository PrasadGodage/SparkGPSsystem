<?php 
include 'config.php';



$prd_name = $_POST['prd_name'];
$prd_link = $_POST['prd_link'];
$prd_price = $_POST['prd_price'];

$filename = $_FILES["prd_img"]["name"];


$temp = $_FILES["prd_img"]["tmp_name"];
$folder = "uploadImage/".$filename;
move_uploaded_file($temp,$folder);



// Inser Query

$sql = "INSERT INTO `product`( `prd_name`, `prd_price`, `prd_img`, `prd_link`) VALUES ('$prd_name','$prd_price','$folder','$prd_link')";

$result = mysqli_query($con,$sql);

if ($result) {
	echo "Success";
	
} else {
	echo "False";
}






	



	// $prd_name = $_POST['prd_name'];
	// $prd_link = $_POST['prd_link'];
	// $prd_img = $_FILES['prd_img'];
	// $prd_price = $_POST['prd_price'];

	

	// $img_loc = $_FILES['prd_img'][]


