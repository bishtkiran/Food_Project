<?php
require_once("db.php");

if(isset($_POST['fbk']))
{
$n=$_POST['name'];
 $e=$_POST['email'];
 $r=$_POST['rate'];
 $msg=$_POST['msg'];


$sql="INSERT INTO `feedback`( `username`, `email`, `rate`, `comments`) VALUES ('$n','$e','$r','$msg')";
if(mysqli_query($con,$sql))
{
    echo "<script>alert('Thank You for your valuable Feedback')";
    header("LOCATION:home.php")
}
else{
    echo "Please login first";
}

}

?>