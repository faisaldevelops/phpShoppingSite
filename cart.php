<?php
require 'includes/common.php';
if(!isset($_SESSION['email']))
{
    header('location:index.php');
}

     $user_id=$_SESSION['id'];
     $select_query="SELECT * FROM items inner join users_items on items.id=users_items.item_id where users_items.user_id='$user_id'";
     $select_query_result=mysqli_query($con,$select_query) or die(mysqli_error());
     $total_rows_fetched=mysqli_num_rows($select_query_result);
     $sum=0;
     

?>


<!--<!DOCTYPE html>

To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.-->

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>lifestyle store cart page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
   <body>
       
         <?php
            include 'includes/header.php';
            ?>
       
       
       
       <br><br><br><br>
       <div class="container">
           <div class="table-responsive">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th>Item Number</th>
                            <th>Item Name</th>
                            <th>Item Price</th>
                            <th></th>
                        </tr>
                        <?php if($total_rows_fetched==0) { ?>
                        <tr>
                            <td colspan="3">
                                <i><b><center>"Add items to the cart first!"</center></b></i>
                            </td>
                        </tr>
                        <?php } else { ?>
                        
                            <?php $counter=1; $sum=0;
                        while($row=mysqli_fetch_array($select_query_result)){?>
                        <tr>
                            <?php // $item_id=$row['item_id']; ?>
                            <td><?php echo $counter; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td>Rs <?php echo $row['price']."00"; ?></td>
                            <td> </td>
                        </tr>
                            <?php $counter=$counter+1;
                                  $sum=$sum+$row['price']; ?>
                        <?php } 
                        }
                        
                        ?>
                        
                        
                        
                        
                        
                        
                        
                        
                        <tr>
                            <td></td>
                            <td>Total</td>
                            <td>Rs <?php echo $sum; ?>.00</td>
                            <td><a href="sucess.php"><button type="submit" class="btn btn-primary">Confirm Order</button></a></td>
                        </tr>
                        
                    </tbody>
                </table>
           </div>
       </div>
       
       
       
       
         <!--FOOTER TAG-->
        
        
       <div class="container footer">
           <?php
           include 'includes/footer.php';
           ?>
       </div>
    </body>
</html>
