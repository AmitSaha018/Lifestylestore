<?php

//header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");

include "includes\common.php";
session_start();
if (isset($_SESSION['email'])) {
//header('location: products.php');
echo "HELLO" . $_SESSION['email'];
} else {
    echo "HELLO GUEST";
}
?>
<!DOCTYPE html>
<!--

-->
<html>
    <head>
        <title>Product</title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified css-->
        <!--<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
        <!-- jquery library-->
        <!--<script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min"></script>-->
        <!-- latest compiled and minified javascript-->
        <!--<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>-->
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <link href="css/index.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        include "includes\header.php";
        include "includes\check-if-added.php";
        
        ?>

        <div class="container product_space" >
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt
                    around, we have all in one place.</p>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/1.jpg" alt="Camera">
                        <div class="caption">
                            <h3>Cannon EOS </h3>
                            <p>Price: Rs. 36000.00 </p>
                            <?php if (!isset($_SESSION['email'])) { 
                                ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart_add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                
                
                
                    <div class="col-md-3 col-sm-6 ">
                        <div class="thumbnail">
                            <img src="img/2.jpg" alt="Camera">
                            <div class="caption">
                                <h3>Cannon EOS </h3>
                                <p>Price: Rs. 36000.00 </p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    //We have created a function to check whether this particular product is added to cart or not.
                                    if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
                                        
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } else {
                                        ?>
                                    <a href="cart_add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>


                    
                        <div class="col-md-3 col-sm-6">
                            <div class="thumbnail">
                                <img src="img/3.jpg" alt="Camera">
                                <div class="caption">
                                    <h3>Cannon EOS </h3>
                                    <p>Price: Rs. 36000.00 </p>
                                    <?php if (!isset($_SESSION['email'])) { ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                    } else {
                                        //We have created a function to check whether this particular product is added to cart or not.
                                        if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        } else {
                                            ?>
                                        <a href="cart_add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>


                        
                            <div class="col-md-3 col-sm-6 ">
                                <div class="thumbnail">
                                    <img src="img/4.jpg" alt="Camera">
                                    <div class="caption">
                                        <h3>Cannon EOS </h3>
                                        <p>Price: Rs. 36000.00 </p>
                                        <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                        } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } else {
                                                ?>
                                            <a href="cart_add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
            </div>
                            <div class="row">
                                <div class="col-md-3 col-sm-6">
                                    <div class="thumbnail">
                                        <img src="img/10.jpg" alt="Camera">
                                        <div class="caption">
                                            <h3>Cannon EOS </h3>
                                            <p>Price: Rs. 36000.00 </p>
                                            <?php if (!isset($_SESSION['email'])) { ?>
                                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                                //We have created a function to check whether this particular product is added to cart or not.
                                                if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)
                                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                                } else {
                                                    ?>
                                                <a href="cart_add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                
                                
                
                                <div class="col-md-3 col-sm-6 ">
                                    <div class="thumbnail">
                                        <img src="img/19.jpg" alt="Camera">
                                        <div class="caption">
                                            <h3>Cannon EOS </h3>
                                            <p>Price: Rs. 36000.00 </p>
                                            <?php if (!isset($_SESSION['email'])) { ?>
                                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                                //We have created a function to check whether this particular product is added to cart or not.
                                                if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
                                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                                } else {
                                                    ?>
                                                <a href="cart_add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                    
                    
                    
                                <div class="col-md-3 col-sm-6 ">
                                    <div class="thumbnail">
                                        <img src="img/20.jpg" alt="Camera">
                                        <div class="caption">
                                            <h3>Cannon EOS </h3>
                                            <p>Price: Rs. 36000.00 </p>
                                            <?php if (!isset($_SESSION['email'])) { ?>
                                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                                //We have created a function to check whether this particular product is added to cart or not.
                                                if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0)
                                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                                } else {
                                                    ?>
                                                <a href="cart_add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                        
                        
                        
                                <div class="col-md-3 col-sm-6 ">
                                    <div class="thumbnail">
                                        <img src="img/21.jpg" alt="Camera">
                                        <div class="caption">
                                            <h3>Cannon EOS </h3>
                                            <p>Price: Rs. 36000.00 </p>
                                            <?php if (!isset($_SESSION['email'])) { ?>
                                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                                //We have created a function to check whether this particular product is added to cart or not.
                                                if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0)
                                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                                } else {
                                                    ?>
                                                <a href="cart_add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            
                            
                            </div>
                            <div class="row">
                
                                <div class="col-md-3 col-sm-6 ">
                                    <div class="thumbnail">
                                        <img src="img/13.jpg" alt="Camera">
                                        <div class="caption">
                                            <h3>Cannon EOS </h3>
                                            <p>Price: Rs. 36000.00 </p>
                                            <?php if (!isset($_SESSION['email'])) { ?>
                                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                                //We have created a function to check whether this particular product is added to cart or not.
                                                if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart != 0)
                                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                                } else {
                                                    ?>
                                                <a href="cart_add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                    
                    
                    
                    
                                <div class="col-md-3 col-sm-6 ">
                                    <div class="thumbnail">
                                        <img src="img/23.jpg" alt="Camera">
                                        <div class="caption">
                                            <h3>Cannon EOS </h3>
                                            <p>Price: Rs. 36000.00 </p>
                                            <?php if (!isset($_SESSION['email'])) { ?>
                                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                                //We have created a function to check whether this particular product is added to cart or not.
                                                if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart != 0)
                                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                                } else {
                                                    ?>
                                                <a href="cart_add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                        
                        
                        
                        
                                <div class="col-md-3 col-sm-6 ">
                                    <div class="thumbnail">
                                        <img src="img/24.jpg" alt="Camera">
                                        <div class="caption">
                                            <h3>Cannon EOS </h3>
                                            <p>Price: Rs. 36000.00 </p>
                                            <?php if (!isset($_SESSION['email'])) { ?>
                                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                                //We have created a function to check whether this particular product is added to cart or not.
                                                if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart != 0)
                                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                                } else {
                                                    ?>
                                                <a href="cart_add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            
                            
                            
                            
                                <div class="col-md-3 col-sm-6 ">
                                    <div class="thumbnail">
                                        <img src="img/25.jpg" alt="Camera">
                                        <div class="caption">
                                            <h3>Cannon EOS </h3>
                                            <p>Price: Rs. 36000.00 </p>
                                            <?php if (!isset($_SESSION['email'])) { ?>
                                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                                //We have created a function to check whether this particular product is added to cart or not.
                                                if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0)
                                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                                } else {
                                                    ?>
                                                <a href="cart_add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                
            </div>
        </div>



        <?php
        include 'includes\footer.php';
        ?>
    </body>
</html>
