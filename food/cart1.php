<?php
    session_start();
    require_once("db.php");
    
    if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["cart"][$keys]);
                    echo '<script>alert("Product has been Removed...!")</script>';
                    echo '<script>window.location="Cart1.php"</script>';
                }
            }
        }
    }

  
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Cart</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="common.css"rel="stylesheet"type="text/css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Titillium+Web');
        *{
            font-family: 'Titillium Web', sans-serif;
        }
        
        table, th{
            text-align: center;
            font-size:25px;
            font-weight:400;
        }
        td{
            color:#fff;
            font-size:20px;
        }
        .title2 {
            text-align: center;
            color: #66afe9;
            padding: 2%;
            font-size:25px;
            text-align:center;
            text-transform:uppercase;

        }
        .container h2{
            text-align: center;
            color: #66afe9;
            text-transform:uppercase;
            padding: 0%;
            font-size:40px;
        }
               
        .text-danger{
            font-size:20px;
            font-weight:bold;
        }
        img{
            margin-left:10px;
            float:right;
            padding:3px;
        }
        button {
    height: 40px;
    width: 120px;
}
        button a{
            color:#fff;
            text-decoration:none;
            font-size:20px;
            font-weight:400;
            padding:100px 0;
            
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
            text-decoration:none;
            color:#fff;
            padding:30px;
        }
        nav ul li :hover{
            background-color:#f39d1a;

        }
        h1{
            margin-top: 0;
    margin-bottom: 10px
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
    <a href="cart1.php" class="navbar-brand">
    <h1 class="px-5" style="color:white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;My Cart</h1>
    </a>   
            
        </ul>
    </nav>
    </div>

    <div class="container" style="width: 80%">

        <div style="clear: both"></div>
        <h3 class="title2"> Cart Details</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th width="30%">Item Name</th>
                <th width="10%">Quantity</th>
                <th width="13%">Price Details</th>
                <th width="10%">Total Price</th>
                <th width="17%" colspan="2">Operation</th>
            </tr>

            <?php
                if(!empty($_SESSION["cart"])){
                    $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
                        ?>
                        <tr>
                            <td><?php echo $value["item_name"]; ?><img src="<?php echo $value["item_img"]; ?>" height="65px" width="65px"></td>
                            
                            <td><?php echo $value["item_quantity"]; ?></td>
                            <td> <?php echo $value["product_price"]; ?></td>
                            <td> <?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?></td>
                            <td><button type="submit" class="btn btn-success"><a href="order1.php?action=order&id=<?php echo $value["product_id"]; ?>">Order</button></a></td>
                            <td> <button type="submit" class="btn btn-danger mx-2" name="remove"><a href="Cart1.php?action=delete&id=<?php echo $value["product_id"]; ?>">Remove</button></a></td>
                                        
                               
                        </tr>
                        <?php
                        $total = $total + ($value["item_quantity"] * $value["product_price"]);
                    }
                        ?>
                        <tr>
                            <td colspan="3" align="right">Total</td>
                            <th align="right"><?php echo number_format($total, 2); ?></th>
                            <td></td>
                        </tr>
                        <?php
                    }
                    
                ?>
            </table>
        </div>

    </div>
</body>
</html>