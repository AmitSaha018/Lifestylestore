<?php
include 'includes\common.php';
session_start();
//if(!isset($_SESSION['email']))
//{
//    header('location:index.php');
//}
$user_id = $_SESSION['user_id'];
$item_ids_string = $_GET['itemsid'];


$query = "UPDATE users_items SET status='Confirmed' WHERE users_id=" . $user_id . " AND item_id IN (" . $item_ids_string . ") and status='Added to cart'";
mysqli_query($con, $query) or die(mysqli_error($con));
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width = device-width, initial-scale = 1">
        <title>Success </title>
        <!-- Latest compiled and minified css-->             
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <link href="css/index.css" rel="stylesheet" type="text/css"/>
    </head>
    
    <body>
        <?php include 'includes\header.php';?>
        <div class="container-fluid" id="content">
            <div class="col-md-12">
                <div class="jumbotron">
                      <h3 align="center">Your order is confirmed. Thank you for shopping with us.</h3><hr>
                    <p align="center">Click <a href="product.php">here</a> to purchase any other item.</p>
                </div>
            </div>
        </div>
        <?php include 'includes\footer.php';
        ?>
    </body>
</html>