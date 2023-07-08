<?php include('./header.php'); ?>

<div class="card">
	<div class="card-body">
		<h5 class="card-title fw-semibold mb-4 text-center text-primary">VENDOR MASTER</h5>
		<hr>


		<form action="./add_Product_Backend.php" method="POST" enctype="multipart/form-data" id="myForm">
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Vendor Name</label>
				<input type="text" class="form-control" name="vendorname" id="vendorname">

			</div>
			<div class="mb-3 ">
				<label for="exampleInputEmail1" class="form-label">GST In</label>
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
				<label class="form-label">Contact Firm</label>
				<input type="number" class="form-control" placeholder="" id="contactfirm">
			</div>
			<div class="mb-3 ">
				<label class="form-label">Contact Sales</label>
				<input type="number" class="form-control" placeholder="" name="" id="contactsales">
			</div>
			<div class="mb-3 ">
				<label class="form-label">Contact Technical</label>
				<input type="number" class="form-control" placeholder="" name="" id="contacttechnical">
			</div>

			<!-- <input class="btn btn-primary" name="upload" type="submit" id="add"="Add"></input> -->
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

		var vendorname = $('#vendorname').val();
		var gstin = $('#gstin').val();
		var address = $('#address').val();
		var email = $('#email').val();
		var contactfirm = $('#contactfirm').val();
		var contactsales = $('#contactsales').val();
		var contacttechnical = $('#contacttechnical').val();
		

		if (vendorname == "") {
			alert('Please Enter Vendor Name');
		} else if (gstin == 0) {
			alert('Please Select Unit From List');
		} else if (address == 0) {
			alert('Please Enter Address');
		} else if (email == "") {
			alert('Please Enter Email');
		} else if (contactfirm == "") {
			alert('Please Enter Contact Firm');
		} else if (contactsales == "") {
			alert('Please Enter Contact Sales');
		} else if (contacttechnical == "") {
			alert('Please Enter Contact Tachnical');
		} else {


			// console.log("oo");

			$.ajax({
				url: "ajaxbackend.php",
				type: "POST",
				data: {
					// data from file : data to file 
					// itemname: itemname,
					// itemCode: itemCode,
					// itemhsn: itemhsn,
					// itemUname: itemUname,
					// itemTaxId: itemTaxId,
					// itemPurRate: itemPurRate,
					// itemSalesRate: itemSalesRate

					vendorname,
					gstin,
					address,
					email,
					contactfirm,
					contactsales,
					contacttechnical
				},
				success: function(data) {
						console.log(data);
						$('#myForm')[0].reset();

						// Show SweetAlert notification
						Swal.fire({
							title: 'Success',
							text: 'Vendor Data inserted successfully!',
							icon: 'success'
						});
						// $('#iname').val("");
						// $('#icode').val("");
						// $('#ihsncode').val("");
						// $('#UName').val("0");
						// $('#TaxGId').val("0");
						// $('#PurRate').val("");
						// $('#SalesRate').val("");

						// $('#vendername').val("");
						// $('#gstin').val("");
						// $('#address').val("");
						// $('#email').val("0");
						// $('#contactfirm').val("0");
						// $('#contactsales').val("");
						// $('#contacttechnical').val("");
						// getrecord();
						// message();
					},
			});
	}
}


		// alert(itemname+" "+itemCode+" "+itemhsn+" "+itemUname+" "+itemTaxId+" "+itemPurRate+" "+itemSalesRate);
	// }

	// function message() {
	// 		Swal.fire(
	// 			'Good job!',
	// 			'You clicked the button!',
	// 			'success'
	// 			)
	// 	}
		
</script>