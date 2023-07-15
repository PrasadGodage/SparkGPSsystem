<!DOCTYPE html>
<html>
<head>
  <title>Related Select Boxes</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
  <label for="categorySelect">Category:</label>
  <select id="categorySelect">
    <option value="">Select a category</option>
    <option value="1">Category 1</option>
    <option value="2">Category 2</option>
    <option value="3">Category 3</option>
  </select>

  <br>

  <label for="subCategorySelect">Subcategory:</label>
  <select id="subCategorySelect">
    <option value="">Select a subcategory</option>
  </select>

  <script>
    $(document).ready(function() {
      $('#categorySelect').change(function() {
        var categoryId = $(this).val();
        loadSubcategories(categoryId);
      });

      function loadSubcategories(categoryId) {
        var subCategorySelect = $('#subCategorySelect');
        subCategorySelect.empty(); // Clear previous options

        // Simulate AJAX call to fetch subcategories based on the selected category
        // Replace this with your actual AJAX call to retrieve data from a server
        $.ajax({
          url: 'get_subcategories.php',
          type: 'GET',
          data: { category_id: categoryId },
          success: function(response) {
            var subcategories = JSON.parse(response);

            if (subcategories.length > 0) {
              $.each(subcategories, function(index, subcategory) {
                subCategorySelect.append('<option value="' + subcategory.id + '">' + subcategory.name + '</option>');
              });
            } else {
              subCategorySelect.append('<option value="">No subcategories found</option>');
            }
          },
          error: function() {
            subCategorySelect.append('<option value="">Error loading subcategories</option>');
          }
        });
      }
    });
  </script>
</body>
</html>
