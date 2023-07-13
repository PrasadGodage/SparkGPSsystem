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



		<div class="row">
			<div class="mb-3 col-5">
				<label for="exampleInputEmail1" class="form-label">Vendor Name</label>
				<!-- <input type="text" class="form-control" id="vendorName" name="vendorName">		 -->
				<select name="vendorName" class="form-control" id="selectInput">
					<option value="">----- Select Vendor -----</option>
					<?php
					while ($row = mysqli_fetch_array($result2)) {
					?>
						<option value="<?php echo ($row['venderid']); ?>"><?php echo ($row['vendername']); ?></option>
					<?php } ?>
				</select>
			</div>
			<div class="mb-3 col-3" id="additionalInputs">
				<label for="exampleInputEmail1" class="form-label">GST IN</label>
				<input type="text" class="form-control" id="input1">
			</div>
			<div class="mb-3 col-2" id="additionalInputs">
				<label class="form-label">Contact Sales</label>
				<input type="number" class="form-control" placeholder="" name="productName" id="input2">
			</div>
			<div class="mb-3 col-2" id="additionalInputs">
				<label class="form-label">Date</label>
				<input type="date" class="form-control">
			</div>
		</div>



		<!-- ============================ Second Card for Product ================================  -->
		<div class="card border p-3 mt-3">
			<div class="row">
				<div class="mb-3 col-4">
					<label class="form-label">Product Name</label>
					<!-- <input type="text" class="form-control" placeholder="" name="productName" id="productName"> -->
					<select name="productName" class="form-control">
						<option value="">----- Select Product -----</option>
						<?php
						while ($row = mysqli_fetch_array($result1)) {
						?>
							<option value="<?php echo ($row['productid']); ?>"><?php echo ($row['productname']); ?></option>
							<form action="ajaxbackend.php" method="POST" id="myForm">
							<?php } ?>
					</select>

				</div>
				<div class="mb-3 col-4">
					<label for="exampleInputEmail1" class="form-label">IMEI Number</label>
					<input type="number" class="form-control" name="" id="imeiNumber">
				</div>

				<div class="mb-3 col-4">
					<label class="form-label">Serial / CCID Number</label>
					<input type="number" class="form-control" name="" id="serialNumber">
				</div>
			</div>

			<div class="row">

				<div class="mb-3 col-4">
					<label class="form-label">Sim No - 1</label>
					<input type="number" class="form-control" placeholder="" id="simno1">
				</div>
				<div class="mb-3 col-4">
					<label class="form-label">Sim No - 2</label>
					<input type="number" class="form-control" placeholder="" id="simno2">
				</div>
				<div class="mb-3 col-2">
					<!-- <button class="">Add</button> -->
					<label for=""></label>
					<input type="text" class="btn btn-primary mt-1 form-control" value="Add">
				</div>
			</div>
		</div>
		</form>
	</div>
</div>

<div class="card mt-3">
	<div class="card-body">
		<h5 class="card-title fw-semibold text-center text-primary">View Purchase</h5>
	</div>
	<div class="card-body" style="margin-top: -65px;">
		<div class="table-responsive text-nowrap card-body">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Vendor Name</th>
						<th>Product Name</th>
						<th>IMEI Number</th>
						<th>CCID Number</th>
						<th>Sim 1</th>
						<th>Sim 2</th>
						<th>Amount</th>
						<th>Payment Type</th>
						<th>Action</th>

					</tr>
				</thead>
				<tbody class="data_table">
					<tr>
						<th>Vendor Name 1</th>
						<th>Product Name 1</th>
						<th>441863358333175</th>
						<th>441863358333175</th>
						<th>8989898989</th>
						<th>8989898989</th>
						<th>40000</th>
						<th>Cash</th>
						<th><button class="btn btn-warning btn-sm">Edit</button><button class="btn btn-danger btn-sm ml-2">x</button></th>
					</tr>
					<tr>
						<th>Vendor Name 1</th>
						<th>Product Name 1</th>
						<th>441863358333175</th>
						<th>441863358333175</th>
						<th>8989898989</th>
						<th>8989898989</th>
						<th>40000</th>
						<th>Cash</th>
						<th><button class="btn btn-warning btn-sm">Edit</button><button class="btn btn-danger btn-sm ml-2">x</button></th>
					</tr>
					<tr>
						<th>Vendor Name 1</th>
						<th>Product Name 1</th>
						<th>441863358333175</th>
						<th>441863358333175</th>
						<th>8989898989</th>
						<th>8989898989</th>
						<th>40000</th>
						<th>Cash</th>
						<th><button class="btn btn-warning btn-sm">Edit</button><button class="btn btn-danger btn-sm ml-2">x</button></th>
					</tr>
					<tr>
						<th>Vendor Name 1</th>
						<th>Product Name 1</th>
						<th>441863358333175</th>
						<th>441863358333175</th>
						<th>8989898989</th>
						<th>8989898989</th>
						<th>40000</th>
						<th>Cash</th>
						<th><button class="btn btn-warning btn-sm">Edit</button><button class="btn btn-danger btn-sm ml-2">x</button></th>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="row d-flex justify-content-center">
			<div class="col-3">
				<label for=""><strong> Total Bill Amount - </strong></label>
				<input type="disabled" value="4000" class="form-control">
			</div>
			<div class="col-3">
				<label for=""></label>	
				<button class="form-control btn-primary mt-2">Save Purchase</button>
			</div>				
		</div>
	</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- <script>
	$(document).ready(function() {
	// alert('hii');
	});

	function addView Purchaset) {
		event.preventDefault();

		var vendorName = $('#VendorName').val();
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
</script> -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('#selectInput').change(function() {
      var selectedId = $(this).val();
	  console.log(selectedId);

      if (selectedId !== "") {
        $.ajax({
          url: 'test.php',
          type: 'POST',
          data: { id: selectedId },
          success: function(response) {
            var values = JSON.parse(response);
            $('#input1').val(values.input1);
            $('#input2').val(values.input2);
          }
        });
      } else {
        $('#input1').val('');
        $('#input2').val('');
      }
    });
  });
</script>