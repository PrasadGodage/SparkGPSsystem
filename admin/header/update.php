

<?php include('./header.php');
include'config.php'; 
$id = $_GET['id'];

$record = mysqli_query($con, "SELECT * FROM `product` WHERE `id` = $id ");
$data = mysqli_fetch_array($record);

?>

<div class="card">
	<div class="card-body">
		<h5 class="card-title fw-semibold mb-4 text-center">UPDATE PRODUCT OF ID <strong class="text-primary"><?php echo $id ?></strong> AND NAME <strong class="text-primary"><?php echo $data['prd_name']; ?></strong></h5>
		<hr>


		<form action="./update1.php" method="POST" enctype="multipart/form-data">
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Product ID</label>
				<input type="text" class="form-control" name="id" value="<?php echo $id; ?>">

			</div>
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Product Name</label>
				<input type="text" class="form-control" name="prd_name" value="<?php echo $data['prd_name']; ?>">

			</div>
			<div class="mb-3 ">
				<label for="exampleInputEmail1" class="form-label">Product Link</label>
				<input type="url" class="form-control" name="prd_link" value="<?php echo $data['prd_link']; ?>">

			</div>
			<div class="mb-3">
				<label class="form-label">Product Image</label>
				<input type="file" class="form-control" name="prd_img" alue="<?php echo $data['prd_img']; ?>">

			</div>
			<div class="mb-3 ">
				<label for="exampleInputPassword1" class="form-label">Product Price</label>
				<input type="number" class="form-control" placeholder="Rs." name="prd_price" value="<?php echo $data['prd_price']; ?>">
			</div>
			<input class="btn btn-primary" name="upload" type="submit" value="Update"></input>
		</form>
	</div>
</div>


