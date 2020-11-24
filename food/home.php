<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    
       <style>
        *{
            margin:0;
            padding:0;
            font-family:verdana;
        }
        body {
            background-image: url("xtzr-.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            
        }
        #main{
            width:100%;
            height:100%;
            
        }
        nav{
            width:100%;
            height:60px;
        
            background-color:#0006;
            line-height:60px;
}
#main1 nav{
    margin-top:700px;
}
nav ul li img
{
    margin-top:10px;
}

nav ul{
    float:right;
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
            padding:20px;
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
        .box{
            height:700px;
            width:90%;
            position:absolute;
            margin-top:50px;
            margin-left:60px;
            animation-name: slideranimtion;
            animation-duration:20s;
            animation-iteration-count:infinite;
        }

@keyframes slidy {
0% { left: 0%; }
20% { left: 0%; }
25% { left: -100%; }
45% { left: -100%; }
50% { left: -200%; }
70% { left: -200%; }
75% { left: -300%; }
95% { left: -300%; }
100% { left: -400%; }
}

body { margin: 0; } 
div#slider { overflow: hidden; height:650px;}
div#slider figure img { width: 20%; float: left; }
div#slider figure { 
  position: relative;
  width: 500%;
  margin: 0;
  left: 0;
  text-align: left;
  font-size: 0;
  animation: 30s slidy infinite; 
}
nav{
    color:#fff;
}

 </style>
</head>
<body>
    
    <div id="main">
        <nav>
          <img src="logo.jpg" width="200px" height="60px"/>  
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="temp.php">View Menu</a></li>
            <li><a href="cart1.php">View Cart</a></li>
            <li><a href="feedback.php">Feedback</a></li>
            <li><a href="registerngo.php">Social</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
            
        </ul>
    </nav>
    </div>
    <div class="box">
    
<div id="slider">
<h2 style="color:#efefef;font-size:30px"><center>Welcome to the best place for all foodies!!!!!</center></h2>
<figure>
<img src="roll.jpg" height="400px" width="0px" alt>
<img src="addd.jpg" height="400px" width="0px"alt>
<img src="cpotato.jpg"height="400px" width="0px" alt>
<img src="00.jpg"height="400px" width="0px" alt>
<img src="dog.jpg"height="400px" width="0px" alt>

</figure>
</div>
</div>
<div id="main1">
        <nav>
        &nbsp;&nbsp;Copyright &copy; All rights reserved
            
           <ul>
           <li ><a href="#">Follow us on:</a></li>
           <li><img src="fb.png" height="35px"height="35px"></li>
           <li><img src="twt.png" height="35px"height="35px"></li>
           <li><img src="ist.png" height="35px"height="35px"></li>
           </ul>       
    </nav>
    </div>

       
   
</body>
</html>