<?php
    $id=$_GET['id'];
    $number = $_SESSION['cart'][$id]['sl']-=1;
    if ($number == 0) {
        unset($_SESSION['cart'][$id]);
    }
    header('location: ?controller=cart');
?>