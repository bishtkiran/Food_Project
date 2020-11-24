

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
    input[type="submit"]
    {
        border-radius:5px;
        height:40px;
        width:200px;
    }
    </style>
</head>
<body>
<center><h3 style="color:white">ADD NEW ITEM</h3><center>
    <form action=insertfood.php method="post">
    <table>
    
    <tr>
    <td>Food Name</td>
    <td><input type="text"name="fname"placeholder="Enter Food Name"></td>
    </tr>
    <tr>
    <td>Food Image</td>
    <td><input type="file"name="fimg"placeholder="Upload Food Image"></td>
    </tr>
    <tr>
    <td>Food Price</td>
    <td><input type="text"name="fprice"placeholder="Enter Food Price"></td>
    </tr>
    <tr>
    <td>Discount</td>
    <td><input type="text"name="dis"placeholder="Enter Discount"></td>
    </tr>
    <tr>
    <td>Food Category</td>
    <td><input type="text"name="cat"placeholder="Enter Category"></td>
    </tr>
    <tr><td> </td>
    <td><input type="submit"value="Add" name="add"></td>
    </tr>
</table>
    </form>
</body>
</html>
