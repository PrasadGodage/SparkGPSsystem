<?php include('./header.php'); ?>

<div class="card">
	<div class="card-body">
		<h5 class="card-title fw-semibold mb-4 text-center text-primary">CLIENT MASTER</h5>
		<hr>


		<form action="" method="POST" enctype="multipart/form-data">
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Client Name</label>
				<input type="text" class="form-control" name="clientname" id="clientname">

			</div>
			<div class="mb-3 ">
				<label for="exampleInputEmail1" class="form-label">GSTIN</label>
				<input type="text" class="form-control" name="" id="gstin">

			</div>
			<div class="mb-3">
				<label class="form-label">Address</label>
				<input type="text" class="form-control" name="" id="address">

			</div>
			<div class="mb-3 ">
				<label class="form-label">Email</label>
				<input type="email" class="form-control" placeholder="" id="email">
			</div>
			<div class="mb-3 ">
				<label class="form-label">Contact</label>
				<input type="number" class="form-control" placeholder="" id="contact">
			</div>
			<div class="mb-3 ">
				<label class="form-label">Opening Outstanding</label>
				<input type="number" class="form-control" placeholder="" name="" id="openingoutstanding">
			</div>
			<div class="mb-3 ">
				<label class="form-label">Outstanding</label>
				<input type="number" class="form-control" placeholder="" name="" id="outstanding">
			</div>
			<div class="mb-3 ">
				<label class="form-label">Client Type</label>
				<input type="number" class="form-control" placeholder="" name="" id="clienttype">
			</div>
			<div class="mb-3 ">
				<label class="form-label">Status</label>
				<input type="text" class="form-control" placeholder="" name="" id="status">
			</div>

			<!-- <input class="btn btn-primary" name="upload" type="button" id="add" value="Add" ="additem()"></input> -->
			<button type="button" onclick="additem()" class="btn btn-primary" >Add</button>
		</form>
	</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>

	
	function additem() {
		// var itemname = $('#iname').val();
		// var itemCode = $('#icode').val();
		// var itemhsn = $('#ihsncode').val();
		// var itemUname = $('#UName').val();
		// var itemTaxId = $('#TaxGId').val();
		// var itemPurRate = $('#PurRate').val();
		// var itemSalesRate = $('#SalesRate').val();
		var productName =  $('#productName').val(); 
		var brandname =  $('#brandname').val(); 
		var openingstock =  $('#openingstock').val(); 
		var availablestock =  $('#availablestock').val(); 
		var purchaserate =  $('#purchaserate').val(); 
		var salesrate =  $('#salesrate').val(); 
		

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
					if (data == "Inserted") {
						// $('#iname').val("");
						// $('#icode').val("");
						// $('#ihsncode').val("");
						// $('#UName').val("0");
						// $('#TaxGId').val("0");
						// $('#PurRate').val("");
						// $('#SalesRate').val("");
						$('#productName').val(); 
						$('#brandname').val(); 
						$('#openingstock').val(); 
						$('#availablestock').val(); 
						$('#purchaserate').val(); 
						$('#salesrate').val();
						getrecord();
						message();

					}
				},
			});
		}
    }


		
		Swal.fire(
				'Good job!',
				'You clicked the button!',
				'success'
				)

		// alert(itemname+" "+itemCode+" "+itemhsn+" "+itemUname+" "+itemTaxId+" "+itemPurRate+" "+itemSalesRate);
		
</script>