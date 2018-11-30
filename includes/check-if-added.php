<?php
include "common.php";

function check_if_added_to_cart($item_id)
{
    $user_id = $_SESSION['user_id'];
    
    $con = mysqli_connect("localhost", "root", "", "store")
        or die(mysqli_error($con));
    
    $query = "SELECT * FROM users_items where users_id='$user_id' and item_id='$item_id' and status = 'Added to cart'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    $num = mysqli_num_rows($result);    
    
    if($num == 0){        
        return 0;        
    }
    else{
        return 1;
    }
}
?>