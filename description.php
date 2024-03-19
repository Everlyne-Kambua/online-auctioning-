<?php
session_start();
include('dbconnection.php');
if(isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];
    $query = "SELECT * FROM products WHERE id = $product_id";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $product_name = $row['product_name'];
        $start_bidding = $row['start_bidding'];
        $regular_price = $row['regular_price'];
        $category = $row['category'];
        $product_description = $row['product_description'];
        $product_image = $row['product_image'];
    } else {
        echo "Product not found!";
        exit(); 
    }
} else {
   
    echo "Product ID not provided!";
    exit(); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Description</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: rgb(250, 128, 47);
        }
        
        .container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding: 20px;
        }
        
        .product-image {
            flex: 1;
        }
        
        .product-image img {
            width: 100%;
            height: auto;
        }
        
        .product-details {
            flex: 1;
            padding-left: 20px;
        }
        
        .product-details h2 {
            margin-top: 0;
        }
        
        .bid-button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="product-image">
            <img src="<?php echo $product_image;?>" alt="Product Image" width="300">
        </div>
        <div class="product-details">
            <h2>Product Description</h2>
            <p><strong>Product Name:</strong> <?php echo $product_name; ?></p>
            <p><strong>Description:</strong> <?php echo $product_description; ?></p>
            <p><strong>Category:</strong> <?php echo $category; ?></p>
            <p><strong>Regular Price:</strong> <?php echo $regular_price; ?></p>

        </div>
    </div>
</body>
</html>
