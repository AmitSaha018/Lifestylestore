<?php
require "includes\common.php";
if(isset($_SESSION['email'])){
    header('location: products.php');
}
?>

<!DOCTYPE html>
<!--

-->
<html>
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
        include "includes\header.php";
        ?>
        
        <div id="sign-up_panel">
            <div class="row ">
                <div class="col-xs-4 col-xs-offset-4">
                    <form action="signup_script.php" method="POST">
                    <p class="heading_signup">SIGN UP</p>
                    <div class="form-group col-xs-8">
                        <input type="text" class="form-control" name="Name" 
                               placeholder="Name" required="true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">                                
                    </div>
                    <div class="form-group col-xs-8">
                        <input type="email" class="form-control" name="email" 
                               placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"><?php if(isset($_GET['m2'])) {echo $_GET['m2']; }?>                     
                    </div>
                    <div class="form-group col-xs-8">
                        <input type="password" class="form-control" name="password" 
                               placeholder="password" required="true" pattern=".{6,}">                           
                    </div>
                    <div class="form-group col-xs-8">
                        <input type="text" class="form-control" name="contact" 
                               placeholder="Contact" required="true" maxlength="10" size="10"><?php if(isset($_GET['m3'])) {echo $_GET['m3']; }?>           
                    </div>
                    <div class="form-group col-xs-8">
                        <input type="text" class="form-control" name="city" 
                               placeholder="City" required="true">         
                    </div>
                    <div class="form-group col-xs-8">
                        <input type="text" class="form-control" name="address" 
                               placeholder="Address" required="true">                      
                    </div>
                    <div class="form-group col-xs-8">
                        <input type="submit" value="Login" class="btn btn-primary">
                    </div>
                    <?php if(isset($_GET['m1'])) {echo $_GET['m1']; }?>
                    </form>


                </div>
            </div>

        </div>
        
        
        
        <?php
        include 'includes\footer.php';
        ?>
    </body>
</html>
