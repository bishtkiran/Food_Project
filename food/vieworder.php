<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Orders</title>
    <link href="common.css"rel="stylesheet">
</head>
</html>




<?php
require_once("db.php");

    $sql="select * from orderdtl";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0)
    {
        ?>
        <table border="3px"rules="all"align="center">
            <caption><h3 style=color:white;font-size:25px ><strong>ORDER DETAILS</strong></h3></caption>
            <th style=color:white >Name</th>
            <th style=color:white >Email</th>
            <th style=color:white >Mobile</th>
            <th style=color:white >ItemId</th>
            <th style=color:white >Item Name</th>
            <th style=color:white >Quantity</th>
            <th style=color:white >Amount</th>
            
            <?php
            while($row=mysqli_fetch_assoc($result))
            {
                echo"<tr>";
                echo"<td style=color:white >".$row['username']."</td>";
                echo"<td style=color:white >".$row['email']."</td>";
                echo"<td style=color:white >".$row['mobile']."</td>";
                echo"<td style=color:white >".$row['itemid']."</td>";
                echo"<td style=color:white >".$row['itemname']."</td>";
                echo"<td style=color:white >".$row['quantity']."</td>";
                echo"<td style=color:white >".$row['amount']."</td>";
              
                echo"</tr>";
            }
            echo"</table>";
    }

?>