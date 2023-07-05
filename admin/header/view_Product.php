<?php
include('./header.php');
include('config.php');

?>


<div class="card">
	<h5 class="card-header">Products</h5>
	<div class="card-body table-responsive text-nowrap">
		<table class="table table-bordered">
			<thead>
				<tr>

					<th class="text-primary"> <strong>ID</strong> </th>
					<th class="text-primary"> <strong>Product Name</strong> </th>
					<th class="text-primary" style="width: 120px"> <strong>Product Link</strong> </th>
					<th class="text-primary"> <strong>Product Image</strong> </th>
					<th class="text-primary"> <strong>Product Price</strong> </th>
					<th class="text-primary"> <strong>Update</strong> </th>
					<th class="text-primary"> <strong>Delete</strong> </th>






				</tr>
			</thead>
			<tbody class="table-border-bottom-0">
				<?php

				$selectnewusers = "SELECT * FROM `product`";



				// perform query against database in php
				$result = mysqli_query($con, $selectnewusers);



				// mysqli count rows in data base
				if (mysqli_num_rows($result) > 0) {
					while ($row = mysqli_fetch_assoc($result)) { ?>
						<tr>
							<td><?php echo $row['id']; ?></td>
							<td><?php echo $row['prd_name']; ?></td>
							<td><?php echo $row['prd_link']; ?></td>
							<td><img src='<?php echo $row['prd_img']; ?>' width='200px' height='150px'></td>
							<td><?php echo $row['prd_price']; ?></td>
							<td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Update</a> </td>
							<!-- <td><button class="btn btn-danger">Delete</button> </td> -->
							<td><a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>






						</tr>





				<?php
					}
				} else {
				}
				// while($){}



				?>


			</tbody>
		</table>
	</div>

</div>

<div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="changePasswordModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="changePasswordModalLabel">Edit Product</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="update.php" method="GET" enctype="multipart/form-data">

					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Product ID</label>
						<input type="text" class="form-control" name="prd_id">

					</div>
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

					<input class="btn btn-primary" name="upload" type="submit" value="Update"></input>
				</form>
			</div>
			<div id="message"></div>
		</div>
	</div>
</div>