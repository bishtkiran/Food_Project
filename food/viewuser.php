<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
    <link href="common.css"rel="stylesheet">
</head>
</html>



<?php
require_once("db.php");
$sql="select * from registration";
$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0){

    ?>

    <table rules="all"align="center"border="3px">
        <caption><strong><h3 style=color:white;font-size:25px>USER DETAILS<h3><strong></caption>
        <th style=color:white  >Name</th>
        <th style=color:white  >Username</th>
        <th style=color:white >Password</th>
        <th style=color:white >Final Password</th>
        <th style=color:white  >Email</th>
        <th style=color:white >Mobile</th>
        <th style=color:white >Address</th>
        <?php
while($row=mysqli_fetch_assoc($result))
{
    echo "<tr>";
    echo "<td style=color:white >".$row["name"]."</td>";
    echo "<td style=color:white >".$row["username"]."</td>";
    echo "<td style=color:white >".$row["password"]."</td>";
    echo "<td style=color:white >".$row["fpassword"]."</td>";
    echo "<td style=color:white >".$row["email"]."</td>";
    echo "<td style=color:white >".$row["mobile"]."</td>";
    echo "<td style=color:white >".$row["address"]."</td>";
    echo "</tr>";
}
echo"</table>";
}
?>