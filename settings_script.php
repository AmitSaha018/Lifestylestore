<?php
include 'includes\common.php';
if(!isset($_SESSION['email']))
{
    header('location:index.php');
}
$oldpassword = $_POST['oldpassword'];
$user_id = $_SESSION['user_id'];
$newpassword = $_POST['newpassword'];
$retypepassword = $_POST['retypepassword'];
$query1 = "Select * from users where id='$user_id' and password ='$oldpassword'";
$result = mysqli_query($con, $query1) or die(mysqli_error($con));
if(mysqli_num_rows($result)<1){
$m1 = "<span class='red'>incorrect password</span>";
    header('loaction: settings.php'.$m1);    
}else{
     if(strcmp("$newpassword","$retypepassword")){
         $query = "update users set password ='$newpassword' where id = '$user_id'";
         
     }else{
         $m2 = "<span class='red'>retype password new password doesn't match</span>";
    header('loaction: settings.php'.$m2);
     }
   
}
?>

