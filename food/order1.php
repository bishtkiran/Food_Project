<?php
 session_start();
require_once("db.php");
 if (isset($_POST["add"])){
        if (isset($_SESSION["cart"])){
            $item_array_id = array_column($_SESSION["cart"],"product_id");
            if (!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'product_id' => $_GET["id"],
                    'item_name' => $_POST["hidden_name"],
                    'item_img' => $_POST["hidden_img"],
                    'product_price' => $_POST["hidden_price"],
                    
                    'item_quantity' => $_POST["quantity"],
                );
                $_SESSION["cart"][$count] = $item_array;
                echo '<script>window.location="Cart1.php"</script>';
            }else{
                echo '<script>alert("Product is already Added to Cart")</script>';
                echo '<script>window.location="Cart1.php"</script>';
            }
        }else{
            $item_array = array(
                'product_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'item_img' => $_POST["hidden_img"],
                'product_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"],
            );
            $_SESSION["cart"][0] = $item_array;
        }
    }
    

    if (isset($_GET["action"])){
        if ($_GET["action"] == "order"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["cart"][$keys]);
                    echo '<script>alert("order Product!")</script>';
                    echo '<script>window.location="order1.php?action=order&id=$value["product_id"] ;"</script>';
                }
            }
        }
    }



if(isset($_GET["id"]))
{ 
    
    $id=$_GET['id'];
    $img=$value['item_img'];
    $name=$value['item_name'];
    $price=$value['product_price'];
    $qty=$value['item_quantity'];

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
         
         <link href="buy.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
        <h2><center><u>CONFIRM ORDER</u><center></h2>
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