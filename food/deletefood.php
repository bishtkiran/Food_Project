<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="common.css"rel="stylesheet">
</head>
<body>
    




<?php
require_once("db.php");

$sql="select * from menu where active=1";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
    ?>
    <table align="center"border="3px"rules="all">
        <caption><h2>MENU DETAILS</h2></caption>
        <th>NAME</th>
        <th>IMAGE</th>
        <th>PRICE</th>
        <th>DISCOUNT</th>
        <th>OPERATION</th>
        

        <?php
        while($row=mysqli_fetch_assoc($result))
        {
            echo"<form action=del1.php method=post>";
            echo"<input type=hidden name=id value=".$row['id'].">";
            echo"<tr>";
            echo"<td>".$row["name"]."</td>";
            echo"<td>".$row["image"]."</td>";
            echo"<td>".$row["price"]."</td>";
            echo"<td>".$row["discount"]."</td>";
            echo"<td><button type=submit>Delete</button></td>";
        

            echo"</tr>";
        }
        echo"</table";

}


?>
</body>
</html>