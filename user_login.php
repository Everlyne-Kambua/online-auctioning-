<?php
session_start();
include('dbconnection.php');
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $querry=mysqli_query($conn,"SELECT * FROM registration WHERE username='$username' && password='$password'");
    $res=mysqli_fetch_array($querry);
     if($res>0){
        echo "<script>window.location.href='home.php'</script>";
        $_SESSION['username']=$username;
     }else{
        echo "<script>window.location.href='user_login.php'</script>";
     }
}
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auction System Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        
        .login-container {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 100px;
        }
        
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }
        
        input[type="submit"] {
            width: 100%;
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 3px;
            cursor: pointer;
        }
        
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h2>user login</h2>
        <form  method="post">
            <input type="text" name="username" placeholder="Username" id="username" >
            <input type="password" name="password" placeholder="Password" id="password" >
            <button type="submit"  name="login">login</button>
        </form>
      
    </div>
</body>

</html>