<?php
require_once("db.php");
if(isset($_POST['id']))
{
     $fid=$_POST['id'];
    $ffid="";

    $sql="select id from menu";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_assoc($result))
        {
             $pid=$row['id'];
            if($fid==$pid)
            {
                 $ffid=$row['id'];
            }
        }
    }

    $sql="select * from menu where id=$ffid";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0)
    {
        $row=mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NEW FOOD</title>

    <style>
    body{
        line-height:3;
        font-size:25px;
        background-image: url("bgnd.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        margin: 0;
        padding: 0;
        font-family: sans-serif;
    }
    td{
        font-size:20px;
        color:#fff;
    }
    input[type="text"]
    {
     height: 30px;
    
    font-size: 16px;
    size: 50px;
    border-radius:5px;
    }
    button[type="submit"],
    button[type="reset"]
    {
        border-radius:5px;
        height:40px;
        width:200px;
    }
   
    </style>
</head>
<body>
<center><h3 style="color:white">UPDATE ITEM</h3><center>
    <form action=uupdte.php method="post">
    <table>
    
    <tr>
    <td>Food Name</td>
    <td><input type="text"name="fname"value="<?php echo $row['name'];?>"></td>
    </tr>
    <tr>
    <td>Food Image</td>
    <td><input type="file"name="fimg"value="<?php echo $row['image'];?>"></td>
    </tr>
    <tr>
    <td>Food Price</td>
    <td><input type="text"name="fprice"value="<?php echo $row['price'];?>"></td>
    </tr>
    <tr>
    <td>Discount</td>
    <td><input type="text"name="dis"value="<?php echo $row['discount'];?>"></td>
    </tr>
    <tr>
    <td>Food Category</td>
    <td><input type="text"name="cat"value="<?php echo $row['cat'];?>"></td>
    </tr>
    <input type="hidden" name="pkid" value="<?php echo $row['id']; ?>">
    <tr>
    <td colspan="2"><button type="submit">Update Data</button> <button type="reset">Cancel</button></td> 
</table>
    </form>
</body>
</html>
<?php
    }
}
?>