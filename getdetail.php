<?php
session_start();
$server="localhost";
$username="root";
$password="";
$db="bank";
$con=mysqli_connect($server,$username,$password,$db);
if(!$con)
{
    die("connection to this database failed due to:".mysqli_connect_error());
}
$q="select * from users";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Customers</title>
    <link rel="stylesheet" href="Table.css">
</head>
<body>
<img src="bank10.jpg" alt="bank">
  <br>
 <a href="index.php"> 
 <input type="image" src="home.jpeg" class="home"/>

 </a>

    
    <br><br>
    <h1>Customers</h1>
    <br>
    <table>
        <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Amount</th>
        <th></th>
        </thead>
        <tbody>
            <tr>
                <?php
                        $row=mysqli_fetch_array($result);
                ?>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo  $row["name"]; ?></td>
                <td><?php echo  $row["email"]; ?></td>
                <td><?php echo $row["amount"]; ?></td>
                <td>
                    <form action="user.php" method="post">
                        <button type="submit" name="name" value="Subham" class="view">View</button>
                    </form>
                </td>
            </tr>


            <tr>
                <?php
                        $row=mysqli_fetch_array($result);
                ?>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["amount"]; ?></td>
                <td>
                    <form action="user.php" method="post">
                        <button type="submit" name="name" value="Ajay" class="view">View</button>
                    </form>
                </td>
            </tr>

            <tr>
                <?php
                        $row=mysqli_fetch_array($result);
                ?>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["amount"]; ?></td>
                <td>
                    <form action="user.php" method="post">
                        <button type="submit" name="name" value="Shami" class="view">View</button>
                    </form>
                </td>
            </tr>

                <tr>
                <?php
                        $row=mysqli_fetch_array($result);
                ?>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["amount"]; ?></td>
                <td>
                    <form action="user.php" method="post">
                        <button type="submit" name="name" value="Pritam" class="view">View</button>
                    </form>
                </td>
                </tr>

                <tr>
                <?php
                        $row=mysqli_fetch_array($result);
                ?>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["amount"]; ?></td>
                <td>
                    <form action="user.php" method="post">
                        <button type="submit" name="name" value="Sushil" class="view">View</button>
                    </form>
                </td>
            </tr>
            

            <tr>
                <?php
                        $row=mysqli_fetch_array($result);
                ?>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["amount"]; ?></td>
                <td>
                    <form action="user.php" method="post">
                        <button type="submit" name="name" value="Rishi" class="view">View</button>
                    </form>
                </td>

            </tr>



            <tr>
                <?php
                        $row=mysqli_fetch_array($result);
                ?>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["amount"]; ?></td>
                <td>
                    <form action="user.php" method="post">
                        <button type="submit" name="name" value="Subhu" class="view">View</button>
                    </form>
                </td>

            </tr>


            <tr>
                <?php
                        $row=mysqli_fetch_array($result);
                ?>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["amount"]; ?></td>
                <td>
                    <form action="user.php" method="post">
                        <button type="submit" name="name" value="Rohit" class="view">View</button>
                    </form>
                </td>

            </tr>


            <tr>
                <?php
                        $row=mysqli_fetch_array($result);
                ?>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["amount"]; ?></td>
                <td>
                    <form action="user.php" method="post">
                        <button type="submit" name="name" value="Soumya" class="view">View</button>
                    </form>
                </td>

            </tr>


            <tr>
                <?php
                        $row=mysqli_fetch_array($result);
                ?>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["amount"]; ?></td>
                <td>
                    <form action="user.php" method="post">
                        <button type="submit" name="name" value="Nabin" class="view">View</button>
                    </form>
                </td>

            </tr>
        </tbody>
    </table>
</body>
</html>
