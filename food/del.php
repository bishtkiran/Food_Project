<?php
require_once("db.php");

if(isset($_POST['id']))
{
     $id=$_POST['id'];

    $sql="update registration set active=0 where pk_id=$id";
    $res=mysqli_query($con,$sql);
    
    if(!$res)
    {
        echo "Data can't be deleted".mysqli_error($con);
    }
    else{
        echo"Data has been removed Successfully";
        header("LOCATION:deleteuser.php");
    }
}
?>