<?php 
	

	include'config.php';

	$id = $_GET['id'];

	mysqli_query($con,"DELETE FROM `product` WHERE `id` = '$id' ");

	header('location:view_Product.php');

?>