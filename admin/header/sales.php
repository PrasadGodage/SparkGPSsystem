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
            <div class="mb-2 col-6 col-md-9 col-lg-9 col-xs-9 input-group-sm"></div>

                    <div class="mb-2 col-6 col-md-2 col-lg-2 col-xs-2 input-group-sm shadow p-2">					
						<label for="date" class="form-label" style="text-align:right;">Date :</label>		
                        <input type="date" class="form-control" name="date" id="date">

                        <!-- <label for="date">Date :</label>
                        <input type="date" id="date" name="date"> -->
                    </div>
                    <div class="mb-2 col-6 col-md-1 col-lg-1 col-xs-1 input-group-sm"></div>
       </div>

			<div class="row">
				
				<div class="mb-2 col-6 col-md-4 col-lg-4 col-xs-4 input-group-sm">
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

					<div class="mb-2 col-6 col-md-4 col-lg-4 col-xs-4 input-group-sm">
						<label for="exampleInputEmail1" class="form-label">Address :</label>
						<input type="text" class="form-control" id="address" name="address" readonly>				
					</div>

					<div class="mb-2 col-6 col-md-2 col-lg-2 col-xs-2 input-group-sm">					
						<label class="form-label" style="text-align:right;">Contact :</label>
						<input type="number" class="form-control" name="" id="contact" readonly>							
					</div>

					<!-- <div class="mb-2 col-6 col-md-2 col-lg-2 col-xs-2 input-group-sm">					
						<label class="form-label" style="text-align:right;">Date :</label>
						<input type="date" class="form-control" name="date" id="date"> 				
					</div> -->

				</div>
			</div>
    <!-- </div> -->
 <!-- </div> -->

			<div class="card shadow mb-4 p-2">
				<div class="card-body">
					<!-- <h5 class="card-title fw-semibold mb-4 text-center text-primary">Sales Form</h5> -->
					<!-- <hr> -->

					<div class="row">
						<div class="mb-2 col-6 col-md-5 col-lg-5 col-xs-5 input-group-sm">	

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

						<div class="mb-2 col-6 col-md-4 col-lg-4 col-xs-4 input-group-sm">

							<label for="exampleInputEmail1" class="form-label">IMEI Number</label>
							<!-- <input type="number" class="form-control" name="" id="imeiNo" readonly> -->
							<select id="subcategory" name="subcategory" readonly>
							<!-- <option value="">----- Select Product -----</option> -->
							</select>
						</div>
					
						<div class="mb-2 col-4 col-md-2 col-lg-2 col-xs-2 input-group-sm">					
							<label class="form-label" style="text-align:right;">Activated Date :</label>
							<input type="date" class="form-control" name="salesDate" id="salesDate" readonly>							
						</div>
					</div>			

					<div class="row">

						<div class="mb-2 col-6 col-md-3 col-lg-3 col-xs-3 input-group-sm">
							<label class="form-label">Serial / CCID Number</label>
							<input type="number" class="form-control" name="" id="serialNumber" readonly>
						</div>

						<div class="mb-2 col-6 col-md-3 col-lg-3 col-xs-3 input-group-sm">
							<label class="form-label">Sim No - 1</label>
							<input type="number" class="form-control" placeholder="" id="simno1" readonly>
						</div>

						<!-- <div class="mb-3 col-2"></div> -->

						<div class="mb-2 col-6 col-md-3 col-lg-3 col-xs-3 input-group-sm">
							<label class="form-label">Sim No - 2</label>
							<input type="number" class="form-control" placeholder="" id="simno2" readonly>
						</div>

						<div class="mb-2 col-2 col-md-1 col-lg-1 col-xs-1 mt-4 input-group-sm">
							<!-- <button type="submit" class="btn btn-primary" name="add">Add</button> -->
						</div>

						<div class="mb-2 col-2 col-md-1 col-lg-1 col-xs-1 mt-4 input-group-sm">
							<button type="submit" class="btn btn-primary" name="add">Add</button>
						</div>

						<div class="mb-2 col-2 col-md-1 col-lg-1 col-xs-1 mt-4 input-group-sm">
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

	</div>

</div>



<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
</script>


<!-- Product Data Show -->

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
$(document).ready(function() {
    // Handle form submission
    $('#myForm').submit(function(e) {
        e.preventDefault();

        // Get form values
        var clientName = $('#selectInput option:selected').text().trim();
        var clientId = $('#selectInput').val();
        // $("#yourdropdownid option:selected").text();
        // var input1 = $('#input1 option:selected').text();
        var contact = $('#contact').val();
        var productName = $('#category option:selected').text().trim();
        var productId = $('#category').val();
        var imeiNo = $('#subcategory').val();
        var serialNumber = $('#serialNumber').val();
        var simno1 = $('#simno1').val();
        var simno2 = $('#simno2').val();

        var activationdate = $('#salesDate').val();
        var num = 1;

        console.log(selectInput);
        // Create an object to store the form data
        var formData = {
            num,
            ClientName,
            clientId,
            productId,
            // input1,
            contact,
            productName,
            imeiNo,
            serialNumber,
            simno1,
            simno2,
            activationdate
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
