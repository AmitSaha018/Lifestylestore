<?php
include "includes\common.php";
$name = mysqli_real_escape_string($con,$_POST['Name']);

$email = mysqli_real_escape_string($con,$_POST['email']);

$password = mysqli_real_escape_string($con,$_POST['password']);

$contact = mysqli_real_escape_string($con,$_POST['contact']);

$city = mysqli_real_escape_string($con,$_POST['city']);

$address = mysqli_real_escape_string($con,$_POST['address']);

$regex_email = "/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/";
$reg_num = "/^[789][0-9]{9}$/";

$query = "Select * from users where email ='$email'";
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$num = mysqli_num_rows($result);

if($num !=0)
{
    $m1 = "<span class='red'>Email already exists</span>";
    header('loaction: signup.php'.$m1);
}else if(!preg_match($regex_email, $email)){
    $m2 = "<span class='red'>Not valid email Id</span>";
    header('loaction: signup.php'.$m2);
}else if(!preg_match($reg_num, $contact)){
    $m3 = "<span class='red'>Not valid contact</span>";
    header('loaction: signup.php'.$m3);
}
else{
    $query = "INSERT INTO users (name,email,password,contact,city ,address) VALUES "
            . "('".$name."','".$email."','".$password."','".$contact."','".$city."','".$address."')";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    $user_id = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
    header('loaction: product.php');
    
}
?>