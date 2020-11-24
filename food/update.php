<?php

    require_once("db.php");
    $sid=$_POST["id"];
    $uname=$_POST["usrname"];
    $e=$_POST["mail"];
    $pswd=$_POST["pwd"];
    $pass=$_POST["cpass"]; 
    
        $sql="Update registration SET password='$pswd',fpassword='$pass' where pk_id='$sid'";
    
        if(mysqli_query($con,$sql))
        {
            echo "Password changed successfully";
            header("refresh:2;url=forgetpassword.php");
    
        }
    
        else{
           echo "The requested email doesn't exist".mysqli_error($con);
        }

        
    
    ?>