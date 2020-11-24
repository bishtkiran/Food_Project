
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feedback</title>
    <link href="common.css"rel="stylesheet">
</head>
</html>




<?php
require_once("db.php");

    $sql="select * from feedback";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0)
    {
        ?>
        <table align="center"rules="all"border="3px">
            <caption><h3 style="color:white;font-size:25px">FEEDBACK DETAILS</h3></caption>
            <th style="color:white;">NAME</th>
            <th style="color:white;">EMAIL</th>
            <th style="color:white;">RATING</th>
            <th style="color:white;">MESSAGE</th>

            <?php
            while($row=mysqli_fetch_assoc($result))
            {
                echo"<tr>";
                echo"<td style=color:white >".$row["username"]."</td>";
                echo"<td style=color:white  >".$row["email"]."</td>";
                echo"<td style=color:white >".$row["rate"]."</td>";
                echo"<td style=color:white  >".$row["comments"]."</td>";
                echo"</tr>";
            }
            echo"</table>";
    }
?>