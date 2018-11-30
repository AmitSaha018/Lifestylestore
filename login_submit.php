<?php
//header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");

session_start();
require 'includes\common.php';
//$email = $_POST['email'];
$email = mysqli_real_escape_string($con, $_POST['email']);
//$password = $_POST['password'];
$password = mysqli_real_escape_string($con, $_POST['password']);

$query = "Select id ,email from users where email = '".$email."' and password = '".$password."'";
$result = mysqli_query($con, $query);
$num = mysqli_num_rows($result);

if($num == 0)
{
    $error = "<span class='red'>Please enter correct email and password</span>";
    header('location : login.php?error='.$error);
} else{
    $row = mysqli_fetch_array($result);
    $_SESSION['email'] = $row ['email'];
    $_SESSION['user_id'] = $row['id'];
    //echo $row['email'] ."  ------------->  " . $row['id'];
    //header('location: test1.php');
    header('location: product.php');
}
?>

