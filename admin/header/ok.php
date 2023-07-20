<?php
// Replace 'your_connection_params' with your actual connection details
$conn = mysqli_connect('localhost', 'root', '', 'sparks');

if (isset($_GET['category_id'])) {
    $categoryId = mysqli_real_escape_string($conn, $_GET['category_id']);

    $query = "SELECT  `ProductId`,`IMEINo` FROM `inventorystk` WHERE `ProductId` = $categoryId";
    $result = mysqli_query($conn, $query);

    $subcategories = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $subcategories[] = $row;
    }

    echo json_encode($subcategories);
}

mysqli_close($conn);
?>