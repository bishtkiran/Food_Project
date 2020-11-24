<?php
 session_start();
require_once("db.php");
 
if(isset($_POST['order']))
{
    $id=$_GET['id'];
    $img=$_POST['hidden_img'];
    $name=$_POST['hidden_name'];
    $price=$_POST['hidden_price'];
    $qty=$_POST['quantity'];

    $sql="select * from menu where id=$id";
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
        <title>Order Page</title>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">



         
         <link href="buy.css" rel="stylesheet">
         <style>
             #main{
            width:100%;
            height:100%;
            
        }
        nav{
            width:100%;
            height:80px;
        
            background-color:#0006;
            line-height:0px;
}

nav ul{
    float:left;
    margin-right:30px;
}
nav ul a{
    text-decoration:none;
}
h4{
    margin-top:20px;
}
             </style>
    </head>
    <body>
    <div id="main">
        <nav>
    
        <ul>
        <a href="temp.php" class="navbar-brand">
    <h4 class="px-3" style="color:white ;font-size:25px">
    <i class="fa fa-arrow-circle-left fa-1x" aria-hidden="true"></i>&nbsp;Back</h4>
    </a>
            
            
        </ul>
    </nav>
    </div>
        <div class="container">
        <h2><center><u>CONFIRM ORDER<u><center></h2>
            <div class="item-image">
               <center> <img src="<?php echo $img;?>" height="200px" width="265px"></center>
            </div>
            <table rules="none"><tr>
        <td><div class="item-name">
             <center><h4>ITEM-NAME&nbsp;&nbsp;&nbsp;<?php echo $name;?></h4></center>
        </div>
        
        <div class="item-price">
            <center> <h4>PRICE&nbsp;&nbsp;&nbsp;&#8377;<?php echo $price;?></h4></center>
        </div>
        
        <div class="item-qty">
             <center><h4>QUANTITY&nbsp;&nbsp;&nbsp;<?php echo $qty;?></h4></center>
        </div>
        <div class="item-total">
             <center><h4>TOTAL&nbsp;&nbsp;&nbsp;&#8377;<?php echo $total=($qty*$price);?></h4></center>
        </div></td></tr>
        <form action="buy1.php"method="post">
        <tr><td> <center><input type="text"name="mail"placeholder="Enter your email"><br/><br/></td></tr></center>
        <tr><td> <center><input type="submit"value="Place Order" name="done">&nbsp;&nbsp;<input type="reset"value="Cancel Order"name="undone"></td></tr></center>
        <input type="hidden" name="nm"value="<?php echo $name;?>">
        <input type="hidden" name="pce"value="<?php echo $price;?>">
        <input type="hidden" name="qnt"value="<?php echo $qty;?>">
        <input type="hidden" name="tot"value="<?php echo $total=($qty*$price);?>">
        </div>
            
        
    </body>
    </html>
    <?php
}
}
}

?>