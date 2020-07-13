<?php 
require 'includes/common.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>lifestyle store</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        


    </head>
    <body>
        
            <!--navigation bar php code-->
            <?php
            include 'includes/header.php';
            ?>
        <!--code for the body now-->
        
        <br><br>
            <div  id="banner_image">
            
                <div class="container">
                    
                    <div id="banner_content">
                        <h1>We sell lifestyle.</h1><br>
                        <p>Flat 40% OFF on premium brands.</p><br>
                        
                        <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                           
                
                        
                    </div>
                </div>
                    
                    
                
        </div>
        
        <!--i am here-->
        <div class="container">
                
                    <div class="items">
                        <a href="products.php">
                            <img class="img-responsive thumbnail" src="img/camera.jpg" alt="camera">
                            <div class="caption">
                                <center style="color:black;">
                                <h2>Cameras</h2>
                                <p>Choose among the best available in the world.</p>
                                </center>
                            </div>
                        </a>
                    </div>
                
                    <div class="items">
                        <a href="products.php">
                            <img class="img-responsive thumbnail" src="img/watch.jpg" alt="watch">
                            <div class="caption">
                                <center style="color:black;">
                                    <h2>Watches</h2>
                                    <p>Original watches from the best brands.</p>
                                </center>
                            </div>
                        </a>
                    </div>
                    
                    <div class="items">
                        <a href="products.php">
                            <img class="img-responsive thumbnail" src="img/shirt.jpg" alt="shirt">
                            <div class="caption">
                                <center style="color:black;">
                                <h2>Shirts</h2>
                                <p>Our exquisite collection of shirts.</p>
                                </center>
                            </div>
                        </a>
                    </div>
                    
            </div>
        
        
        <div>
            
            
        </div>
        
        <!-- FOOTER TAG-->
        
        
        <?php
            include 'includes/footer.php';
        ?>
            
        
    </body>
</html>

