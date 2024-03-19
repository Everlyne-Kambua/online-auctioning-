<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bidder Notification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .notification {
            background-color: #f2f2f2;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
        }
        .notification img {
            vertical-align: middle;
            margin-right: 10px;
            width: 100px;
            height: auto;
        }
    </style>
</head>
<body>

<?php
$num_bidders = 5;
if ($num_bidders == 0) {
    echo "<div class='notification'><https://th.bing.com/th?id=OIP.EL0r8D-jr3g7vP6XS4HrKAHaHa&w=250&h=250&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2' alt='Notification Icon'>No new bidders have tried to bid.</div>";
} elseif ($num_bidders == 1) {
    echo "<div class='notification'><img src='https://th.bing.com/th?id=OIP.EL0r8D-jr3g7vP6XS4HrKAHaHa&w=250&h=250&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2' alt='Notification Icon'>1 new bidder has tried to bid.</div>";
} else {
    echo "<div class='notification'><img src='https://th.bing.com/th?id=OIP.EL0r8D-jr3g7vP6XS4HrKAHaHa&w=250&h=250&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2' alt='Notification Icon'>$num_bidders new bidders have tried to bid.</div>";
}
?>

</body>
</html>
