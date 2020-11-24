<?php
session_start();
if(isset($_POST['submit']))
{
require_once("db.php");

 $email=$_POST['email'];
 $password=$_POST['password'];

$sql="select * from registration where email='$email' and password='$password'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)==1)
 {
     
     $_SESSION['aut']='true';
     $_SESSION['mail']="$email";
     header("LOCATION:profile.php");
 }
 else
 {
     echo'<script>alert("Plese check username or password")</script>';
 }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&display=swap" rel="stylesheet">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css" rel="stylesheet">

    <link href="login.css" rel="stylesheet">
    <style>
           *{
            margin:0;
            padding:0;
            font-family:verdana;
        }
        
        #main{
            width:100%;
            height:100%;
            
        }
        nav{
            width:100%;
            height:80px;
        
            background-color:#0006;
            line-height:80px;
}

nav ul{
    float:left;
    margin-right:30px;
}
        nav ul li {
            list-style-type: none;
            display:inline-block;
            transition:0.8s all;
        }
        nav ul li a{
            text-decoration:none;
            color:#fff;
            padding:30px;
        }
        nav ul li :hover{
            background-color:#f39d1a;

        }
        
.user {
    height: 40px;
    width: 40px;

}
.row{
    text-align:center;
}
p{
    font-weight:400;
}
    </style>
</head>
<body>
<div id="main">
        <nav>
    
        <ul>
        <a href="home.php" class="navbar-brand">
    <h4 class="px-3" style="color:white ;font-size:25px">
    <i class="fa fa-arrow-circle-left fa-1x" aria-hidden="true"></i>&nbsp;Back</h4>
    </a>
            
            
        </ul>
    </nav>
    </div>
    <div class="container">
    <img src="512.png">
        <div class="box-title">
            <div class="row">
           
             <div class="col-md-6">
                <h5><a href="register.html">Register</a></h5>
             </div>
             <div class="col-md-6">
                <h5><a href="forgetpassword.php">Forget Password</a></h5>
             </div>
</div>
<h3 style="color:yellow"><center>Login Here</center></h3>
        </div>
            <div class="input">
                <form action="login.php" method="post">
               <p> Enter your email</p>
                   <input type="text" name="email"placeholder="Enter email here">
                <p>Enter your Password</p>
                    <input type="password" name="password" placeholder="*********"><br/><br/>
                     <input type="submit"value="Login" name="submit">
                     
                </form>

            </div>
    </div>
                   
</body>
</html>