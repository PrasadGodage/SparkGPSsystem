<!-- <select id="selectInput">
	<option value="">Select an option</option>
	<option value="option1">Option 1</option>
	<option value="option2">Option 2</option>
</select>

<div id="additionalInputs">
	<input type="text" id="input1" placeholder="Input 1">
	<input type="text" id="input2" placeholder="Input 2">
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
	$(document).ready(function() {
		$('#selectInput').change(function() {
			var selectedIndex = $(this).prop('selectedIndex');

			if (selectedIndex > 0) {
				var values = getValuesByIndex(selectedIndex);
				$('#input1').val(values.input1);
				$('#input2').val(values.input2);
			} else {
				$('#input1').val('');
				$('#input2').val('');
			}
		});

		function getValuesByIndex(index) {
			var values = [{
					
					input2: 'Value 2 for Option 1'
				},
				{
					input1: 'Value 1 for Option 2',
					input2: 'Value 2 for Option 2'
				}
			];
			return values[index - 1];
		}
	});
</script> -->

 <select id="selectInput">
  <option value="">Select an option</option>
  <option value="1">Option 1</option>
  <option value="2">Option 2</option>
</select>

<div id="additionalInputs">
  <input type="text" id="input1" placeholder="Input 1">
  <input type="text" id="input2" placeholder="Input 2">
</div>
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
