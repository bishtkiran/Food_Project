<?php
require_once("db.php");
if(isset($_POST['id']))
{
echo $id=$_POST['id'];
$nm=$_POST['name'];
$unm=$_POST['usrname'];
$m=$_POST['email'];
$ph=$_POST['phone'];
$ad=$_POST['addr'];

$sql="update registration set name='$nm',username='$unm',email='$m',mobile='$ph',address='$ad' where pk_id=$id";

$res=mysqli_query($con,$sql);

if(!$res)
{
    echo"Something went wrong".mysqli_error($con);
}
else{
    echo"Updated Successfully";
    header("LOCATION:profile.php");
}
}

?>