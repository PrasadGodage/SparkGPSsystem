<?php include('./header.php');


$query1 = "SELECT * FROM `productmaster`";
$result1 = mysqli_query($con, $query1);

$query2 = "SELECT * FROM clientmaster";
$result2 = mysqli_query($con, $query2);

<<<<<<< Updated upstream
$query3 = "SELECT * FROM inventorystk";
$result3 = mysqli_query($con, $query3);

?>

<div class="card mt-3">
	<div class="card-body">
	  <h5 class="card-title fw-semibold mb-4 text-center text-primary">Sales Form</h5>
	  <hr>

	  <form action="" id="myForm">
			<div class="row">
				
				<div class="mb-2 col-6 col-md-4 col-lg-4 col-xs-4 input-group-sm">
=======
// $query3 = "SELECT `purchaseId`,`productName`,`IMEINo`,`sim1No`,`sim2No`,`serial/CCIDNo`,`activationDate` FROM `purchasemaster`";
// $result3 = mysqli_query($con, $query3);
// $result4 = mysqli_query($con, $query3);

?>

    <div class="card mt-3">
	    <div class="card-body">
				<h5 class="card-title fw-semibold mb-4 text-center text-primary">Sales Form</h5>
				<hr>


		<form action="" id="myForm">
		    <div class="row">			
					<div class="mb-2 col-6 col-md-4 col-lg-4 col-xs-4 input-group-sm">
>>>>>>> Stashed changes
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

<<<<<<< Updated upstream
					<div class="mb-2 col-6 col-md-4 col-lg-4 col-xs-4 input-group-sm">
=======
					<div class="mb-2 col-6 col-md-4 col-lg-4 col-xs-4 input-group-sm" id="additionalInputs">
>>>>>>> Stashed changes
						<label for="exampleInputEmail1" class="form-label">Address :</label>
						<input type="text" class="form-control" id="address" name="address">				
					</div>

<<<<<<< Updated upstream
					<div class="mb-2 col-6 col-md-2 col-lg-2 col-xs-2 input-group-sm">					
=======
					<div class="mb-2 col-6 col-md-2 col-lg-2 col-xs-2 input-group-sm" id="additionalInputs">					
>>>>>>> Stashed changes
						<label class="form-label" style="text-align:right;">Contact :</label>
						<input type="number" class="form-control" name="" id="contact">							
					</div>

<<<<<<< Updated upstream
					<div class="mb-2 col-6 col-md-2 col-lg-2 col-xs-2 input-group-sm">					
=======
					<div class="mb-2 col-6 col-md-2 col-lg-2 col-xs-2 input-group-sm" id="additionalInputs">					
>>>>>>> Stashed changes
						<label class="form-label" style="text-align:right;">Date :</label>
						<input type="date" class="form-control" name="date" id="date"> 				
					</div>

				</div>
			</div>
    <!-- </div> -->
 <!-- </div> -->

<<<<<<< Updated upstream
			<div class="card shadow p-2">
				<div class="card-body shadow">
					<!-- <h5 class="card-title fw-semibold mb-4 text-center text-primary">Sales Form</h5> -->
					<!-- <hr> -->
=======


		<div class="card shadow p-2">
			<div class="card-body shadow">					
>>>>>>> Stashed changes

					<div class="row">
						<div class="mb-2 col-6 col-md-5 col-lg-5 col-xs-5 input-group-sm">	

							<label class="form-label">Product Name</label>
							<!-- <input type="text" class="form-control" placeholder="" name="productName" id="productName"> -->
							<select name="category" class="form-control" id="category">
								<option value="">----- Select Product -----</option>
								<?php
<<<<<<< Updated upstream
								while ($row = mysqli_fetch_array($result1)) {
								?>
									<option value="<?php echo ($row['productid']); ?>"><?php echo ($row['productname']); ?></option>
=======
								// while ($row = mysqli_fetch_array($result3)) {
									while ($row = mysqli_fetch_array($result1)) {
								?>
									<option value="<?php echo ($row['productid']); ?>"><?php echo ($row['productname']); ?></option>									
									<!-- <form action="salesProductData.php" method="POST" id="myForm"> -->
>>>>>>> Stashed changes
									<?php } ?>
							</select>
						</div>

						<div class="mb-2 col-6 col-md-4 col-lg-4 col-xs-4 input-group-sm">
<<<<<<< Updated upstream

							<label for="exampleInputEmail1" class="form-label">IMEI Number</label>
							<!-- <input type="number" class="form-control" name="" id="imeiNo" readonly> -->
							<select id="subcategory" name="subcategory">
							<!-- <option value="">----- Select Product -----</option> -->
							</select>
						</div>
					
						<div class="mb-2 col-6 col-md-3 col-lg-3 col-xs-3 input-group-sm">					
=======
							<label for="exampleInputEmail1" class="form-label">IMEI Number</label>
							<!-- <input type="number" class="form-control" placeholder="" name="" id="imeiNo">	-->


							<select name="imeiNo" class="form-control" id="imeiNo">
							<option value="">----- Select Client -----</option>							
								<option value=""> </option>
							
						</select>


						</div>
					
						<div class="mb-2 col-6 col-md-3 col-lg-3 col-xs-3 input-group-sm">				
>>>>>>> Stashed changes
							<label class="form-label" style="text-align:right;">Activated Date :</label>
							<input type="date" class="form-control" name="salesDate" id="salesDate">							
						</div>
					</div>			

					<div class="row">

<<<<<<< Updated upstream
						<div class="mb-2 col-6 col-md-3 col-lg-3 col-xs-3 input-group-sm">
							<label class="form-label">Serial / CCID Number</label>
							<input type="number" class="form-control" name="" id="serialNumber">
						</div>

						<div class="mb-2 col-6 col-md-3 col-lg-3 col-xs-3 input-group-sm">
							<label class="form-label">Sim No - 1</label>
							<input type="number" class="form-control" placeholder="" id="simno1">
						</div>

						<!-- <div class="mb-3 col-2"></div> -->

						<div class="mb-2 col-6 col-md-3 col-lg-3 col-xs-3 input-group-sm">
							<label class="form-label">Sim No - 2</label>
							<input type="number" class="form-control" placeholder="" id="simno2">
						</div>

						<div class="mb-2 col-2 col-md-1 col-lg-1 col-xs-1 mt-4 input-group-sm">
							<!-- <button type="submit" class="btn btn-primary" name="add">Add</button> -->
						</div>
=======
							<div class="mb-2 col-6 col-md-3 col-lg-3 col-xs-3 input-group-sm">
								<label class="form-label">Serial / CCID Number</label>
								<input type="number" class="form-control" name="" id="serialNumber">
							</div>

							<div class="mb-2 col-6 col-md-3 col-lg-3 col-xs-3 input-group-sm">
								<label class="form-label">Sim No - 1</label>
								<input type="number" class="form-control" placeholder="" id="simno1">
							</div>						

							<div class="mb-2 col-6 col-md-3 col-lg-3 col-xs-3 input-group-sm">
								<label class="form-label">Sim No - 2</label>
								<input type="number" class="form-control" placeholder="" id="simno2">
							</div>

						    <div class="mb-2 col-2 col-md-1 col-lg-1 col-xs-1 mt-4 input-group-sm"></div>						
						 
							<div class="mb-2 col-2 col-md-1 col-lg-1 col-xs-1 input-group-sm">
								<!-- <button type="button" class="btn btn-primary" onclick="publishToTable()">Add</button> -->
								<label for=""></label>
                             <input type="Submit" class="btn btn-primary form-control" value="Add">
							</div>

						    <div class="mb-2 col-2 col-md-1 col-lg-1 col-xs-1 mt-4"></div>
						
					</div>

					<!-- <input class="btn btn-primary" name="upload" type="button" id="add" value="Add" ="additem()"></input> -->
		            </form>
			</div>
		</div>
	</div>
					<!-- </div> -->
>>>>>>> Stashed changes

						<div class="mb-2 col-2 col-md-1 col-lg-1 col-xs-1 mt-4 input-group-sm">
							<button type="submit" class="btn btn-primary" name="add">Add</button>
						</div>

						<div class="mb-2 col-2 col-md-1 col-lg-1 col-xs-1 mt-4 input-group-sm">
							<!-- <button type="submit" class="btn btn-primary" name="add">Add</button> -->
						</div>

					</div>			
				</div>
<<<<<<< Updated upstream
			</div>
       </form>
    </div>
 </div>



	<div class="card mt-2">
		<div class="card-body">
			<h5 class="card-title fw-semibold text-center text-primary">View Sales Details</h5>
		</div>
		<div class="card-body" style="margin-top: -65px;">
			<div class="table-responsive text-nowrap card-body">
				<table class="table table-bordered" id="dataTable">
                <thead>
                    <tr>
                        <th>Sr No</th>
                        <th>Vendor Name</th>
                        <th>Product Name</th>
                        <th>Activation Date</th>
                        <th>IMEI Number</th>
                        <th>CCID Number</th>
                        <th>Sim 1</th>
                        <th>Sim 2</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody class="data_table">


                </tbody>
            </table>
		</div>
		<!-- </div> -->

	
        <div class="row d-flex justify-content-center">

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

		    <div class="mb-2 col-2 col-md-1 col-lg-1 col-xs-1 mt-4 input-group-sm">
            <label for=""></label>
				<button type="button" class="btn btn-primary" name="add" onclick="insertData()">Save</button>
			</div>

			<div class="mb-2 col-2 col-md-1 col-lg-1 col-xs-1"></div>
          </form>
		</div>
=======
				<div class="card-body" style="margin-top: -65px;">
					<div class="table-responsive text-nowrap card-body">
						<table class="table table-bordered" id="dataTable">
							<thead>
								<tr>
									<th>Client Name</th>
									<th>Product Name</th>
									<th>Activation Date</th>
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
							<tbody class="data_table">
							<!--	<tr>
									<th>Client Name 1</th>
									<th>Product Name 1</th>
									<th>Activation Date</th>
									<th>441863358333175</th>
									<th>441863358333175</th>
									<th>8989898989</th>
									<th>8989898989</th>							
									<th><button class="btn btn-warning btn-sm">Edit</button><button class="btn btn-danger btn-sm ml-2">x</button></th>														
								</tr> -->
							</tbody>
						</table>
					</div>
				 <!-- </div> -->
				
					<div class="row d-flex justify-content-center mt-1">
						<form action="" method="post">
								<!-- <div class="mb-2 col-6 col-md-3 col-lg-3 col-xs-3 input-group-sm"></div>

								<div class="mb-2 col-6 col-md-3 col-lg-3 col-xs-3 input-group-sm"></div> -->

								<div class="mb-2 col-6 col-md-3 col-lg-3 col-xs-3 input-group-sm">
									<label for="" class="form-label">Total Quantity</label>
									<input type="number" class="form-control" placeholder="" id="totQty">
								</div>

								<!-- <div class="mb-2 col-2 col-md-1 col-lg-1 col-xs-1 input-group-sm"></div> -->

								<div class="mb-2 col-2 col-md-1 col-lg-1 col-xs-1 input-group-sm">
									<!-- <button type="submit" class="btn btn-primary" name="add">Save</button> -->
									<input type="button" class="form-control btn-primary" name="insertForm" value="Save"
										onclick="insertHandle()">
								</div>

								<!-- <div class="mb-2 col-2 col-md-1 col-lg-1 col-xs-1 input-group-sm"></div>						    -->
						</form>
					</div>
			    </div>
			</div>
	<!-- </div> -->
>>>>>>> Stashed changes


	<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.js"
    integrity="sha512-RjvSEaeDqPCfUVQ9kna2/2OqHz/7F04IOl1/66LmQjB/lOeAzwq7LrbTzDbz5cJzlPNJ5qteNtHR56XaJSTNWw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
function insertHandle() {
    // Retrieve data from local storage
    var localStorageData = localStorage.getItem('formData'); // Replace 'your_key' with the key used to store the data

    // Send data to PHP script
    axios.post('purchaseBackend.php', {
            data: localStorageData
        })
        .then(function(response) {
            console.log('Data inserted successfully');
        })
        .catch(function(error) {
            console.error('Error inserting data:', error);
        });
	}
</script>

</div>



<<<<<<< Updated upstream
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
=======
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!--<script>
	$(document).ready(function() {
		// alert('hii');
	});

	function addSalesData(event) {
		event.preventDefault();

		var vendorName = $('#clientName').val();
		var productName = $('#productName').val();
		var imeiNumber = $('#imeiNumber').val();
		var activationDate = $('#activationDate').val();
		var serialNumber = $('#serialNumber').val();
		var simno1 = $('#simno1').val();
		var simno2 = $('#simno2').val();

		if (clientName == 0) {
			alert('Please Enter Client Name');		
		} else if (productName == "") {
			alert('Please Enter Product Name');
		// } else if (imeiNumber == 0) {
		// 	alert('Please Enter IMEI Stock');
		// } else if (activationDate == 0) {
		// 	alert('Please Enter IMEI Stock');
		// } else if (serialNumber == "") {
		// 	alert('Please Enter Serial Stock');
		// } else if (simno1 == "") {
		// 	alert('Please Enter Sim no 1');
		// } else if (simno2 == "") {
		// 	alert('Please Enter Sim no 2');
		} else {
			$.ajax({
				url: "ajaxbackend.php",
				type: "POST",
				data: {
					// data from file : data to file 
					clientName,
					productName,
					imeiNumber,
					activationDate,
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
						text: 'Sales Entry successfully!',
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

>>>>>>> Stashed changes
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- <input type="date" id="date" name="date"> -->
<script>
    $('#date').val(new Date().toJSON().slice(0,10));
</script>

<script>
    $('#salesDate').val(new Date().toJSON().slice(0,10));
</script>


    <!-- Client Data Show -->

<script>
$(document).ready(function() {
    $('#selectInput').change(function() {
        var selectedId = $(this).val();
        console.log(selectedId);

<<<<<<< Updated upstream
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
=======
      if (selectedId !== "") {
        $.ajax({
          url: 'sales_SelectData.php',
          type: 'POST',
          data: { id: selectedId },
          success: function(response) {
            var values = JSON.parse(response);
            $('#address').val(values.address);
            $('#contact').val(values.contact);
			console.log(response);
          }
        });
      } else {
        $('#address').val('');
        $('#contact').val('');
      }
>>>>>>> Stashed changes
    });
});
</script>


<<<<<<< Updated upstream
<!-- Product Data Show -->

<script>
    document.getElementById('category').addEventListener('change', function() {
        var categoryId = this.value;
		console.log(categoryId);
        var subcategoryDropdown = document.getElementById('subcategory');
=======
   <!-- dropdown Enable To select productname -->
<script>
		$(document).ready(function() {
			$("#selectInput1").click(function() {
			if ($(this).is(":checked")) {
				$("#selectInput2").prop("disabled", true);
			} else {
				$("#selectInput2").prop("disabled", false);  
			}
		});
	});
</script>


  <!-- Show Data Product Name To IMEI NO -->

<!-- <script>
  $(document).ready(function() {
    $('#selectInput1').change(function() {
      var selectedId1 = $(this).val();
	  console.log(selectedId1);

      if (selectedId1 !== "") {
        $.ajax({
          url: 'TestSales.php',
          type: 'POST',
          data: { id: selectedId1 },
          success: function(response) {
            var values = JSON.parse(response);
            $('#imeiNo').val(values.selectInput2);          
          }
        });
      } else {
        $('#imeiNo').val('');
      }
    });
  });
</script> -->




<script>
  $(document).ready(function() {
    $('#selectInput1').change(function() {
      var selectedId1 = $(this).val();
	  console.log(selectedId1);

      if (selectedId1 !== "") {
        $.ajax({
          url: 'TestSales.php',
          type: 'POST',
          data: { id: selectedId1 },
          success: function(response) {
            var values = JSON.parse(response);
            $('#imeiNo').val(values.imeiNo)
			console.log(response);
          }
        });
      } else {
		$('#imeiNo').val('');
      }
    });
  });
</script>

   <!-- Show data IMEI No -->

<!-- <script>
  $(document).ready(function() {
    $('#selectInput2').change(function() {
      var selectedId2 = $(this).val();
	  console.log(selectedId2);
>>>>>>> Stashed changes

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
<<<<<<< Updated upstream
    </script>

<script>
$(document).ready(function() {
    $('#subcategory').change(function() {
        var selectedId2 = $(this).val();
        console.log(selectedId2);

        if (selectedId2 !== "") {
            $.ajax({
                url: 'salesProductData.php',
                type: 'POST',
                data: {
                    id: selectedId2
                },
                success: function(response) {
                    var values = JSON.parse(response);
                    $('#salesDate').val(values.salesDate);
                    $('#serialNumber').val(values.serialNumber);
					$('#simno1').val(values.simno1);
					$('#simno2').val(values.simno2);
                }
            });
        } else {
            $('#salesDate').val('');
            $('#serialNumber').val('');
			$('#simno1').val('');
			$('#simno2').val('');
        }
    });
});
</script>

<script>
function insertData() {

    var savedData = JSON.parse(localStorage.getItem('formData')) || [];

    // Send the data to a PHP script for insertion into MySQL
    $.ajax({
        url: 'purchaseBackend.php',
        type: 'POST',
        data: {
            data: savedData
        },
        success: function(response) {
            alert(response);
            // localStorage.removeItem('formData');

        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    });
}
</script>

<script>
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
</script>


<script>
$(document).ready(function() {
    // Handle form submission
    $('#myForm').submit(function(e) {
        e.preventDefault();

        // Get form values
        var selectInput = $('#selectInput option:selected').text().trim();
        var clientId = $('#selectInput').val();
        // $("#yourdropdownid option:selected").text();
        // var input1 = $('#input1 option:selected').text();
        var contact = $('#contact').val();
        var category = $('#category option:selected').text().trim();
        var productId = $('#category').val();
        var subcategory = $('#subcategory').val();
        var serialNumber = $('#serialNumber').val();
        var simno1 = $('#simno1').val();
        var simno2 = $('#simno2').val();

        var salesDate = $('#salesDate').val();
        var num = 1;

        console.log(selectInput);
        // Create an object to store the form data
        var formData = {
            num,
            selectInput,
            clientId,
            productId,
            // input1,
            contact,
            category,
            subcategory,
            serialNumber,
            simno1,
            simno2,
            salesDate
        };

        // Get existing data from local storage or initialize an empty array
        var existingData = JSON.parse(localStorage.getItem('formData')) || [];

        // Add new form data to the existing data array
        existingData.push(formData);

        // Store the updated data in local storage
        localStorage.setItem('formData', JSON.stringify(existingData));

        // Clear form inputs
        $('#myForm')[0].reset();

        // Refresh the table to display the updated data
        refreshTable();
    });

    // Function to refresh the table with the stored data
    function refreshTable() {
        // Clear the existing table content
        $('#dataTable tbody').empty();

        // Retrieve the data from local storage
        var storedData = JSON.parse(localStorage.getItem('formData'));
        console.log(storedData);

        // Populate the table with the stored data
        if (storedData) {
            var amo = 0;
            storedData.forEach(function(data, index) {
                var row = '<tr>' +
                    '<td>' + (index + 1) + '</td>' +
                    '<td>' + data.selectInput + '</td>' +
                    '<td>' + data.productname + '</td>' +
                    '<td>' + data.activationdate + '</td>' +
                    '<td>' + data.imeiNumber + '</td>' +
                    '<td>' + data.serialNumber + '</td>' +
                    '<td>' + data.simno1 + '</td>' +
                    '<td>' + data.simno2 + '</td>' +
                    '<td class="">' +
                    '<button class="btn btn-primary btn-sm editBtn mx-2" data-index="' + index +
                    '">Edit</button>' +
                    '<button class="btn btn-danger btn-sm deleteBtn" data-index="' + index +
                    '">Delete</button>' +
                    '</td>' +
                    '</tr>';
                console.log(data.amount);
                $('#dataTable tbody').append(row);
            });

            $('#totAmount').val();
        }



    }

    // Edit button click event
    $(document).on('click', '.editBtn', function() {
        var index = $(this).data('index');
        var storedData = JSON.parse(localStorage.getItem('formData'));
        var data = storedData[index];

        // Populate the modal with the selected data
        $('#editName').val(data.name);
        $('#editEmail').val(data.email);
        $('#editPhone').val(data.phone);

        // Show the edit modal
        $('#editModal').modal('show');

        // Save changes button click event
        $('#saveChanges').click(function() {
            // Update the stored data with the edited values
            storedData[index].name = $('#editName').val();
            storedData[index].email = $('#editEmail').val();
            storedData[index].phone = $('#editPhone').val();

            // Store the updated data in local storage
            localStorage.setItem('formData', JSON.stringify(storedData));

            // Hide the modal
            $('#editModal').modal('hide');

            // Refresh the table to display the updated data
            refreshTable();
        });
    });

    // Delete button click event
    $(document).on('click', '.deleteBtn', function() {
        var index = $(this).data('index');
        var storedData = JSON.parse(localStorage.getItem('formData'));

        // Remove the selected data from the stored array
        storedData.splice(index, 1);

        // Store the updated data in local storage
        localStorage.setItem('formData', JSON.stringify(storedData));

        // Refresh the table to display the updated data
        refreshTable();
    });

    // Function to insert table data into the database
    function insertDataToDatabase() {
        var storedData = JSON.parse(localStorage.getItem('formData'));

        // Perform AJAX request to insert data into the database
        $.ajax({
            url: 'insert_data.php',
            type: 'POST',
            data: {
                data: JSON.stringify(storedData)
            },
            success: function(response) {
                console.log('Data inserted into the database.');
                clearLocalStorage();
            },
            error: function(xhr, status, error) {
                console.error('Error inserting data into the database:', error);
            }
        });
    }

    // Function to clear local storage
    function clearLocalStorage() {
        localStorage.removeItem('formData');
        refreshTable();
    }

    // Button click event to insert data into the database
    $('#insertDatabaseBtn').click(function() {
        insertDataToDatabase();
    });

    // Initial table population on page load
    refreshTable();
});
</script>
=======
  });
</script> -->


  <!-- <script>
	jQuery(document).ready(function($) {
      $("#selectInput1").on('change', function() {
            var selectedId1 = $(this).children("option:selected").val();
			//alert(selectedId1);
			//console.log(selectedId1);
             if(selectedId1 !== ""){
                  $.ajax ({
                        type: 'POST',
                        url: 'TestSales.php',
                        data: { id: selectedId1 },
                          success : function(response) {
							var values = JSON.parse(response);
							$('#selectInput2').val(values.IMEI);                                 
                                 console.log(response);
                              }							  
                         });
                     }
					 else {
        $('#selectInput2').val('');
					 }
                 });
         });

  </script> -->



  <!-- <script>
	 $(document).ready(function() {
    $('#selectInput1').change(function() {
      var selectedId1 = $(this).val();
	  console.log(selectedId1);

      if (selectedId1 !== "") {
        $.ajax({
          url: 'salesbackend.php',
          type: 'POST',
          data: { id: selectedId },
          success: function(response) {
            var values = JSON.parse(response);
            $('#selectInput2').val(values.input1);
            $('#test2').val(values.input2);
          }
        });
      } else {
        $('#input1').val('');
        $('#input2').val('');
      }
    });
  });

  </script> -->
>>>>>>> Stashed changes
