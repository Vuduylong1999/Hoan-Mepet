<?php
    $id = $_GET['id'];
    $product = get('products',array('id'=>$id));
    if(isset($_SESSION['cart'])) {
        if(isset($_SESSION['cart'][$id])) {
            $_SESSION['cart'][$id]['sl']+=1;
        }
        else {
            $_SESSION['cart'][$id]['sl'] = 1;
            $_SESSION['cart'][$id]['name'] = $product[0]['name'];
            $_SESSION['cart'][$id]['price'] = $product[0]['price'];
            $_SESSION['cart'][$id]['img_link'] = $product[0]['img_link'];
            $_SESSION['cart'][$id]['id'] = $id;
        }
    }
    else {
        $_SESSION['cart'][$id]['sl'] = 1;
        $_SESSION['cart'][$id]['name'] = $product[0]['name'];
        $_SESSION['cart'][$id]['price'] = $product[0]['price'];
        $_SESSION['cart'][$id]['img_link'] = $product[0]['img_link'];
        $_SESSION['cart'][$id]['id'] = $id;
    }
    header('location: ?controller=home');
?>