<?php include('./header.php');


$query1 = "SELECT * FROM productmaster";
$result1 = mysqli_query($con, $query1);

$query2 = "SELECT `venderid`,`vendername`,`gstin`,`contactsales` FROM `vendermaster`";
$result2 = mysqli_query($con, $query2);

$query3 = "SELECT * FROM inventorystk";
$result3 = mysqli_query($con, $query3);


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
                        <select name="productName" class="form-control" id="selectInput1">
                            <option value="">----- Select Product -----</option>
                            <?php
						while ($row = mysqli_fetch_array($result3)) {
						?>
                            <option value="<?php echo ($row['ProductId']); ?>"><?php echo ($row['productName']); ?>
                            </option>

                            <?php } ?>
                        </select>

                    </div>
                    <div class="mb-3 col-4 input-group-sm">

                        <label for="exampleInputEmail1" class="form-label">IMEI Number</label>
                        <!-- <input type="number" class="form-control" name="" id="imeiNumber"> -->
                        
                        <select name="imeiNo" class="form-control" id="imeiNo">
                            <option value="">----- Select Product -----</option>               						
                        </select>

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

  


<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.js"
    integrity="sha512-RjvSEaeDqPCfUVQ9kna2/2OqHz/7F04IOl1/66LmQjB/lOeAzwq7LrbTzDbz5cJzlPNJ5qteNtHR56XaJSTNWw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
< script src = "https://cdn.jsdelivr.net/npm/sweetalert2@11" >
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>


<!-- Product Data Show -->

<script>
$(document).ready(function() {
    $('#selectInput1').change(function() {
        var selectedId1 = $(this).val();
        console.log(selectedId1);

        if (selectedId1 !== "") {
            $.ajax({
                url: 'demoBackend.php',
                type: 'POST',
                data: 'StkId =' + selectedId1,
                success: function(html) {
                    // var values = JSON.parse(response);
                    $('#imeiNo').html(html);
                    // $('#contact').val(values.contact);
                }
            });
        } else {
            $('#imeiNo').html('<option value = ""> select product first</option>');
            // $('#contact').val('');
        }
    });
});
</script>



