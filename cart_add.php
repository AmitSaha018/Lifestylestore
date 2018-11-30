<?php
require "includes\common.php";

session_start();
echo 'cart_add page';
if (isset($_GET['id'])) {
    $item_id = $_GET['id'];
    $user_id = $_SESSION['user_id'];
    echo "user_id --->" . "$user_id" ."\n";
    echo "item_id --->" . "$item_id" ."\n";
    $query = "INSERT INTO users_items(users_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    header('location:product.php');
}
?>