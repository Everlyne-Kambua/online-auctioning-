<?php
    // Connect to the database
    include('dbconnection.php');
    
    // Fetch data from the database
    $query = mysqli_query($conn, "SELECT * FROM registration where firstName='peter'");
    $users = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Users</title>
   <style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: navajowhite;
}

.container {
    width: 100%;
    margin: 20px auto;
}

h1 {
    text-align: center;
    margin-top: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
    background-color: #fff;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

table th,
table td {
    padding: 12px 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

table th {
    background-color: #f2f2f2;
    font-weight: bold;
}

table tbody tr:nth-child(even) {
    background-color: #f9f9f9;
}

table tbody tr:hover {
    background-color: #e0e0e0;
}

   </style>
</head>
<body>
    <div class="container">
        <h1>Users</h1>
        <table>
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>email</th>
                    <th>Address</th>
                    <th>Contacts</th>
                    <th>username</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?php echo $user['id']; ?></td>
                        <td><?php echo $user['firstName']; ?></td>
                        <td><?php echo $user['lastName']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td><?php echo $user['address']; ?></td>
                        <td><?php echo $user['contacts']; ?></td>
                        <td><?php echo $user['username']; ?><td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
