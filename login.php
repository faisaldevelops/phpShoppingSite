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
        <title>lifestyle store login page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
   <body>
        
        <?php
            include 'includes/header.php';
            ?>
       
       
       <br><br><br><br>
       <div class="container">
           <div class="row">
               <div class="col-xs-offset-3 col-xs-6">
                   <div class="panel panel-primary">
                       <div class="panel-heading">
                           <h1>Login to make purchases</h1>
                       </div>
                   </div>
                   <div class="panel-body">
                       
                       <form method="POST" action="login_submit.php">
                            <div class="form-group">
                                
                                <input type="email" name="email" class="form-control input-lg" placeholder="Email">
                            </div>
                            <div class="form-group">
                                
                                <input type="password" name="password" class="form-control input-lg" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Login" class="btn btn-primary btn-lg signuplink">
                                <!--<div class="signuplink">i am here to tell you that </div>-->
                            </div>
                       
                        </form>
                       
                       
                   </div>
                   <div class="panel-footer">
                       <p><b>Don't have an account? <a href="signup.php"> Register</a></b></p>
                   </div>
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
