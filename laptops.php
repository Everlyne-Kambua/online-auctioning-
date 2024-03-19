
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laptops</title>
</head>
<body>
    <table border="1">
        <thead  style="color:red;margin-left:20px;">
         <th>SNO:</th>
            <th style="margin-left: 20px;">product name:</th>
            <th>product description:</th>
            <th>product price:</th>
            <th>product image:</th>
        </thead>
                                <?php
                                include ('dbconnection.php');
                        $ret=mysqli_query($conn,"select *from   products where category='laptops' ");
                        $cnt=1;

                        while ($row=mysqli_fetch_array($ret)) {
                            

                        ?>
                <tr >
                  <td><?php echo $cnt;?></td>
        
                  <td><?php  echo $row['product_name'];?></td>
                  <td><?php  echo $row['product_description'];?></td>
                  <td><?php  echo $row['regular_price'];?></td>
                  <td><?php  echo $row['product_image'];?></td>
                </tr>
                <?php 
         $cnt=$cnt+1;
              }?>
       
    </table>
    
</body>
</html>