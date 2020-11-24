
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

$sql="select * from menu where active=1";
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
        <th style=color:white>OPERATION</th>
        

        <?php
        while($row=mysqli_fetch_assoc($result))
        {
            
            echo"<tr><form action=udate.php method=post>";
           
            echo"<td style=color:white >".$row["name"]."</td>";
            echo"<td style=color:white >".$row["image"]."</td>";
            echo"<td style=color:white >".$row["price"]."</td>";
            echo"<td style=color:white >".$row["discount"]."</td>";
            echo"<input type=hidden name=id value=".$row["id"].">";
            echo"<td><button type=submit value=update>Update</button>";
            
           

            echo"</form></tr>";
            
        }
        echo"</table";

}


?>