<?php
include('dbconnection.php');
session_start();
if($_SESSION['username']==1){
    echo "<script>window.location.href='phone.php'</script>";
}
if(isset($_POST['placebid'])){
    $username=$_SESSION['username'];
    $item = $_POST['item'];
    $amount=$_POST['amount'];
    $querry=mysqli_query($conn, "insert into bids(user_name,product_name,bid_price) values('$username','$item','$amount')");
    if ($querry){
    
        echo "<script>window.location.href='home.php'</script>";
    }else{
        echo "<script>'try again'</script>";
        echo "<script>window.location.href='bids.php'</script>";
    }

}

if(isset($_POST['querry'])){
    $username=$_SESSION['username'];
    $question= $_POST['question'];
    $querry=mysqli_query($conn, "insert into announcements(user_name,question) values('$username', '$question')");
    if ($querry){
    
        echo "<script>window.location.href='home.php'</script>";
    }else{
        echo "<script>'try again'</script>";
        echo "<script>window.location.href='bids.php'</script>";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bids</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: rgb(250, 128, 47);
            border-radius: 5px;
            box-shadow: #fff;
        }
        h1 {
            text-align: center;
        }
        .bid-button {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: none;
            background-color: grey;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }
        .bid-info {
            text-align: center;
            margin-top: 20px;
        }
        .bid-input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
     <div class="container">
        <h1>bid</h1>
        <div class="bid-info">
        <p>Username: <span id="usernameText"><?php  echo $_SESSION['username'] ?></span></p>
            <p>Number of Bids: <span id="bidCount">0</span></p>
            <p>Highest Bid: ksh<span id="highestBid">0</span></p>
        </div>
        <select class="bid-input" name="item" >
                                                <option value="0" style="width: 200px;height:30px">select item</option>
                                                <?php
                                                include('dbconnection.php');
                                                 $query=mysqli_query($conn,"select * from products where category='phone'");
                                                  while($row=mysqli_fetch_array($query))
                                                  {
                                                    
                                                  ?>    
                                                                                    <option  name="item" ><?php echo $row['product_name']; echo $row['regular_price']; ?></option>
                                                      <?php } ?> 
        </select>
        <input type="text" class="bid-input" placeholder="Enter your bid amount"  name="amount">
        <button type="submit" name="placebid" class="bid-button" >Place Bid</button>
        <input name="question" type="text" id="info" class="bid-input" placeholder="Enter your question/complain">
        <button name="querry" type="submit" class="bid-input"> submit</button>
    </div>
    </form>

    <script>
        let bidCount = 0;
        let highestBid = 0;

        function placeBid() {
            const bidAmount = parseFloat(document.getElementById("bidAmount").value);
            if (!isNaN(bidAmount) && bidAmount > 0) {
            
                if (bidAmount > highestBid) {
                    highestBid = bidAmount;
                    bidCount++;
                    document.getElementById("highestBid").textContent = highestBid.toFixed(2);
                }else{
                    alert("Please enter a higher bid amount.");
                }
                document.getElementById("bidCount").textContent = bidCount;
                document.getElementById("bidAmount").value = "";
            } else {
                alert("Please enter a valid bid amount.");
            }
        }
    </script>
</body>
</html>
