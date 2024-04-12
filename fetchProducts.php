<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "buis";

$conn = new mysqli($host, $username, $password, $dbname);

loadProducts($conn);

function loadProducts($conn) {
    $sql = "SELECT * FROM products_table";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $output = '<div class="col-sm-3 mt-3">
					<div class="card h-100">
						<div class="h-50 d-flex">
							<img id="image1" class="img-fluid card-img" src="folder/'. $row['productImageName'] .'" alt="'. $row['productName'] .'" style="margin:auto;">
						</div>
						<div class="card-body">
							<h4 class="card-title" id="name'. $row['id'] .'">'. $row['productName'] .'</h4>
							<p class="card-text">
								<label>Php.</label>
								<label id="price'. $row['id'] .'">'. $row['productPrice'] .'</label>
								<label id="unit'. $row['id'] .'" name="'. $row['productUnit'] .'">/'. $row['productUnit'] .'</label>
							</p>
							<button type="button" class="btn btn-primary addtocart" id="'. $row['id'] .'">Add to Cart</button>
						</div>
					</div>
				</div>';
        echo $output;
    }
}
?>