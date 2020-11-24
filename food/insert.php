<?php

require_once("db.php");
if(isset($_POST['done']))
{
$uname=$_POST['usrname'];
$name=$_POST['name'];
$pass=$_POST['pswd'];
$fpass=$_POST['fpswrd'];
$gen=$_POST['gender'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$add=$_POST['addr'];


$sql="insert into Registration(name,username,password,fpassword,gender,email,mobile,address) Values('$name','$uname','$pass','$fpass','$gen','$email','$phone','$add')";

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

