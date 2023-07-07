<?php include('./header.php'); ?>

<div class="card">
	<div class="card-body">
		<h5 class="card-title fw-semibold mb-4 text-center text-primary">CLIENT MASTER</h5>
		<hr>


		<form action="" method="POST" enctype="multipart/form-data" id="myForm">
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Client Name</label>
				<input type="text" class="form-control" name="clientname" id="clientname">

			</div>
			<div class="mb-3 ">
				<label for="exampleInputEmail1" class="form-label">GSTIn</label>
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
		var clientname =  $('#clientname').val(); 
		var gstin =  $('#gstin').val(); 
		var address =  $('#address').val(); 
		var email =  $('#email').val(); 
		var contact =  $('#contact').val(); 
		var openingoutstanding =  $('#openingoutstanding').val(); 
		var outstanding =  $('#outstanding').val(); 
		var clienttype =  $('#clienttype').val(); 
		var status =  $('#status').val();
		

		if (clientname == "") {
			alert('Please Enter Client Name');
		} else if (gstin == 0) {
			alert('Please Enter GST In');
		} else if (address == 0) {
			alert('Please Enter Address');
		} else if (email == "") {
			alert('Please Enter Email');
		} else if (contact == "") {
			alert('Please Enter Contact');
		} else if (openingoutstanding == "") {
			alert('Please Enter Opening Outstanding');
		} else if (outstanding == "") {
			alert('Please Enter Outstanding');
		} else if (clienttype == "") {
			alert('Please Enter Client Type');
		} else if (status == "") {
			alert('Please Enter Status');
		} else {


			// console.log("oo");

			$.ajax({
				url: "ajaxbackend.php",
				type: "POST",
				data: {
					// data from file : data to file 
					clientname,
					gstin,
					address,
					email,
					contact,
					openingoutstanding,
					outstanding,
					clienttype,
					status

				},
				success: function(data) {
						console.log(data);
						$('#myForm')[0].reset();

						// Show SweetAlert notification
						Swal.fire({
							title: 'Success',
							text: 'Client Data inserted successfully!',
							icon: 'success'
						});

						// $('#iname').val("");
						// $('#icode').val("");
						// $('#ihsncode').val("");
						// $('#UName').val("0");
						// $('#TaxGId').val("0");
						// $('#PurRate').val("");
						// $('#SalesRate').val("");
						// $('#productName').val(); 
						// $('#brandname').val(); 
						// $('#openingstock').val(); 
						// $('#availablestock').val(); 
						// $('#purchaserate').val(); 
						// $('#salesrate').val();
						// getrecord();
						// message();

					},
			});
	}
}
		
</script>