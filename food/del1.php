<?php
require_once("db.php");


if(isset($_POST['id']))
{
    $fid=$_POST['id'];
    $sql="update menu set active=0 where id=$fid";
    $res=mysqli_query($con,$sql);
    if(!$res)
    {
        echo "Something went wrong".mysqli_error($con);
    }
    else{
        echo"Item has been removed";
        header("LOCATION:deletefood.php");
    }
}


?>