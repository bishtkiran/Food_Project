<?php
require_once("db.php");

if(isset($_POST['email']))
{
    $mail=$_POST['email'];
    $e="";
    $sql="select * from registration";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0)
{
        while($row=mysqli_fetch_assoc($result))
    {
        $f=$row['email'];
        if($f==$mail)
        {
             $e=$row['email'];
            break;
        }
    }
}

$sql1="select * from registration where email='$e'";
$result=mysqli_query($con,$sql1);
if(mysqli_num_rows($result)>0)
{
        $row=mysqli_fetch_assoc($result);
          ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset Password Page</title>
    <style>
       
        body
        {
            font-family: Calibri;
            font-size:20;
            line-height:2;
            background-image:url("bgnd.jpg");
            background-size:cover;
            background-repeat:no-repeat;

        }
        textarea
        {
            resize:none;
        }
        h1
        {
            margin-top:260px;

        }
       
        td {
            font-size: 20px;
        }
        
        input[type="text"],
        input[type="password"] {
            height: 30px;
            font-size: 16px;
            width: 200px;
        }
        
        input[type="submit"],
        input[type="reset"] {
            height: 40px;
            width: 200px;
            border-radius: 10px;
            margin-top:10px;
        }
        
    
    </style>

    </head>
<body text="white">
    <h1><center> Change Password here </center></h1>
    <form action="update.php" method="post">
       
        <table align="center">
        <tr>
                        <td><b>Username:</b></td>
                        <td><input type="text"name="usrname" value="<?php echo $row['username'];?>"></td>
                    </tr>
                    <tr>
                        <td><b>Email:</b></td>
                        <td><input type="text"name="mail" value="<?php echo $row['email'];?>"></td>
                    </tr>
            
                    
                <tr>
                        <td><b>Enter New Password:</b></td>
                        <td><input type="password"name="pwd"placeholder="**********"maxlength="30"size=30></td>
                    </tr>
                    <tr>
                            <td><b>Confirm Password:</b></td>
                            <td><input type="password"name="cpass"placeholder="**********"maxlength="30"size=30></td>
                            
                        </tr>
                      <tr>  <input type=hidden name=id value="<?php echo $row['pk_id'];?>"></tr>
                
                      <tr>

<td><input type="submit" value="Change Password" name="done"></td>
<td><input type="reset" value="Cancel"></button>
</td>
</tr>
                                                        
        </table>


    </form>

    </body>
</html>
<?php
}
}
?>