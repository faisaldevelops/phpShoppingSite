<?php
require 'includes/common.php';
if(isset($_SESSION['email']))
{
    header('location:products.php');
}

?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
        <title>Lifestyle store signup</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
   <body>
      
        <?php
            include 'includes/header.php';
            ?>
       
       
       <br><br><br><br>
       <div class="container">
           <div class="row">
               <div class="col-xs-offset-3 col-xs-5">
                   <h1><b>SIGN UP</b></h1>
               </div>
           </div>
       </div>
       <div class="container">
           <div class="row">
               <div class="col-xs-offset-3 col-xs-6">
                   <form method="POST" action="signup_script.php">
                       <div class="form-group">
                            
                            <input type="text" name="name" class="form-control input-lg" placeholder="Name">
                            
                       </div>
                       <div class="form-group">
                           
                           <input type="email" name="email" class="form-control input-lg" placeholder="Email">
                       </div>
                       <div class="form-group">
                           
                           <input type="password" name="password" class="form-control input-lg" placeholder="Password">
                       </div>
                       <div class="form-group">
                           
                           <input type="text" name="contact" class="form-control input-lg" placeholder="Contact">
                       </div>
                       <div class="form-group">
                           
                           <input type="text" name="city" class="form-control input-lg" placeholder="City">
                       </div>
                       <div class="form-group">
                           
                           <input type="text" name="address" class="form-control input-lg" placeholder="Address">
                       </div>
                       <div class="form-group">
                           <input type="submit" value="Submit" class="btn btn-primary btn-lg">
                       </div>
                   </form>
               </div>
           </div>
       </div>
       
       
       <!--FOOTER LINE CODE-->
       <div class="container footer">
           <?php
           include 'includes/footer.php';
           ?>
       </div>
       
       
       
       
       
       
       
    </body>
</html>
