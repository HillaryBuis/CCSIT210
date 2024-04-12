<?php

include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conn = mysqli_connect($host, $username, $password, $dbname);

    // Retrieve form data
    $image = $_FILES['productImageName']['name'];
    $extension = pathinfo($image, PATHINFO_EXTENSION); // Get the extension of the file
    $newImageName = uniqid('product_') . '.' . $extension; // Generate a unique file name
    $uploadPath = "folder/" . $newImageName;
    $isUploaded = move_uploaded_file($_FILES["productImageName"]["tmp_name"], $uploadPath);

    $productName = $_POST['productName'];
    $productQuantity = $_POST['productQuantity'];
    $productUnit = $_POST['productUnit'];
    $productPrice = $_POST['productPrice'];

    $sql = "INSERT INTO `products_table` (productImageName, productName, productQuantity, productUnit, productPrice) 
            VALUES ('$newImageName', '$productName', '$productQuantity', '$productUnit', '$productPrice')";
    $query = mysqli_query($conn, $sql);

    if ($query && $isUploaded) {
        // Image uploaded successfully
        $response = array(
            'success' => true,
            'message' => 'Image uploaded successfully!',
            'imagePath' => $uploadPath // Return the image path
        );
        echo json_encode($response);
    } else {
        // Error occurred
        $response = array(
            'success' => false,
            'message' => 'Error: ' . mysqli_error($conn)
        );
        echo json_encode($response);
    }

    mysqli_close($conn);
}
?>
