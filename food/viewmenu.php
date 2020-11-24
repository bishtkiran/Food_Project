
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Food Menu</title>
    <link href="common.css"rel="stylesheet">
</head>
</html>





<?php
require_once("db.php");

$sql="select * from menu";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
    ?>
    <table align="center"border="3px"rules="all">
        <caption><h2 style=color:white;font-size:25px>MENU DETAILS</h2></caption>
        <th style=color:white >NAME</th>
        <th style=color:white >IMAGE</th>
        <th style=color:white >PRICE</th>
        <th style=color:white >DISCOUNT</th>
        

        <?php
        while($row=mysqli_fetch_assoc($result))
        {
            echo"<tr>";
            echo"<td style=color:white >".$row["name"]."</td>";
            echo"<td style=color:white >".$row["image"]."</td>";
            echo"<td style=color:white >".$row["price"]."</td>";
            echo"<td style=color:white >".$row["discount"]."</td>";
        

            echo"</tr>";
        }
        echo"</table";

}


?>