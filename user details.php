<?php
    include('dbconnection.php');
    if(isset($_GET['id'])) {
        $userId = $_GET['id'];
        $query = mysqli_query($conn, "SELECT * FROM registration WHERE id = $userId");
        $user = mysqli_fetch_assoc($query);
    } else {
        echo "<script>window.location.href='users.php'</script>";
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        
        .container {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            text-align: center;
            margin-top: 20px;
        }
        
        .user-details {
            margin-top: 20px;
        }
        
        .user-details p {
            margin-bottom: 10px;
        }
        
        .user-details strong {
            font-weight: bold;
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>User Details</h1>
        <div class="user-details">
            <p><strong>User ID:</strong> <?php echo $user['id']; ?></p>
            <p><strong>First Name:</strong> <?php echo $user['firstName']; ?></p>
            <p><strong>Last Name:</strong> <?php echo $user['lastName']; ?></p>
            <p><strong>Gender:</strong> <?php echo $user['gender']; ?></p>
            <p><strong>Address:</strong> <?php echo $user['address']; ?></p>
            <p><strong>Contacts:</strong> <?php echo $user['contacts']; ?></p>
        </div>
    </div>
</body>
</html>
