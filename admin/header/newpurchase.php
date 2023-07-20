<?php include('./header.php');


$query1 = "SELECT * FROM productmaster";
$result1 = mysqli_query($con, $query1);

$query2 = "SELECT `venderid`,`vendername`,`gstin`,`contactsales` FROM `vendermaster`";
$result2 = mysqli_query($con, $query2);

?>

<div class="card">
    <div class="card-body">
        <h4 class="card-title fw-semibold mb-4 text-primary">Purchase</h4>
        <hr>


        <form action="" id="myForm">
            <div class="row">
                <div class="mb-3 col-5 input-group-sm">
                    <label for="exampleInputEmail1" class="form-label">Vendor Name</label>
                    <!-- <input type="text" class="form-control" id="vendorName" name="vendorName">		 -->
                    <select name="vendorName" class="form-control" id="selectInput">
                        <option value="">----- Select Vendor -----</option>
                        <?php
					while ($row = mysqli_fetch_array($result2)) {
					?>
                        <option value="<?php echo ($row['venderid']); ?>">
                            <?php echo ($row['vendername']); ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="mb-3 col-3 input-group-sm" id="additionalInputs">
                    <label for="exampleInputEmail1" class="form-label">GST IN</label>
                    <input type="text" class="form-control" id="input1">
                </div>
                <div class="mb-3 col-2 input-group-sm" id="additionalInputs">
                    <label class="form-label">Contact Sales</label>
                    <input type="number" class="form-control" placeholder="" name="productName" id="input2">
                </div>
                <div class="mb-3 col-2 input-group-sm" id="additionalInputs">
                    <label class="form-label">Date</label>
                    <input type="date" id="todayDate" class="form-control">
                </div>
            </div>



            <!-- ============================ Second Card for Product ================================  -->
            <div class="card border p-3 mt-3">
                <div class="row">
                    <div class="mb-3 col-4 input-group-sm">
                        <label class="form-label">Product Name</label>
                        <!-- <input type="text" class="form-control" placeholder="" name="productName" id="productName"> -->
                        <select name="productName" class="form-control" id="productname">
                            <option value="">----- Select Product -----</option>
                            <?php
						while ($row = mysqli_fetch_array($result1)) {
						?>
                            <option value="<?php echo ($row['productid']); ?>"><?php echo ($row['productname']); ?>
                            </option>

                            <?php } ?>
                        </select>

                    </div>
                    <div class="mb-3 col-4 input-group-sm">
                        <label for="exampleInputEmail1" class="form-label">IMEI Number</label>
                        <input type="number" class="form-control" name="" id="imeiNumber">
                    </div>

                    <div class="mb-3 col-4 input-group-sm">
                        <label class="form-label">Serial / CCID Number</label>
                        <input type="number" class="form-control" name="" id="serialNumber">
                    </div>
                </div>

                <div class="row">

                    <div class="mb-3 col-3 input-group-sm">
                        <label class="form-label">Sim No - 1</label>
                        <input type="number" class="form-control" placeholder="" id="simno1">
                    </div>
                    <div class="mb-3 col-3 input-group-sm">
                        <label class="form-label">Sim No - 2</label>
                        <input type="number" class="form-control" placeholder="" id="simno2">
                    </div>

                    <div class="mb-3 col-2 input-group-sm">
                        <label class="form-label">Activation Date</label>
                        <input type="date" class="form-control" placeholder="" id="activationdate">
                    </div>

                    <div class="mb-3 col-1 input-group-sm">
                        <!-- <button class="">Add</button> -->
                        <label for=""></label>
                        <input type="Submit" class="btn btn-primary mt-1 form-control" value="Add">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="card mt-3">
    <div class="card-body">
        <h4 class="card-title fw-semibold text-primary">Item Details</h4>
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
        <div class="row d-flex justify-content-center mt-3">
            <!-- <div class="col-3 input-group-sm">
                <label for=""><strong> Total Bill Amount</strong></label>
                <input type="number" value="" id="totAmount" class="form-control" readonly>
            </div> -->

            <!-- error_reporting(0);
            // var jsonData = localStorage.getItem('formData');
            // var parsedData = JSON.parse(jsonData);
            // var stringifydata = JSON.stringify(parsedData); -->
            <!-- if (isset($_POST['insertForm'])) {
                        echo "Name";
                        $getFormData = "<script>localStorage.getItem('formData');</script>";
                        $getparseData = "<script>JSON.parse(jsonData);</script>";
                        $stringifydata = "<script>JSON.stringify(parsedData);</script>";

                        $data = json_decode($stringifydata, true);

                        foreach ($data as $item) {
                            // VenodrName
                              $vemdorName = $item['selectInput']; // Replace 'field1' with your actual 
                              $productName = $item['productname']; // Replace 'field2' with your actual 
                              $serialNumber = $item['serialNumber'];
                              $simno1 = $item['simno1'];
                              $simno2 = $item['simno2'];
                              $activationdate = $item['activationdate'];
                              $imeiNumber = $item['imeiNumber'];
                              $todayDate = date("Y-m-d");
                            
                              $sql = "INSERT INTO `purchasemaster`( `purchaseDate`,`vendorName`, `productName`, `IMELNo`, `serial/CCIDNo`, `sim1No`, `sim2No`, `activationDate`) VALUES ('$todayDate','$vendorName','$productName','$imeiNumber','$serialNumber','$simno1','$simno2','$activationdate'))";
                            
                              echo $sql;
                            
                              $res = mysqli_query($con,$sql);
                              if ($res != true) {
                                echo 'Error inserting data: ';
                              } else {
                                echo "<script>
                                alert('There are no fields to generate a report');
                                </script>";
                                // window.location.href='admin/ahm/panel';
                              }
                            }


                        }
             -->
            <form action="" method="post">
                <div class="col-1 col-sm-2 col-md-2 input-group-sm">
                    <label for=""></label>
                    <!-- <button class="form-control btn-primary mt-2" type="submit" id="insertButton"
                    name="insertForm">Save</button> -->
                    <input type="button" class="form-control btn-primary mt-2" name="insertForm" value="Save"
                        onclick="insertHandle()">
                </div>
            </form>

        </div>
    </div>
</div>


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


    // var xhr = new XMLHttpRequest();
    // xhr.open('POST', 'purchaseBackend.php'); // Replace 'insert_data.php' with the URL to your PHP script
    // xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    // xhr.onreadystatechange = function() {
    //     if (xhr.readyState === XMLHttpRequest.DONE) {
    //         if (xhr.status === 200) {
    //             console.log('Data inserted successfully');
    //         } else {
    //             console.log('Error inserting data');
    //         }
    //     }
    // };

    // xhr.send('data=' + encodeURIComponent(localStorageData));



}
</script>


<script>
$('#todayDate').val(new Date().toJSON().slice(0, 10));
$('#activationdate').val(new Date().toJSON().slice(0, 10));
</script>

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
        var selectInput = $('#selectInput option:selected').text();
        // $("#yourdropdownid option:selected").text();
        var input1 = $('#input1 option:selected').text();
        var input2 = $('#input2').val();
        var productname = $('#productname option:selected').text();
        var imeiNumber = $('#imeiNumber').val();
        var serialNumber = $('#serialNumber').val();
        var simno1 = $('#simno1').val();
        var simno2 = $('#simno2').val();

        var activationdate = $('#activationdate').val();
        var num = 1;

        console.log(selectInput);
        // Create an object to store the form data
        var formData = {
            num,
            selectInput,
            input1,
            input2,
            productname,
            imeiNumber,
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


<script>
// Step 1: Read the JSON file from local storage
// var jsonData = localStorage.getItem('formData');
// var parsedData = JSON.parse(jsonData);
// var stringifydata = JSON.stringify(parsedData);

// // Step 2: Send the JSON data to the server using Ajax
// document.getElementById("insertButton").addEventListener("click", function() {
//     // AJAX request code goes here

//     console.log(parsedData);
//     $.ajax({
//         url: 'ajaxbackend.php',
//         type: 'POST',
//         data: stringifydata,
//         contentType: 'application/json',
//         success: function(response) {

//             // localStorage.removeItem('myData');
//             // console.log('Local storage cleared.');
//             console.log('Data inserted into the database successfully.');
//         },
//         error: function(xhr, status, error) {
//             // Handle the error if the request fails
//             console.error('Error:', error);
//         }
//     });
// });
</script>