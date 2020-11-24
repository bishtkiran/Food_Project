<?php
require_once("db.php");

if(isset($_POST['email']))
{
    $mail=$_POST['email'];
    $e="";
    $sql="select * from registration";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0)
{
        while($row=mysqli_fetch_assoc($result))
    {
        $f=$row['email'];
        if($f==$mail)
        {
            echo $e=$row['email'];
            break;
        }
    }
}

$sql1="select * from registration where email='$e'";
$result=mysqli_query($con,$sql1);
if(mysqli_num_rows($result)>0)
{
        $row=mysqli_fetch_assoc($result);
          ?>

        <form action=update.php method=post>
        <table>
           
           
          <tr><td>Username </td><td><input type="text"name="usrname" value="<?php echo $row['username'];?>"></tr>
          <tr><td>Email</td><td><input type="text"name="mail" value="<?php echo $row['email'];?>"></td></tr>
            <tr><td>Password</td><td><input type=text name="pwd"></td></tr>
            <tr><td>CPassword</td><td><input type="text"name="cpass"></td></tr><br/><br/>
            <tr><input type=hidden name=id value="<?php echo $row['pk_id'];?>"></tr>
            
            <button>Change</button>
  
            
    </table>
    </form>
        
<?php
   
    }
}

?>