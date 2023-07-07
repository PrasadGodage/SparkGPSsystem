<?php include('./header.php'); 





?>

<div class="card">
	<div class="card-body">
		<h5 class="card-title fw-semibold mb-4 text-center text-primary">PRODUCT MASTER</h5>
		<hr>


		<form action="" method="POST" enctype="multipart/form-data" id="myForm">
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Product Name</label>
				<input type="text" class="form-control" name="productname" id="productName">
				
			</div>
			<div class="mb-3 ">
				<label for="exampleInputEmail1" class="form-label">Brand Name</label>
				<input type="text" class="form-control" name="" id="brandname">
			</div>

			<div class="mb-3">
				<label class="form-label">Opening Stock</label>
				<input type="number" class="form-control" name="" id="openingstock">

			</div>
			<div class="mb-3 ">
				<label class="form-label">Available Stock</label>
				<input type="number" class="form-control" placeholder="" id="availablestock">
			</div>
			<div class="mb-3 ">
				<label class="form-label">Purchase Rate</label>
				<input type="number" class="form-control" placeholder="" id="purchaserate">
			</div>
			<div class="mb-3 ">
				<label class="form-label">Sales Rate</label>
				<input type="number" class="form-control" placeholder="" name="" id="salesrate">
			</div>

			<!-- <input class="btn btn-primary" name="upload" type="button" id="add" value="Add" ="additem()"></input> -->
			<button type="button" onclick="additem(event)" class="btn btn-primary">Add</button>
		</form>
	</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
	$(document).ready(function() {
		// alert('hii');
	});

	function additem(event) {
		event.preventDefault();
		// var itemname = $('#iname').val();
		// var itemCode = $('#icode').val();
		// var itemhsn = $('#ihsncode').val();
		// var itemUname = $('#UName').val();	
		// var itemTaxId = $('#TaxGId').val();
		// var itemPurRate = $('#PurRate').val();
		// var itemSalesRate = $('#SalesRate').val();
		var productName = $('#productName').val();
		var brandname = $('#brandname').val();
		var openingstock = $('#openingstock').val();
		var availablestock = $('#availablestock').val();
		var purchaserate = $('#purchaserate').val();
		var salesrate = $('#salesrate').val();


		if (productName == "") {
			alert('Please Enter Product Name');
		} else if (brandname == 0) {
			alert('Please Enter Brand Name');
		} else if (openingstock == 0) {
			alert('Please Enter Opening Stock');
		} else if (availablestock == "") {
			alert('Please Enter Available Stock');
		} else if (purchaserate == "") {
			alert('Please Enter Purchase Rate');
		} else if (salesrate == "") {
			alert('Please Enter Sales Rate');
		} else {


			// console.log("oo");

			$.ajax({
				url: "ajaxbackend.php",
				type: "POST",
				data: {
					// data from file : data to file 
					productName,
					brandname,
					openingstock,
					availablestock,
					purchaserate,
					salesrate
				},
				success: function(data) {
					console.log(data);
					$('#myForm')[0].reset();

					// Show SweetAlert notification
					Swal.fire({
						title: 'Success',
						text: 'Data inserted successfully!',
						icon: 'success'
					});
				},
			});
		}
	}

	// alert(itemname+" "+itemCode+" "+itemhsn+" "+itemUname+" "+itemTaxId+" "+itemPurRate+" "+itemSalesRate);
</script>