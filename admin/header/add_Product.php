<?php include('./header.php');
?>

<div class="card">
	<div class="card-body">
		<h5 class="card-title fw-semibold mb-4 text-center text-primary">ADD PRODUCT</h5>
		<hr>


		<form action="./add_Product_Backend.php" method="POST" enctype="multipart/form-data">
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Product Name</label>
				<input type="text" class="form-control" name="prd_name">

			</div>
			<div class="mb-3 ">
				<label for="exampleInputEmail1" class="form-label">Product Link</label>
				<input type="url" class="form-control" name="prd_link">

			</div>
			<div class="mb-3">
				<label class="form-label">Product Image</label>
				<input type="file" class="form-control" name="prd_img">

			</div>
			<div class="mb-3 ">
				<label for="exampleInputPassword1" class="form-label">Product Price</label>
				<input type="number" class="form-control" placeholder="Rs." name="prd_price">
			</div>

			<input class="btn btn-primary" name="upload" type="submit" value="add"></input>
		</form>
	</div>
</div>