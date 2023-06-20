<!DOCTYPE html>
<?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>
<html>
    <title>
    Axis Bank
    </title>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body >
        <div class="navbar">
            <div class="items">
                <img src="templates/logo1.png" width="100px" height="65px">
                
                <h1 style="color: blue;">  Axis Bank </h1>
               
               
                <a href="home.php">Home</a>
          
                <a href="customers.php">View Customers</a>
                <a href="transactions.php">Transaction history</a>
                
            </div>         
            
        </div>
    
<div class="container">
<h2 style="text-align:center;">Customers Details</h2>
<table id="customers">
  <tr>
    <th>Account No.</th>
    <th>Account Holder Name</th>
    <th>Email Id</th>
    <th>Balance</th>
    <th>Transfer</th>
  </tr>
  <?php 
    while($rows=mysqli_fetch_assoc($result)){
    ?>
                    <tr style="color : white;">
                        <td ><?php echo $rows['id'] ?></td>
                        <td ><?php echo $rows['name']?></td>
                        <td ><?php echo $rows['email']?></td>
                        <td ><?php echo $rows['balance']?></td>
                        <td><a href="selecteduser.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn" style="background-color : #74b9ff;">Transfer money</button></a></td> 
                    </tr>
                    <?php
                    }
                ?>
  </table>

</div>

</body>
</html>