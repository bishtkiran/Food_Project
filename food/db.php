<?php

$servername="localhost";
$username="root";
$password="";
$database="food";

$con=mysqli_connect($servername,$username,$password,$database);

if(!$con)
{
    echo "Something went wrong".mysqli_error($con);
}
else{
    
}
?>