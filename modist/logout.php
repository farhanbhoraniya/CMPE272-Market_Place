<?php 
    session_start();
    session_destroy();
    unset($_SESSION['cart_item']);
    // echo "LOGGED OUT";
    // echo $_SESSION['name'];
    header("location: index.php");

?>
