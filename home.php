<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electronic Devices Auctioning system</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        header {
            background-color: #333;
            color: #fff;
            padding: 2px 0;
            text-align: center;
        }
        
        nav {
            background-color: rgb(250, 128, 47);
            padding: 2px 0;
            text-align: left;
            font-size: 20px;
        }
        
        .container {
            max-width: 1000px;
            margin: 20px auto;
            padding: 0 20px;
            text-align: right;
        }
        
        .search-bar {
            margin-bottom: 20px;
            text-align: right;
        }
        
        .featured-auctions {
            text-align: left;
            margin-bottom: 30px;
        }
        
        .featured-auction-item {
            display: flex;
            margin: 0 10px;
        }
        
        .cta-button {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-transform: uppercase;
            cursor: pointer;
        }
        
        .trust-indicators {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .footer {
            background-color: #333;
            color: #fff;
            padding: 5px 0;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        .dashboard {
            display: left;
            justify-content: space-around;
            padding: 20px;
        }
        
        .category {
            background-color: #f0f0f0;
            border-radius: 8px;
            padding: 20px;
            font-size: 20px;
            width: 30%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        .announcement {
            background-color: #f0f0f0;
            border-radius: 8px;
            padding: 20px;
            font-size: 20px;
            width: 30%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        .category h2 {
            margin-top: 0;
            background-color: rgb(250, 128, 47);
            font-size: 30px;
        }
        
        .announcement h2 {
            margin-top: 0;
            background-color: rgb(250, 128, 47);
            font-size: 30px;
        }
        
        .category ul {
            list-style-type: none;
            padding: 0;
        }
        
        .category li {
            padding: 5px 0;
            border-bottom: 1px solid #ddd;
        }
        
        .category li:last-child {
            border-bottom: none;
        }
        .category a {
        color: black;
        text-decoration: none; /* Optional: Remove underline */
    }

    /* Change link color when visited */
    .category a:visited {
        color: blue;
    }
    </style>
</head>

<body>
    <header>
        <h1>Welcome to Electronic Devices Auctioning system</h1>
    </header>
    <nav>
        <div class="container">
            <a href="#">Home</a> |
            <a href="about us.html">About us</a> |
            <a href="user_login.php">login</a> |
            <a href="logout.php">logout</a> |
            <a href="register.php">Register</a> 
    </nav>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>
        <div class="dashboard">
            <div class="category">
                <h2>categories</h2>
                <ul><b>
                    <li><a href="laptops.php">laptop</a></li>
                    <li><a href="phone.php">phone</a></li>
                    <li><a href="camera.php">camera</a></li></b>
                </ul>
            </div>
            <div class="dashboard">
                <div class="announcement">
                    <h2>Bidding</h2>
                    <ul><b>
                            
                                <button class="cta-button"><a href="bids.php">join</a></button></li>
                </div>
            </div>
            <div class="dashboard">
                <div class="announcement">
                    <h2>Annoucements</h2>
                    <table id="qqq" >
                  <thead  style="color:red;margin-left:20px;">
         <th>SNO:</th>
            <th>Question</th>
            <th>Remark</th>
           
        </thead>
                                <?php
                                include ('dbconnection.php');
                                $user=$_SESSION['username'];
        
                        $ret=mysqli_query($conn,"select *from   announcements where user_name='$user' ");
                        $cnt=1;

                        while ($row=mysqli_fetch_array($ret)) {
                            

                        ?>
                <tr >
                  <td><?php echo $cnt;?></td>
        
                  <td><?php  echo $row['question'];?></td>
                  <td><?php  echo $row['remark'];?></td>
                  
                </tr>
                <?php 
         $cnt=$cnt+1;
              }?>
       
    </table>
                            
                       <button class="cta-button" onclick="view()" onmouseover="see()">close</button>
        </div>
        <footer class="footer">
         <div class="container">
            <p>&copy; 2024 Electronic Device Auction. All rights reserved.</p>
          </div>
       </footer>
       <script type="text/javascript">
        function view(){
            var p=document.getElementById("qqq");
            p.style.display="none";
        }
        function see(){
            var p=document.getElementById("qqq");
            p.style.display="block";
        }

       </script>
    </body>

    </html>
    
</body>

</html>