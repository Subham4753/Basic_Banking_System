<?php
session_start();
$server="localhost";
$username="root";
$password="";
$db="bank";

$con=mysqli_connect($server,$username,$password,$db);

if(! $con)
{
    die ("Connection failed due to".mysqli_connect_error());
}

$name1 = $_SESSION['name'];
$q="select * from users where name not like '$name1'";
$result=mysqli_query($con, $q);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer</title>
    <link rel="stylesheet" href= "transferto.css">
    
</head>
<body>
<img src="bank8.jpg" alt="bank">

<br>
<a href="index.php"> 
 <input type="image" src="home.png" class="home"/>
 </a>
 <br>
 <h1>Transfer Amount</h1>
 <br> <br>
    <div>
    <form action="check_transfer.php" method="post">    
    <table>
            <tr>
                <td>
                    <label for="sender">Receiver Name :</label>
                    &nbsp;
                </td>
                <td>
                    <select name="receiver" style="width: 257px; height:33px ;cursor:pointer;font-size:medium;">
                        <?php while($row=$result->fetch_assoc()){?>
                        <option value="<?php echo $row['name'];?>"> <?php echo $row['name'];?> </option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
                <br>
            <tr >
                <td>
                    <label for="transfer">Amount:</label>
                    <!--&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;-->
                </td>
                <td>
                    <input type="number" name="transfer" required style="width: 242px;">
                </td>
            </tr>

            <tr>
                
                <td>
                    <button type="submit" value="credit" class="view" >Transfer</button>
                    
                </td>
            </tr>
        </table>
                        
    </form>
    </div>
 
    <br>


 <form action="user.php" method="post">
     <button class="transferto" name="name" type="submit" value="<?php echo $name1 ?>">Back</button>
 </form>

</body>
</html>