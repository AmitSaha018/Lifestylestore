<?php
//header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");

include 'includes\common.php';
session_start();
if(!isset($_SESSION['email']))
{
    header('location:index.php');
}
?>


<!DOCTYPE html>
<!--

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified css-->
                
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
                            <h4>Settings</h4>                            
                        </div>
                        <div class="panel-body">
                            <p class="text-warning"></p>

                            <form method="post" action="settings_script.php">
                                <div class="form-group col-xs-8">
                                    <input type="text" class="form-control" name="oldpassword" placeholder="Old Password">
                                        <?php if(isset($_GET['m1'])) {echo $_GET['m1']; }?>                                
                                </div>
                                <div class="form-group col-xs-8">
                                    <input type="text" class="form-control" name="newpassword" placeholder="New Password">
                                        <?php if(isset($_GET['m2'])) {echo $_GET['m2']; }?>                              
                                </div>
                                <div class="form-group col-xs-8">
                                    <input type="text" class="form-control" name="retypepassword" placeholder="Re-Password">                                
                                </div>
                                <div class="form-group col-xs-8">
                                    <input type="submit" value="Reset" class="btn btn-primary">                                
                                </div>
                                
                            </form></br>
                        </div>
                        <div class="panel-footer">
                            <p>Don't worry, Reset Your Password</p>
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