<?php
require_once("db.php");

if(isset($_POST['done']))
{
$mail=$_POST['mail'];
 $name=$_POST['nm'];
 $price=$_POST['pce'];
 $quantity=$_POST['qnt'];
 $total=$_POST['tot'];

  $sql="select * from registration where email='$mail'";
  $sql1="select * from menu where name='$name'";
  $result=mysqli_query($con,$sql);
  $result1=mysqli_query($con,$sql1);

  if(mysqli_num_rows($result)>0)
  {
      while($row=mysqli_fetch_assoc($result))
      {
          if(mysqli_num_rows($result1)>0){
          while($row1=mysqli_fetch_assoc($result1)){
          ?>

          <!DOCTYPE html>
          <html lang="en">
          <head>
              <meta charset="UTF-8">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <meta http-equiv="X-UA-Compatible" content="ie=edge">
              <title>Order</title>

              <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

              <link href="buy1.css" rel="stylesheet">
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
          <table rules="all" align="center" border="5px" >
            <center><h3><u>ORDER DETAILS</u><h3></center>
            <tr>
            <td colspan="2"><center>YOUR BILL RECEIPT<center></td></tr>
             <tr>
              <td>Item Id</td>
              <td><?php echo $row1['id'];?></td>
              </tr>
              <tr>
              <td>Customer's Name</td>
              <td><?php echo $row['name'];?></td>
              </tr>
              <tr>
              <td>Customer's Email</td>
              <td><?php echo $row['email'];?></td>
              </tr>
              <tr>
              <tr>
              <td>Customer's Address</td>
              <td><?php echo $row['address'];?></td>
              </tr>
              <tr>
              <td>Contact Number</td>
              <td><?php echo $row['mobile'];?></td>
              </tr>
              <td>Item Name</td>
              <td><?php echo $row1['name'];?></td>
              </tr> 
              <tr>
              <td>Quantity</td>
              <td><?php echo $quantity;?></td>
              </tr>
              <tr>
              <td>Price</td>
              <td>&#8377;<?php echo $price;?></td>
              </tr>
              <tr>
              <td>Date & Time</td>
              <td><?php date_default_timezone_set('Indian/Reunion');
              echo date('d-m-y H:i');?></td>
              </tr>
             <tr>
              <td>Delivery Charges</td>
              <td>FREE</td>
              </tr>
              <tr>
              <td>Amount Payable</td>
              <td>&#8377;<?php echo $total;?></td>
              </tr>
              <tr>
              <td colspan="2">
              <center> <button type="submit" class="btn btn-primary mx-2"><a href="#">Pay Bill</button></a>
              <button type="submit" class="btn btn-warning mx-2" name="remove"><a href="#">Print Bill</button></a></center></td>
              </tr>
          </body>
          </html>
          <?php


   $name;
   $id=$row1['id'];
   $email=$_POST['mail'];
   $n=$row['name'];
   $m=$row['mobile'];
   $price=$_POST['tot'];
   $quantity=$_POST['qnt'];

 $query="INSERT INTO `orderdtl`(`username`, `email`, `mobile`, `itemid`, `itemname`, `quantity`, `amount`) VALUES ('$n','$email','$m','$id','$name','$quantity','$price')";
 mysqli_query($con,$query);
      }
  }
}
  }

  
}

?>