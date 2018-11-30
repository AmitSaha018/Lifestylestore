    <?php
    session_start();
include "includes\common.php";

//header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");

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
        <title>Cart</title>
        
        <!-- Latest compiled and minified css-->             
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <link href="css/index.css" rel="stylesheet" type="text/css"/>
        
        
    </head>
    <body>
        <div class="container-fluid" id="content">
            <?php include 'includes/header.php'; ?>
            <div class="row decor_bg cart_padding">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-striped" >
    
                        <!--show table only if there are items added in the cart-->
                        
                        <?php
                        $sum = 0;
                        
                        $user_id = $_SESSION['user_id'];
                        
                        $query ="SELECT items.price AS Price, items.pid, items.name AS Name FROM users_items JOIN items ON"
                                . " users_items.item_id = items.pid WHERE users_items.users_id='$user_id' and status='Added to cart'";
                        $result = mysqli_query($con, $query)or die(mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                        
                            <thead>
                                <tr>
                                    <th>Item Number</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $id=NULL;
                                
                                while ($row = mysqli_fetch_array($result)) {
                                    $sum += $row["Price"];
                                    $id .= $row["pid"] . ",";
                                    echo "<tr><td>" . "#" . $row["pid"] . "</td><td>" . $row["Name"] . "</td><td>Rs " . $row["Price"]
                                            . "</td><td><a href='cart-remove.php?id={$row['pid']}' class='remove_item_link'> Remove</a></td></tr>";
                                }
                                $pid = rtrim($id, ", ");
                                echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php?itemsid=" . $pid 
                                        . "' class='btn btn-primary'>Confirm Order</a></td></tr>";
                                ?>
                            </tbody>
                            <?php
                        } else {
                            echo "Add items to the cart first!";
                        }
                        ?>
                        <?php
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <?php include("includes/footer.php"); ?>
    </body>
</html>
