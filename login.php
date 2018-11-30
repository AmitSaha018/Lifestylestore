<?php
require 'includes\common.php';

//header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");

if(isset($_SESSION['email'])){
    header('loaction: product.php');
    //echo "HELLO" . $_SESSION['email'];
}
 /*else {
    echo "HELLO GUEST";
}  */
?>

<!DOCTYPE html>
<!--

-->
<html lang="en">
    <head>
        <title>Login</title>
        
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
        include 'includes\header.php';
        ?>
        
        <div id="login_panel">
            <div class="row ">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>Login</h4>                            
                        </div>
                        <div class="panel-body">
                            <p class="text-warning">Login to make a purchase</p>
                            
                            <form method="post" action="login_submit.php">
                            <div class="form-group col-xs-8">
                                <input type="email" class="form-control" name="email" placeholder="Email">                                
                            </div>
                            <div class="form-group col-xs-8">
                                <input type="password" class="form-control" name="password" placeholder="password">                                
                            </div>
                            <div class="form-group col-xs-8">
                                <input type="submit" value="Login" class="btn btn-primary">                                
                            </div>
                                
                                <?php 
                                     if(isset($_GET['error']))
                                     {
                                    echo $_GET['error']; 
                                }?>
                            </form></br>
                        </div>
                        <div class="panel-footer">
                            <p>Don't have an account?<a href="#" style="color: blue;">Register</a> </p>
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