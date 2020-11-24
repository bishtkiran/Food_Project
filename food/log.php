<?php
if($_POST)
{
require_once("db.php");

$username=$_POST['username'];
$password=$_POST['password'];

$sql="select * from registration where username='$username' and password='$password'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)==1)
 {
     session_start();
     $_SESSION['aut']='true';
     header("LOCATION:admin.php");
 }
 else
 {
     echo"<h2 margin:20px;padding:20px;><center>Plese check username or password<center><h2> ";
 }
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login form</title>
    <link rel="stylesheet" href="log.css" type="text/css">
</head>

<body>
    <div class="login-box">
        <img src="ad.jpg" class="user">
        <h2>Log In Here</h2>
        <form action="log.php" method="post">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="**********"><br/>
            <input type="submit" name="btn" value="Sign In"><br/>
            <a href="forgetpassword.php">Forget Password</a>
        </form>
    </div>
</body>

</html>