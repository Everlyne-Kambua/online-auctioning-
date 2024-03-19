<?php
session_start();
include('dbconnection.php');
if(isset($_POST['Register'])){
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $contacts = $_POST['contacts'];
    $querry=mysqli_query($conn, "insert into registration(firstName,lastName,gender,address,contacts) values('$firstName','$lastName','$gender','$address','$contacts')");
    if ($querry){
        $_SESSION['unumber']=$contacts;
        echo "<script>window.location.href='next.php'</script>";
    }
    else{
        echo "data not inserted";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
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
    <div class="container">
        <h2>User Registration</h2>
        <form method="post" id="step1Form">
            <div class="form-group">
                <label for="firstName">First Name:</label>
                <input type="text" id="firstName" name="firstName" required>
            </div>
            <div class="form-group">
                <label for="lastName">Last Name:</label>
                <input type="text" id="lastName" name="lastName" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
                    <option name="male" value="male">Male</option>
                    <option name="female" value="female">Female</option>
                    <option  name="other"value="other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>
            </div>
            <div class="form-group">
                <label for="contacts">Contacts:</label>
                <input type="text" id="contacts" name="contacts" required>
            </div>
            <button  name="Register" type="submit" onclick="nextStep()">Next Step</button>
        </form>
    </div>

   

    <script>
        function nextStep() {
            document.getElementById('step1Form').style.display = 'none';
            document.getElementById('step2Container').style.display = 'block';
        }

        function register() {
    
        }
    </script>
</body>

</html>