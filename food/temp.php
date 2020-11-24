<?php
session_start();
require_once("db.php");

?>


<!doctype html>
<html>
<head>
<title>Menu Page</title>
<link href="foodimg.jpg"rel="icon"type="image/ico">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha256-UzFD2WYH2U1dQpKDjjZK72VtPeWP50NoJjd26rnAdUI=" crossorigin="anonymous" />
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

<style>
 @import url('https://fonts.googleapis.com/css?family=Titillium+Web');
        *{
            font-family: 'Titillium Web', sans-serif;
        }
body
    {
    background-image:url("bgnd.jpg");
    background-repeat:no-repeat;
    background-size:cover;
}

h6
{
    text-align:right;
    margin-right:20px;
}


h2
{
    color:#fff;
     margin-top:0px;
     margin-left:50px;
     font-size:60px;    
     font-weight:lighter;
}
.slider-frame
{   
    overflow: hidden;
    border-style:solid;
    border-radius:10px;
    height:200px;
    width:1347px;
    margin-left:0px;
    margin-top: 60px;
    padding:0px;
    border-color:#fff;
    border-width:1px;
}
.catr-frame
{

    overflow: hidden;
    height:3585px;
    width:255px;
    margin-left:0px;
    margin-top:10px;
    float:left;
    color:#fff;
    font-size:30px;   
    padding:5px;
    
}
.cat-frame
{
    
    overflow: hidden;
    height:3585px;
    width:255px;
    margin-left:25px;
    margin-top:10px;    
    float:right;
    color:#fff;
    font-size:30px;    
    padding:5px;
}
@-webkit-keyframes slide_animation{
    0% {left:0px;}
   10% {left:0px;}
    20% {left:1200px;}
    30% {left:1200px;}
    40% {left:2400px;}
    50% {left:2400px;}
    60% {left:1200px;}
    70% {left:1200px;}
    80% {left:0px;}
    90% {left:0px;}
    100% {left:0px;}
}
.slide-images{
    width:80%;
    height:200px;
    margin:0 0 0-2200px;
    position:relative;
    -webkit-animation-name: slide_animation;
    -webkit-animation-duration:20s;
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-direction:alternate;
    -webkit-animation-play-state:running;
}
.img-container{
    height:800px;
    width:1200px;
    position:relative;
    float:left;
    

}

.container
{
   /*border-style:solid;>*/
    border-radius:5px;
    margin-top:10px;
    border-color:#fff;
    border-width:.5px;
    
    
}
.product{
            
            margin: -1px 19px 3px -1px;
            padding: 10px;
            text-align: center;
            
        }
td,th{
    color:white;
    text-align:center;
    
}
.text-info{
            font-weight:500;
            font-size:22px;
            color:#fff;
        }
        h5{
            color:#fff;
        }
        #p1{
            font-size:15px;
        }

        .fa-star,
        .fa-star-half{
            color:#45F726;
        }
       

</style>
</head>


<body >
    <?php require_once("header.php");?>


<div class="slider-frame">
<p style="color:white;font-size:24px;"><marquee behavior="alternate"><strong>GET ALL TYPES OF FOOD IN AFFORDABLE PRICE WITH EXCITING DISCOUNTS TO AVAIL THE FACILITY ORDER NOW!!!!!<strong></marquee></p>
    <div class="slide-images">
         <div class="img-container">
       <img src="pizza.jpg"width="150px"height="150px"border="2px">
<img src="picm.jpg"width="150px"height="150px"border="2px">
<img src="burger.jpg"width="150px"height="150px"border="2px">
<img src="paneer-tikka.jpg"width="150px"height="150px"border="2px">
<img src="138.jpg"width="150px"height="150px"border="2px">
<img src="promo.jpg"width="150px"height="150px"border="2px">
<img src="apt.jpg"width="150px"height="150px"border="2px">
</div>
</div>
</div>


<div class="catr-frame">
    <div class="catr-images">
       <div class="catr-container float:left">
       <h3 FONT-SIZE:"30PX"><center>CATEGORIES</center></h3>
       <div class="container1">
                <h4 style="color:yellow"><center><b>VEG SECTION</center></b></h4>
                <center><img src="veg.jpg" height="100px" width="150px"></center>
            </div><br/>
            <h4><center> <a href="cat.php"><button class="btn-btn-lg" style="background-color:#262626;color:#efefef;">INDIAN</button></a></center></h4><br/>
            <h4> <center> <a href="chin.php"><button class="btn-btn-lg" style="background-color:#262626;color:#efefef;">CHINESE</button></a></center></h4><br/>
             <h4> <center> <a href="sth.php"><button class="btn-btn-lg" style="background-color:#262626;color:#efefef;">SOUTH-INDIAN</button></a></center></h4><br/>
             <h4><center> <a href="veg.php"><button class="btn-btn-lg" style="background-color:#262626;color:#efefef;">FAST-FOOD</button></a></center></h4><br/>
             <h4><center> <a href="hth.php"><button class="btn-btn-lg" style="background-color:#262626;color:#efefef;">HEALTHY</button></a></center></h4><br/>
             <h4><center> <a href="sweet.php"><button class="btn-btn-lg" style="background-color:#262626;color:#efefef;">SWEET</button></a></center></h4><br/>
    </div>

<div class="conatiner">
<h4 style="color:yellow"><center><b>NON-VEG SECTION</center></b></h4>
<center><img src="52.png" height="100px" width="150px"></center>
    </div><br/>
    <h4><center> <a href="nvg.php"><button class="btn-btn-lg" style="background-color:#262626;color:#efefef;">CHICKEN</button></a></center></h4><br/>
    <h4> <center> <a href="nvg1.php"><button class="btn-btn-lg" style="background-color:#262626;color:#efefef;">MUTTON</button></a></center></h4><br/>
    <h4> <center> <a href="nvg2.php"><button class="btn-btn-lg" style="background-color:#262626;color:#efefef;">KABAB</button></a></center></h4><br/>      
</div>
</div>
</div>
<div class="cat-frame">
    <div class="cat-images">
       <div class="cat-container float:right">
       <h3 FONT-SIZE:"30PX"><center>SPECIAL OFFERS</center></h3>
    
       <center> <img src="pigza.jpg" height="100px";width="100px" border="2px"><center>
        <p id="p1">BUY 2 at JUST &#8377;100</p><br/>
        <center> <img src="brgr.jpg" height="100px";width="100px" border="2px"><center>
        <p id="p1">BUY 2 at JUST &#8377;40</p><br/>
        <center> <img src="roll.jpg" height="100px";width="100px" border="2px"><center>
        <p id="p1">BUY 2 at JUST &#8377;60</p><br/>
        <center> <img src="NA.jpg" height="100px";width="100px" border="2px"><center>
        <p id="p1">BUY at JUST &#8377;50</p><br/>
        

       
       
</div>
</div>
</div>




<div class="container">
<?php

$sql="select * from menu where active=1";
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
                                <button type="submit" formaction="mycart.php?action=add&id=<?php echo $row["id"]; ?>" name="add" style="margin-top: 5px;" class="btn btn-warning"
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


