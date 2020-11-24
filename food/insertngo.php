<?php

require_once("db.php");
if(isset($_POST['done']))
{
$name=$_POST['name'];
$pass=$_POST['pswrd'];
$fpass=$_POST['cpswrd'];
$email=$_POST['email'];
$phone=$_POST['contact'];
$add=$_POST['addr'];


$sql="insert into NgoRegistration(Name,Password,Cpassword,Email,Contact,Address) Values('$name','$pass','$fpass','$email','$phone','$add')";

if(mysqli_query($con,$sql))
{
    echo "<h1><center>Registered Successfully<center></h1>";

}
else
{
    echo "Something went wrong".mysqli_error($con);
}
}
?>

