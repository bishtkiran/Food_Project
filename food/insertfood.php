<?php
require_once("db.php");

if(isset($_POST['add']))
{

    $name=$_POST['fname'];
    $img=$_POST['fimg'];
    $price=$_POST['fprice'];
    $dis=$_POST['dis'];
    $cat=$_POST['cat'];

    $sql="insert into menu(name,image,price,discount,cat) values('$name','$img','$price','$dis','$cat')";

    $record=mysqli_query($con,$sql);
    if(!$record)
    {
        echo "something went wrong".mysqli_error($con);
    }
    else{
        echo "Item Inserted Successfully";
    }
}