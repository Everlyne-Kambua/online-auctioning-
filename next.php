<?php
session_start();
include('dbconnection.php');
if(isset($_POST['register'])){
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['confirmPassword']);
    $unumber= $_SESSION['unumber'];
    if($password==$cpassword){
        $querry=mysqli_query($conn, "UPDATE  registration set email='$email',username='$username',password ='$password' WHERE contacts='$unumber'");
        if ($querry){
            echo "<script>alert('Last part data inserted  succesfully')</script>";
            echo "<script>window.location.href='login type.php'</script>";
        }
        else{
            echo "data not inserted";
        }
    }else{
        echo "<script>alert('Password not matched')</script>";
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: rgb(250, 128, 47);
        }
        
        .container {
            width: 40%;
            margin: 20px auto;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        h2 {
            text-align: center;
        }
        
        .form-group {
            margin-bottom: 15px;
        }
        
        label {
            display: block;
            font-weight: bold;
        }
        
        input[type="text"],
        input[type="email"],
        input[type="password"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: rgb(250, 128, 47);
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        
        button:hover {
            background-color: rgb(250, 128, 47);
        }
    </style>
</head>

<body>
    <div class="container" id="step2Container" style="display: block;">
        <h2>user registration step 2</h2>
        <form id="step2Form" method="post">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirmPassword">Confirm Password:</label>
                <input type="password" id="confirmPassword" name="confirmPassword" required>
            </div>
            <button name="register" type="submit">Proceed</button>
        </form>
    </div>
</body>

</html>