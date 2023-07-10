<?php include('./header.php');


$query1 = "SELECT * FROM productmaster";
$result1 = mysqli_query($con, $query1);

$query2 = "SELECT * FROM vendermaster";
$result2 = mysqli_query($con, $query2);

?>

<div class="card">
	<div class="card-body">
		<h5 class="card-title fw-semibold mb-4 text-center text-primary">Purchase Form</h5>
		<hr>


		<form action="" method="POST" enctype="multipart/form-data" id="myForm">
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Vendor Name</label>
				<input type="text" class="form-control" id="vendorName" name="vendorName">
				
			</div>



			<div class="mb-3">
				<label class="form-label">Product Name</label>
				<input type="text" class="form-control" placeholder="" name="productName" id="productName">
			</div>
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">IMEI Number</label>
				<input type="number" class="form-control" name="" id="imeiNumber">
			</div>

			<div class="mb-3">
				<label class="form-label">Serial / CCID Number</label>
				<input type="number" class="form-control" name="" id="serialNumber">
			</div>

			<div class="mb-3">
				<label class="form-label">Sim No - 1</label>
				<input type="number" class="form-control" placeholder="" id="simno1">
			</div>


			<div class="mb-3">
				<label class="form-label">Sim No - 2</label>
				<input type="number" class="form-control" placeholder="" id="simno2">
			</div>

			<!-- <input class="btn btn-primary" name="upload" type="button" id="add" value="Add" ="additem()"></input> -->
			<button type="button" onclick="addPurchase(event)" class="btn btn-primary">Add</button>
		</form>
	</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
	$(document).ready(function() {
		// alert('hii');
	});

	function addPurchase(event) {
		event.preventDefault();
		
		var vendorName = $('#vendorName').val();
		var productName = $('#productName').val();
		var imeiNumber = $('#imeiNumber').val();
		var serialNumber = $('#serialNumber').val();
		var simno1 = $('#simno1').val();
		var simno2 = $('#simno2').val();


		if (productName == "") {
			alert('Please Enter Product Name');
		} else if (vendorName == 0) {
			alert('Please Enter Vendor Name');
		} else if (imeiNumber == 0) {
			alert('Please Enter IMEI Stock');
		} else if (serialNumber == "") {
			alert('Please Enter Serial Stock');
		} else if (simno1 == "") {
			alert('Please Enter Sim no 1');
		} else if (simno2 == "") {
			alert('Please Enter Sim no 2');
		} else {
			$.ajax({
				url: "ajaxbackend.php",
				type: "POST",
				data: {
					// data from file : data to file 
					productName,
					vendorName,
					imeiNumber,
					serialNumber,
					simno1,
					simno2
				},
				success: function(data) {
					// console.log(data);

					$('#myForm')[0].reset();

					// Show SweetAlert notification
					Swal.fire({
						title: 'Success',
						text: 'Purchase Entry successfully!',
						icon: 'success'
					});
					// } else {
					// 	Swal.fire({
					// 		title: 'Error',
					// 		text: 'Entry Error',
					// 		icon: 'Error'
					// 	});

					// }
					// 	// $('#iname').val("");
					// 	// $('#icode').val("");
					// 	// $('#ihsncode').val("");
					// 	// $('#UName').val("0");
					// 	// $('#TaxGId').val("0");
					// 	// $('#PurRate').val("");
					// 	// $('#SalesRate').val("");

					// 	Swal.fire(
					// 		'Good job!',
					// 		'You clicked the button!',
					// 		'success'
					// 	
				},
			});
		}
	}

	// alert(itemname+" "+itemCode+" "+itemhsn+" "+itemUname+" "+itemTaxId+" "+itemPurRate+" "+itemSalesRate);
</script>