<?php
require_once("db.php");

if(isset($_POST['pkid']))
{
    echo $pkid=$_POST['pkid'];
$sql="update menu set name='$_POST[fname]', image='$_POST[fimg]', price='$_POST[fprice]', discount='$_POST[dis]',cat='$_POST[cat]' where id=$pkid";

    $rec=mysqli_query($con,$sql);
    if(!$rec)
    {
        echo "Something went wrong".mysqli_error($con);
    }
    else{
        echo "Data has been updated";
        header("refresh:1;url=updatemenu.php");
    }
}
?>