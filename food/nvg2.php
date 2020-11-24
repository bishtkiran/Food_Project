<?php
require_once("db.php");

?>
<!doctype html>
<html>
<head>
<title>veg Page</title>
<link href="foodimg.jpg"rel="icon"type="image/ico">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha256-UzFD2WYH2U1dQpKDjjZK72VtPeWP50NoJjd26rnAdUI=" crossorigin="anonymous" />
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<style>

body{
    background-image:url(bgnd.jpg);
    background-size:cover;
    background-repeat:no-repeat;
}

h6
{
    color:#fff;
     margin-top:0px;
     margin-left:50px;
     text-align:center;
     font-size:40px;
     font-family:lucida;
     font-weight:lighter;
}
.product{
            
            margin: -1px 19px 3px -1px;
            padding: 10px;
            text-align: center;
            
        }

.container
{
   margin-top:10px;
}
td,th{
    color:white;
    text-align:center;
}
.fa-star,
        .fa-star-half{
            color:#68FF33  ;
        }
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
        <center><h6>Kabab Section</h6></center>
    </nav>
    </div>
    


            
<div class="container">
<?php
$sql="SELECT * from menu where cat='kabab'";
$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0)
{
    echo "<div class=row>";    
    while($row=mysqli_fetch_assoc($result))
    {
        $mrp=  ceil(($row['price']*(100+$row['discount']))/100);
        ?>
       
            <div class="col-lg-3">
            <table border="2"rules="all">
            <form method="post" action="">
            <div class="product">
           <th> <h5 class="text-info"><?php echo $row["name"]; ?></h5></th>
           <tr>
           <td> <img src="<?php echo $row['image'];?>"height="120px"width="190px"></td></tr>
           <tr><td><i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="far fa-star"></i></td></tr>
       <tr> <td>&#8377;<del><?php echo $mrp;?></del>&nbsp; &#8377;<?php echo $row['price'];?> <span> (<?php echo $row['discount'];?>% off)</span></td></tr>
                               <tr><td> <input type="text" name="quantity" class="form-control" placeholder="Quantity"></td></tr>
                                <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                <input type="hidden" name="hidden_img" value="<?php echo $row["image"]; ?>">
                              <tr> <td> <button type="submit"formaction="buy.php?action=add&id=<?php echo $row["id"]; ?>" name="order" style="margin-top: 5px;" class="btn btn-success"
                                       value="Order Now">Order&nbsp;<i class="fas fa-shopping-bag"></i></button>
                                <button type="submit" formaction="Cart1.php?action=add&id=<?php echo $row["id"]; ?>" name="add" style="margin-top: 5px;" class="btn btn-warning"
                                       value="Add to Cart">My Cart&nbsp;<i class="fas fa-shopping-cart"></i></button></td>
                                       </tr>
                            </div>
                        </form>
                        </table>
                    </div>   
         <?php
    }
  echo  "</div>";
}

?>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



</body>