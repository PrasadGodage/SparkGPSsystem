<?php include('./header.php'); ?>

<div class="card">
	<div class="card-body">
		<h5 class="card-title fw-semibold mb-4 text-center text-primary">VENDOR MASTER</h5>
		<hr>


		<form action="./add_Product_Backend.php" method="POST" enctype="multipart/form-data">
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

			<input class="btn btn-primary" name="upload" type="submit" id="add" value="Add"></input>
		</form>
	</div>
</div>


<script>
	function additem() {
		var itemname = $('#iname').val();
		var itemCode = $('#icode').val();
		var itemhsn = $('#ihsncode').val();
		var itemUname = $('#UName').val();
		var itemTaxId = $('#TaxGId').val();
		var itemPurRate = $('#PurRate').val();
		var itemSalesRate = $('#SalesRate').val();

		if (itemname == "") {
			alert('Please Enter Item Name');
		} else if (itemUname == 0) {
			alert('Please Select Unit From List');
		} else if (itemTaxId == 0) {
			alert('Please Select Tax From List');
		} else if (itemPurRate == "") {
			alert('Please Enter Purchase Rate');
		} else if (itemSalesRate == "") {
			alert('Please Enter Sales Rate');
		} else {


			// console.log("oo");

			$.ajax({
				url: "itemBackend.php",
				type: "POST",
				data: {
					// data from file : data to file 
					itemname: itemname,
					itemCode: itemCode,
					itemhsn: itemhsn,
					itemUname: itemUname,
					itemTaxId: itemTaxId,
					itemPurRate: itemPurRate,
					itemSalesRate: itemSalesRate
				},
				success: function(data) {
					console.log(data);
					if (data == "Inserted") {
						$('#iname').val("");
						$('#icode').val("");
						$('#ihsncode').val("");
						$('#UName').val("0");
						$('#TaxGId').val("0");
						$('#PurRate').val("");
						$('#SalesRate').val("");
						getrecord();
					}
				},
			});





		}


		// alert(itemname+" "+itemCode+" "+itemhsn+" "+itemUname+" "+itemTaxId+" "+itemPurRate+" "+itemSalesRate);
	}
</script>