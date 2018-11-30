<?php
require "includes\common.php";

session_start();
if(!isset($_SESSION['email']))
{
    header('location:index.php');
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>test1</title>
    </head>
    <body>
        
        <?php
        
        $id = $_SESSION['user_id'];
        $pid = $_GET['id'];
        $sql = "DELETE FROM `users_items` WHERE `users_items`.`users_id` = '". $id ."' and `users_items`.`item_id` = '". $pid ."'";
        mysqli_query($con, $sql) or die(mysqli_error($con));
        header('location:cart.php');
        //echo " So the product id is $pid with user id $id";
        ?>
    </body>
</html>