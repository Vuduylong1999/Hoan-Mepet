<?php
    $id=$_GET['id'];
    $number = $_SESSION['cart'][$id]['sl']+=1;
    header('location: ?controller=cart');
?>