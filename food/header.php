<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css" rel="stylesheet">
    <style>
    #cart_count{
    text-align: center;
    padding: 0 0.9rem 0.1rem 0.9rem;
    border-radius: 3rem;
}

.shopping-cart{
    padding: 3% 0;
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


</style>
</head>

</html>
<header id="header">
    <nav class="navbar navbar-expand-lg fixed-top">
    <a href="home.php" class="navbar-brand">
    <h5 class="px-3" style="font-size:25px">
    <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>&nbsp;Back</h5>
    </a>
        <a href="temp.php" class="navbar-brand">

            <h1 class="px-5" style="color:white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MENU</h1>
        </a>
    
        <button class="navbar-toggler"type="button"data-toggle="collapse"
                data-target = "#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav">
                <a href="cart1.php" class="nav-item nav-link active">
                    <h5 class="px-5 cart">
                        <i class="fas fa-shopping-cart"></i> Cart
                        <?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                        }else{
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                        }

                        ?>
                    </h5>
                </a>
            </div>
        </div>

    </nav>
</header>






