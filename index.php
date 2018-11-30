<?php
require 'includes\common.php';

//header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");

session_start();
if (isset($_SESSION['email'])) {
//header('location: products.php');
echo "HELLO" . $_SESSION['email'];
} /*else {
    echo "HELLO GUEST";
}*/
?>

<!DOCTYPE html>
<!--
-->
<html>
    <head>
        <title>Lifestyle Store</title>
        
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
        
        <div id="banner_image">
            <div class="container">
                <div id="banner_content">
                    <a href="product.php" class="btn btn-danger btn-lg active" id="buttn_style"> Shop Now</a>
                </div>                
            </div>
        </div>
        
        <?php
        include 'includes\footer.php';
        ?>
    </body>
</html>

