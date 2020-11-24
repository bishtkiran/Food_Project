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

$sql="select * from registration where active=1";
$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0)
{
?>

    <table rules="all"align="center"border="3px">
        <caption><strong><h3>User Details<h3><strong></caption>
        <th >Name</th>
        <th >Username</th>
        <th>Password</th>
        <th>Final Password</th>
        <th >Email</th>
        <th>Mobile</th>
        <th>Address</th>
        <th>Operation</th>
        <?php
while($row=mysqli_fetch_assoc($result))
{
    echo"<form action=del.php method=post>";
    echo"<input type=hidden name=id value=".$row['pk_id'].">";
    echo "<tr>";
    echo "<td>".$row["name"]."</td>";
    echo "<td>".$row["username"]."</td>";
    echo "<td>".$row["password"]."</td>";
    echo "<td>".$row["fpassword"]."</td>";
    echo "<td>".$row["email"]."</td>";
    echo "<td>".$row["mobile"]."</td>";
    echo "<td>".$row["address"]."</td>";
    echo"<td><button type=submit>Delete</button></td>";
    echo "</tr>";
    echo"</form>";
}
echo "</table>";
}
?>


</body>
</html>
