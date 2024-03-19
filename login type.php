<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #fff;
            font-size: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: rgb(250, 128, 47);
        }
        
        .container {
            text-align: center;
        }
        
        h1 {
            color: #fff;
            font-size: 36px;
            margin-bottom: 30px;
        }
        
        .icons {
            display: flex;
            justify-content: center;
        }
        
        .icon {
            margin: 0 20px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>User Login</h1>
        <div class="icons">
            <div class="icon">
                <img src="https://th.bing.com/th/id/R.6b0022312d41080436c52da571d5c697?rik=ejx13G9ZroRrcg&riu=http%3a%2f%2fpluspng.com%2fimg-png%2fuser-png-icon-young-user-icon-2400.png&ehk=NNF6zZUBr0n5i%2fx0Bh3AMRDRDrzslPXB0ANabkkPyv0%3d&risl=&pid=ImgRaw&r=0" alt="User Icon"
                    width="100" height="100">
                <p>Login as user</p>
                <a href="user login.php">login as user</a>
            </div>
            <div class="icon">
                <img src="https://pickatime.in/images/admin.png" alt="Admin Icon" width="100" height="100">
                <p>Login as Admin</p>
                <a href="admin login.php">login as admin</a>
            </div>
        </div>
    </div>
</body>

</html>