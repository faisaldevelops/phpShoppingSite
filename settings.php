<?php
require 'includes/common.php';

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
        <title>lifestyle store settings page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
   <body>
         <?php
            include 'includes/header.php';
            ?>
       
       
       
       <br><br><br><br>
       <div class="container">
           <div class="row">
               <div class="col-md-offset-3 col-md-5">
                   <h3><b>Change Password<b></h3>
               </div>
           </div>
       </div>
       
       <div class="container">
           <div class="row">
               <div class="col-md-offset-3 col-md-5">
                   <form>
                       <div class="form-group">
                           <input type="password" class="form-control input-lg" placeholder="Old Password">
                       </div>
                       
                       <div class="form-group">
                           <input type="password" class="form-control input-lg" placeholder="New Password">
                       </div>
                       
                       <div class="form-group">
                           <input type="password" class="form-control input-lg" placeholder="Re-type New Password">
                       </div>
                       
                       <div class="form-group">
                           <input type="submit" value="Change" class="btn btn-primary btn-lg">
                       </div>
                       
                   </form>
               </div>
           </div>
       </div>
       
       
       
       
       
        <!-- FOOTER TAG-->
        
        
         <!--FOOTER LINE CODE-->
       <div class="container footer">
           <?php
           include 'includes/footer.php';
           ?>
       </div>
    </body>
</html>
