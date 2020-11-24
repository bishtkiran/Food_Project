<?php
session_start();
require_once("db.php");
if(!$_SESSION['aut'])
{
    header("LOCATION:login.php");
    echo "<script>alert('Please register first')";
}
else{

    if(isset($_SESSION['aut']))
    {
          $m=$_SESSION["mail"];
        $sql="select * from registration where email='$m'";
        $result=mysqli_query($con,$sql);

        if(mysqli_num_rows($result)>0)
        {
            while($row=mysqli_fetch_assoc($result))
            {?>
             
    

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Profile Page</title>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css" rel="stylesheet">

        <style>
            body {
    background-image: url("bgnd.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    color: #fff;
}
input[type="text"]
{
    border-radius:2px;
    width:250px;
    height:30px;
}
textarea{
    border-radius:2px;
}
input[type="submit"],
input[type="reset"]
{
    border-radius:2px;
    padding-top:10px;
    margin-top:60px ;
    width:150px;
}

table,
td {
    color: #fff;
    line-height:2;
    font-size:20px;
    margin-left:400px;
}


h3 {
    margin-top:80px;
    font-size: 35px;
    font-weight: 400;
}

.user {
    height: 40px;
    width: 40px;

}
textarea{
    resize:none;
}
h6{
    color:#ff267e;
    font-size:25px;
    text-align:right;
    margin:0px;
}

        *{
            margin:0;
            padding:0;
            font-family:tahoma;
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
            text-decoration:none !important;
            color:#fff;
            padding:30px;
        }
        nav ul li :hover{
            background-color:#f39d1a;

        }
        .content-title h2{
            text-transform:uppercase;
            font-size:50;
            color:#fff;
            text-align:center;
            padding:80px;
        }
        button{
            width:140px;
            height:40px;
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
          <div class="row">
        
            <table align="center">
            <form action="udte.php" method="post">
            <tr>
        <td height="26" colspan="2"><h3>Your Profile Information</h3> </td>
        
      </tr>
                <tr>
                    <td><b>Name:</b></td>
                    <td><input type="text" name="name" value="<?php echo $row['name'] ?>"></td>
                </tr>
                <tr>
                    <td><b>Userame:</b></td>
                    <td><input type="text" name="usrname" value="<?php echo $row['username']?>"></td>
                </tr>
                <tr>
                    
                <tr>
                    <td><b>Email:</b></td>
                    <td><input type="text" name="email"value="<?php echo $row['email']?>"></td>
                </tr>
                <tr>
                    <td><b>Mobile:</b></td>
                    <td><input type="text" name="phone"value="<?php echo $row['mobile']?>"></td>
                </tr>
                <tr>
                    <td><b>Address:</b></td>
                    <td><textarea rows="4" cols="30" name="addr"><?php echo $row['address'];?></textarea></td>
                </tr>
                <tr><input type="hidden" name=id value="<?php echo $row['pk_id'];?>"></tr>
                 <tr>
                 <td>&nbsp;&nbsp;<button type="submit">Update</button>&nbsp;</td>
                 <td><button type="reset">Cancel</button></td>
                 </tr>
               
            </table>
    </form>
    </div>
      </div>  
    </body>
    </html>
    <?php
    }
        }
    }
    
    }
    ?>

   