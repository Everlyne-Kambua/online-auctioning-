<?php
session_start();
include('dbconnection.php');

if(isset($_POST['products'])) {
    $product_name = $_POST['product-name'];
    $start_bidding = $_POST['start-bidding'];
    $regular_price = $_POST['regular-price'];
    $category = $_POST['category'];
    $product_description = $_POST['product-description'];
    $product_image = $_FILES['product-image']['name']; 


    $query = "INSERT INTO products(product_name, start_bidding, regular_price, category, product_description, product_image) VALUES ('$product_name', '$start_bidding', '$regular_price', '$category', '$product_description', '$product_image')";

    if(mysqli_query($conn, $query)) {
        echo "<script>window.location.href='description.php'</script>";
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        /* General styles */

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .dashboard {
            background-color: #333;
            color: #fff;
            width: 200px;
            height: 100vh;
            padding: 20px;
            position: fixed;
        }

        .dashboard>div {
            margin-bottom: 20px;
        }

        .dashboard img {
            width: 30px;
            margin-right: 10px;
        }

        .dashboard span {
            vertical-align: middle;
        }

        .register-form {
            margin-left: 240px;
            width: 40%;
            padding: 20px;
        }

        .register-form h1 {
            color: #333;
        }

        .register-form form {
            margin-top: 20px;
        }

        .register-form label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        .register-form input,
        .register-form select,
        .register-form textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .register-form button {
            background-color: blue;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
        }

        .register-form button:hover {
            background-color: #333;
        }

        .dashboard {
            display: block;
            justify-content: space-around;
        }

        .dashboard a {
            text-decoration: none;
            color: #fff;
            display: block;
            flex-direction: column;
            align-items: center;
        }

        .dashboard a img {
            width: 50px;
            height: auto;
        }

        .dashboard a span {
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <div class="dashboard">
        <a href="notifications.html" class="notification">
            <img src="https://th.bing.com/th/id/OIP.Od5BN0ez2WapogRBlqjJ-wHaHa?rs=1&pid=ImgDetMain" alt="Notification">
            <span>Notifications</span>
        </a>
        <a href="bids.html" class="bids">
            <img src="https://th.bing.com/th/id/R.b1d4f71ab5ba93f12fd00b185f5310cd?rik=3JY9eGV0AZZaiQ&pid=ImgRaw&r=0" alt="Bids">
            <span>Bids</span>
        </a>
            <img src="https://th.bing.com/th/id/OIP.aHovQ7APGeQLfYzwCPioZwHaHa?rs=1&pid=ImgDetMain" alt="Products">
            <span>Products</span>
        </a>
        <a href="accounts.html" class="accounts">
            <img src="https://th.bing.com/th/id/OIP.Vpf8MQSq8-YJtStw-06VcgHaHa?rs=1&pid=ImgDetMain" alt="Accounts">
            <span>Accounts</span>
        </a>
    </div>

    <div class="register-form">
        <h1>Welcome Administrator</h1>
        <h2>Add new product</h2>
        <form action="#" method="post">
            <label for="product-name">Product Name:</label>
            <input type="text" id="product-name" name="product-name" required>

            <label for="start-bidding">Start Bidding:</label>
            <input type="date" id="start-bidding" name="start-bidding" required>

            <label for="regular-price">Regular Price:</label>
            <input type="number" id="regular-price" name="regular-price" required>

            <label for="category">Category:</label>
            <select id="category" name="category" required>
                <option value="">Select a category</option>
                <option value="laptop">Laptop</option>
                <option value="phone">Phone</option>
                <option value="camera">Camera</option>
            </select>

            <label for="product-description">Product Description:</label>
            <textarea id="product-description" name="product-description" rows="4" required></textarea>

            <label for="product-image">Product Image:</label>
            <input type="file" id="product-image" name="product-image" accept="image/*" required>

            <button type="submit" name="products">Save Product</button>
        </form>
    </div>
</body>

</html>
