
<?php
session_start();
require_once("db.php");


if(!$_SESSION['aut'])
{
    header("LOCATION:log.php");
    echo "Please login first";
}
?>
 
<h6 style="color:#ff267e;font-size:20px;text-align:right;margin:0px;"><img src="ad.jpg" class="user"> <strong>Admin</strong><a href="logout.php">&nbsp;&nbsp;Logout</a></h6>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main Menu</title>

    <style>
        * {
            margin: 0px;
            padding: 0px;
        }
        
        body {
            background-image: url("bgnd.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            margin: 0px;
        }
        
        #container ul {
            list-style: none;
            margin-left: 200px;
        }
        
        #container ul li {
            background-color: #262626;
            width: 150px;
            border: 1px solid white;
            height: 50px;
            line-height: 50px;
            text-align: center;
            float: left;
            color: #efed40;
            font-size: 25px;
            position: relative;
        }
        
        #container ul li:hover {
            background-color: rgb(235, 51, 106);
        }
        
        #container ul ul {
            display: none;
            margin-left: 0px;
        }
        
        #container ul li:hover>ul {
            display: block;
        }
        a
        {
            text-decoration:none;
            color: #262626;
        }
        .user
        {
            margin-top:15px;
            height:17px;
            width:15px;
            margin:0px;
            padding:0px;
            
        }
        h6{
            border-style:solid;
            border-radius:5px;
            border-color:#262626;
            float:right;
            padding:5px;
        }
        .box{
            height:500px;
            width:1000px;
            position:absolute;
            margin-top:200px;
            margin-left:200px;
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
div#slider { overflow: hidden; }
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

        

    </style>
</head>

<body>
    <div class="menu-design">
    </div>
    <div id="container">
        <ul>
            <li>Home</li>
            <li>View Details
                <ul>
                    <li><a href="viewuser.php"value="view user">View Users</a></li>
                    <li><a href="vieworder.php"value="view order">View Orders</a></li>
                    <li><a href="viewmenu.php"value="view menu">View Menu</a></li>
                    <li><a href="viewfbk.php"value="view fback">Feedback</a></li>
                </ul>
            </li>
            <li>Add
                <ul>
                    
                    <li><a href="newfood.php"value="Add Food">Add Food</a></li>

                </ul>
            </li>
            <li>Update
                <ul>
                    <li><a href="updatemenu.php"value="Add Food">Update Menu</a></li>
                    
                </ul>
            </li>
            <li>Remove
                <ul>
                    <li><a href="deletefood.php"value="delf">Remove Food</a></li>
                    <li><a href="deleteuser.php"value="delu">Remove User</a></li>
                </ul>
            </li>
            <li>Help</li>
        </ul>
    </div>
    <div class="box">
    
<div id="slider">
<figure>
<img src="ek.jpg" height="400px" width="0px" alt>
<img src="do.jpg" height="400px" width="0px"alt>
<img src="cpotato.jpg"height="400px" width="0px" alt>
<img src="dahi.jpg" height="400px" width="0px"alt>
<img src="chaar.jpg" height="400px" width="0px"alt>
</figure>
</div>
</div>
   

</body>

</html>