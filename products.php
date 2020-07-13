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
        <title>lifestyle store product's page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
   <body>
        <?php
            include 'includes/header.php';
            ?>
       <?php
            include 'includes/check-if-added.php';
       ?>
       
       
       <br><br><br><br>
       <div class="container">
           <div class="jumbotron">
               <h1>Welcome to our lifestyle store!</h1>
               <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
           </div>
           
       </div>
       <div class="container">
           <div class="row">
               <div class="col-lg-3 col-md-3 col-sm-6 ">
                    <div class="thumbnail">
                        <img src="img/5.jpg"  alt="camera image">
                        <div class="caption">
                            <center>
                                <h3>Canon EOS</h3>
                                <p>Price: Rs 36,000.00</p>
                                
                                    
                                <?php if (!isset($_SESSION['email'])) { 
                                    ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                  } else {
                                        if (check_if_added_to_cart(1)) { 
                                            echo '<a href="#" class="btn btn-block btn-success" role="button" disabled>Added to cart</a>';
                                        } else {
                                     ?>
                                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                        }
                                    }
                                    ?>
                                            
                                            
                            </center>
                        </div>
                    </div>
                </div>
               
               
                <div class="col-lg-3 col-md-3 col-sm-6 ">
                    <div class="thumbnail">
                        <img src="img/2.jpg"  alt="camera image">
                        <div class="caption">
                            <center>
                                
                                <h3>Sony DSLR</h3>
                            <p>Price: Rs 40,000.00</p>
                            
                            <?php if (!isset($_SESSION['email'])) { 
                                    ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                  } else {
                                        if (check_if_added_to_cart(2)) { 
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        } else {
                                     ?>
                                            <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                        }
                                    }
                                    ?>
                            
                        </div>
                    </div>
                </div>
               <div class="col-lg-3 col-md-3 col-sm-6 ">
                    <div class="thumbnail">
                        <img src="img/3.jpg"  alt="camera image">
                        <div class="caption">
                            <center><h3>Sony DSLR</h3>
                            <p>Price: Rs 50,000.00</p>
                            
                            <?php if (!isset($_SESSION['email'])) { 
                                    ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                  } else {
                                        if (check_if_added_to_cart(3)) { 
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        } else {
                                     ?>
                                            <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                        }
                                    }
                                    ?>
                            
                            </center>
                        </div>
                    </div>
                </div>
               <div class="col-lg-3 col-md-3 col-sm-6 ">
                    <div class="thumbnail">
                        <img src="img/4.jpg"  alt="camera image">
                        <div class="caption">
                            <center><h3>Olympus DSLR</h3>
                            <p>Price: Rs 80,000.00</p>
                            
                            <?php if (!isset($_SESSION['email'])) { 
                                    ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                  } else {
                                        if (check_if_added_to_cart(4)) { 
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        } else {
                                     ?>
                                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                        }
                                    }
                                    ?>
                            
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <!--FOR WATCHES-->
       
       
       <div class="container">
           <div class="row">
               <div class="col-lg-3 col-md-3 col-sm-6 ">
                    <div class="thumbnail">
                        <img src="img/9.jpg"  alt="camera image">
                        <div class="caption">
                            <center><h3>Titan Model #301</h3>
                            <p>Price: Rs 13,000.00</p>
                            
                            <?php if (!isset($_SESSION['email'])) { 
                                    ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                  } else { ?>
                                       <?php if (check_if_added_to_cart(5)) { ?>
                                             <a href="#" role="button" class="btn btn-block btn-success" disabled>Added to cart</a>
                                       <?php } else {
                                     ?>
                                            <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                        }
                                    }
                                    ?>
                            
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 ">
                    <div class="thumbnail">
                        <img src="img/10.jpg"  alt="camera image">
                        <div class="caption">
                            <center><h3>Titan Model #201</h3>
                            <p>Price: Rs 3,000.00</p>
                            
                            <?php if (!isset($_SESSION['email'])) { 
                                    ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                  } else {
                                        if (check_if_added_to_cart(6)) { 
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        } else {
                                     ?>
                                            <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                        }
                                    }
                                    ?>
                            
                            </center>
                        </div>
                    </div>
                </div>
               <div class="col-lg-3 col-md-3 col-sm-6 ">
                    <div class="thumbnail">
                        <img src="img/11.jpg"  alt="camera image">
                        <div class="caption">
                            <center><h3>HMT Milan</h3>
                            <p>Price: Rs 8,000.00</p>
                            
                            <?php if (!isset($_SESSION['email'])) { 
                                    ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                  } else {
                                        if (check_if_added_to_cart(7)) { 
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        } else {
                                     ?>
                                            <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                        }
                                    }
                                    ?>
                            
                            </center>
                        </div>
                    </div>
                </div>
               <div class="col-lg-3 col-md-3 col-sm-6 ">
                    <div class="thumbnail">
                        <img src="img/12.jpg"  alt="camera image">
                        <div class="caption">
                            <center><h3>Fuber Luba #111</h3>
                            <p>Price: Rs 18,000.00</p>
                            
                            <?php if (!isset($_SESSION['email'])) { 
                                    ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                  } else {
                                        if (check_if_added_to_cart(8)) { 
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        } else {
                                     ?>
                                            <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                        }
                                    }
                                    ?>
                            
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
       <!--FOR shirts-->
       <div class="container">
           <div class="row">
               <div class="col-lg-3 col-md-3 col-sm-6 ">
                    <div class="thumbnail">
                        <img src="img/6.jpg"  alt="camera image">
                        <div class="caption">
                            <center><h3>H & W</h3>
                            <p>Price: Rs 800.00</p>
                            <?php if (!isset($_SESSION['email'])) { 
                                    ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                  } else {
                                        if (check_if_added_to_cart(9)) { 
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        } else {
                                     ?>
                                            <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                        }
                                    }
                                    ?>
                            
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 ">
                    <div class="thumbnail">
                        <img src="img/8.jpg"  alt="camera image">
                        <div class="caption">
                            <br><center><h3>Louis Phil</h3>
                                <p>Price: Rs 1,300.00</p>
                            
                               <?php if (!isset($_SESSION['email'])) { 
                                    ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                  } else {
                                        if (check_if_added_to_cart(10)) { 
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        } else {
                                     ?>
                                            <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                        }
                                    }
                                    ?>
                            
                                </center>
                        </div>
                    </div>
                </div>
               <div class="col-lg-3 col-md-3 col-sm-6 ">
                    <div class="thumbnail">
                        <img src="img/13.jpg"  alt="camera image">
                        <div class="caption">
                            <center><h3>Jon Sok</h3>
                            <p>Price: Rs 1,500.00</p>
                            
                            <?php if (!isset($_SESSION['email'])) { 
                                    ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                  } else {
                                        if (check_if_added_to_cart(11)) { 
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        } else {
                                     ?>
                                            <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                        }
                                    }
                                    ?>
                            
                            </center>
                        </div>
                    </div>
                </div>
               <div class="col-lg-3 col-md-3 col-sm-6 ">
                    <div class="thumbnail">
                        <img src="img/14.jpg"  alt="camera image">
                        <div class="caption">
                            <center><h3>Jhalsani</h3>                           
                                <p>Price: Rs 2,000.00</p>
                            
                            <?php if (!isset($_SESSION['email'])) { 
                                    ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                  } else {
                                        if (check_if_added_to_cart(12)) { 
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        } else {
                                     ?>
                                            <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                        }
                                    }
                                    ?>
                            
                            
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
       
       
       
        <!-- FOOTER TAG-->
        
        
        <?php
            include 'includes/footer.php';
        ?>
    </body>
</html>
