<?php include('./header.php');


$query1 = "SELECT * FROM productmaster";
$result1 = mysqli_query($con, $query1);

$query2 = "SELECT * FROM clientmaster";
$result2 = mysqli_query($con, $query2);

$query3 = "SELECT * FROM inventorystk";
$result3 = mysqli_query($con, $query3);

?>

<div class="card mt-3">
	<div class="card-body">
	  <h5 class="card-title fw-semibold mb-4 text-center text-primary">Sales Form</h5>
	  <hr>

	  <form action="" id="myForm">
			<div class="row">
				
				<div class="mb-2 col-6 col-md-4 col-lg-4 col-xs-4">
						<label for="exampleInputEmail1" class="form-label">Client Name :</label>
						<!-- <input type="text" class="form-control" id="vendorName" name="vendorName">		 -->

						<select name="clientName" class="form-control" id="selectInput">
							<option value="">----- Select Client -----</option>
							<?php
							while ($row = mysqli_fetch_array($result2)) {
							?>
								<option value="<?php echo ($row['clientid']); ?>"><?php echo ($row['clientname']); ?></option>
							<?php } ?>
						</select>
					</div>

					<div class="mb-2 col-6 col-md-4 col-lg-4 col-xs-4">
						<label for="exampleInputEmail1" class="form-label">Address :</label>
						<input type="text" class="form-control" id="address" name="address">				
					</div>

					<div class="mb-2 col-6 col-md-2 col-lg-2 col-xs-2">					
						<label class="form-label" style="text-align:right;">Contact :</label>
						<input type="number" class="form-control" name="" id="contact">							
					</div>

					<div class="mb-2 col-6 col-md-2 col-lg-2 col-xs-2">					
						<label class="form-label" style="text-align:right;">Date :</label>
						<input type="date" class="form-control" name="date" id="date"> 				
					</div>

				</div>
			</div>
    <!-- </div> -->
 <!-- </div> -->

			<div class="card shadow p-2">
				<div class="card-body shadow">
					<!-- <h5 class="card-title fw-semibold mb-4 text-center text-primary">Sales Form</h5> -->
					<!-- <hr> -->

					<div class="row">
						<div class="mb-2 col-6 col-md-5 col-lg-5 col-xs-5">	

							<label class="form-label">Product Name</label>
							<!-- <input type="text" class="form-control" placeholder="" name="productName" id="productName"> -->
							<select name="category" class="form-control" id="category">
								<option value="">----- Select Product -----</option>
								<?php
								while ($row = mysqli_fetch_array($result1)) {
								?>
									<option value="<?php echo ($row['productid']); ?>"><?php echo ($row['productname']); ?></option>
									<?php } ?>
							</select>
						</div>

						<div class="mb-2 col-6 col-md-4 col-lg-4 col-xs-4">

							<label for="exampleInputEmail1" class="form-label">IMEI Number</label>
							<select id="subcategory" name="subcategory">
								
							</select>
							
						</div>
					
						<div class="mb-2 col-6 col-md-3 col-lg-3 col-xs-3">					
							<label class="form-label" style="text-align:right;">Activated Date :</label>
							<input type="date" class="form-control" name="salesDate" id="salesDate">							
						</div>
					</div>			

					<div class="row">

						<div class="mb-2 col-6 col-md-3 col-lg-3 col-xs-3">
							<label class="form-label">Serial / CCID Number</label>
							<input type="number" class="form-control" name="" id="serialNumber">
						</div>

						<div class="mb-2 col-6 col-md-3 col-lg-3 col-xs-3">
							<label class="form-label">Sim No - 1</label>
							<input type="number" class="form-control" placeholder="" id="simno1">
						</div>

						<!-- <div class="mb-3 col-2"></div> -->

						<div class="mb-2 col-6 col-md-3 col-lg-3 col-xs-3">
							<label class="form-label">Sim No - 2</label>
							<input type="number" class="form-control" placeholder="" id="simno2">
						</div>

						<div class="mb-2 col-2 col-md-1 col-lg-1 col-xs-1 mt-4">
							<!-- <button type="submit" class="btn btn-primary" name="add">Add</button> -->
						</div>

						<div class="mb-2 col-2 col-md-1 col-lg-1 col-xs-1 mt-4">
							<button type="submit" class="btn btn-primary" name="add">Add</button>
						</div>

						<div class="mb-2 col-2 col-md-1 col-lg-1 col-xs-1 mt-4">
							<!-- <button type="submit" class="btn btn-primary" name="add">Add</button> -->
						</div>

					</div>			
				</div>
			</div>
       </form>
    </div>
 </div>



	<div class="card mt-2">
		<div class="card-body">
			<h5 class="card-title fw-semibold text-center text-primary">View Purchase</h5>
		</div>
		<div class="card-body" style="margin-top: -65px;">
			<div class="table-responsive text-nowrap card-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Client Name</th>
							<th>Product Name</th>
							<th>IMEI Number</th>
							<th>CCID Number</th>
							<th>Sim 1</th>
							<th>Sim 2</th>
							<!-- <th>Quantity</th>
							<th>Amount</th>
							<th>Payment Type</th> -->
							<th>Action</th>
							
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>Client Name 1</th>
							<th>Product Name 1</th>
							<th>441863358333175</th>
							<th>441863358333175</th>
							<th>8989898989</th>
							<th>8989898989</th>
							<!-- <th>12</th>
							<th>40000</th>
							<th>Cash</th> -->
							<th><button class="btn btn-warning btn-sm">Edit</button><button class="btn btn-danger btn-sm ml-2">x</button></th>
						</tr>
						<tr>
							<th>Client Name 2</th>
							<th>Product Name 2</th>
							<th>441863358333175</th>
							<th>441863358333175</th>
							<th>8989898989</th>
							<th>8989898989</th>
							<!-- <th>12</th>
							<th>40000</th>
							<th>Cash</th> -->
							<th><button class="btn btn-warning btn-sm">Edit</button><button class="btn btn-danger btn-sm ml-2">x</button></th>
						</tr>
						<tr>
							<th>Client Name 3</th>
							<th>Product Name 3</th>
							<th>441863358333175</th>
							<th>441863358333175</th>
							<th>8989898989</th>
							<th>8989898989</th>
							<!-- <th>12</th>
							<th>40000</th>
							<th>Cash</th> -->
							<th><button class="btn btn-warning btn-sm">Edit</button><button class="btn btn-danger btn-sm ml-2">x</button></th>
						</tr>
						<tr>
							<th>Client Name 4</th>
							<th>Product Name 4</th>
							<th>441863358333175</th>
							<th>441863358333175</th>
							<th>8989898989</th>
							<th>8989898989</th>
							<!-- <th>12</th>
							<th>40000</th>
							<th>Cash</th> -->
							<th><button class="btn btn-warning btn-sm">Edit</button><button class="btn btn-danger btn-sm ml-2">x</button></th>
						</tr>
					</tbody>
				</table>
			</div>
		<!-- </div> -->

	
        <div class="row">

		    <div class="mb-2 col-6 col-md-3 col-lg-3 col-xs-3">
				<!-- <button type="submit" class="btn btn-primary" name="add">Add</button> -->
			</div>

			<div class="mb-2 col-6 col-md-3 col-lg-3 col-xs-3">
				<!-- <button type="submit" class="btn btn-primary" name="add">Add</button> -->
			</div>

			<div class="mb-2 col-6 col-md-3 col-lg-3 col-xs-3">
				<label class="form-label">Total Quantity</label>
				<input type="number" class="form-control" placeholder="" id="totQty">
			</div>

			<div class="mb-2 col-2 col-md-1 col-lg-1 col-xs-1"></div>

		    <div class="mb-2 col-2 col-md-1 col-lg-1 col-xs-1 mt-4">
				<button type="submit" class="btn btn-primary" name="add">Save</button>
			</div>

			<div class="mb-2 col-2 col-md-1 col-lg-1 col-xs-1"></div>

		</div>

	</div>

</div>



<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- <input type="date" id="date" name="date"> -->
<!-- <script>
	$(document).ready(function() {
		// alert('hii');
	});

	function addPurchase(event) {
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
<script>
    $('#date').val(new Date().toJSON().slice(0,10));
</script>

<script>
    $('#salesDate').val(new Date().toJSON().slice(0,10));
</script>


    <!-- Client Data Show -->

<!-- <script>
$(document).ready(function() {
    $('#selectInput').change(function() {
        var selectedId = $(this).val();
        console.log(selectedId);

        if (selectedId !== "") {
            $.ajax({
                url: 'sales_SelectData.php',
                type: 'POST',
                data: {
                    id: selectedId
                },
                success: function(response) {
                    var values = JSON.parse(response);
                    $('#address').val(values.address);
                    $('#contact').val(values.contact);
                }
            });
        } else {
            $('#address').val('');
            $('#contact').val('');
        }
    });
});
</script> -->


<!-- Product Data Show -->

<!-- <script>
$(document).ready(function() {
    $('#selectInput1').change(function() {
        var selectedId1 = $(this).val();
        console.log(selectedId1);

        if (selectedId1 !== "") {
            $.ajax({
                url: 'TestSales.php',
                type: 'POST',
                data: {
                    id: selectedId1
                },
                success: function(response) {
                    var values = JSON.parse(response);
                    $('#imeiNo').val(values.imeiNo);
                    // $('#contact').val(values.contact);
                }
            });
        } else {
            $('#imeiNo').val('');
            // $('#contact').val('');
        }
    });
});
</script> -->


<!-- <script>
$(document).ready(function() {
    $('#selectInput').change(function() {
        var selectedId = $(this).val();
        console.log(selectedId);

        if (selectedId !== "") {
            $.ajax({
                url: 'test.php',
                type: 'POST',
                data: {
                    id: selectedId
                },
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
</script> -->


<script>
    document.getElementById('category').addEventListener('change', function() {
        var categoryId = this.value;
		console.log(categoryId);
        var subcategoryDropdown = document.getElementById('subcategory');

        // Clear the existing options
        subcategoryDropdown.innerHTML = '<option value="">Select a IMEI</option>';

        if (categoryId === '') {
            return;
        }

        // Make an AJAX request to get subcategories based on the selected category
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    var subcategories = JSON.parse(xhr.responseText);
                    subcategories.forEach(function(subcategory) {
                        var option = document.createElement('option');
                        option.value = subcategory.ProductId;
                        option.textContent = subcategory.IMEINo;
                        subcategoryDropdown.appendChild(option);
                    });
                } else {
                    console.error('Request failed: ' + xhr.status);
                }
            }
        };

        xhr.open('GET', 'ok.php?category_id=' + categoryId, true);
        xhr.send();
    });
    </script>