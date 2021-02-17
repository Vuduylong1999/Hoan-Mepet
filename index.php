<?php
    require_once('./model/database.php');
    session_start();
    if(isset($_GET['controller'])) {
        $controller = $_GET['controller'];
    }
    else {
        $controller = 'home';
    }

    switch ($controller) {
        case 'home':
            require_once('./controller/c_home.php');
            break;
        case 'cart':
            require_once('./controller/c_cart.php');
            break;
        case 'addcart':
            require_once('./controller/c_addcart.php');
            break;
        case 'deccart':
            require_once('./controller/c_dec_cart.php');
            break;
        case 'inccart':
            require_once('./controller/c_inc_cart.php');
            break;
        case 'delcart':
            require_once('./controller/c_del_cart.php');
            break;
        case 'delallcart':
            require_once('./controller/c_del_allcart.php');
            break;
        case 'orderinfo':
            require_once('./controller/c_orderinfo.php');
            break;
        case 'checkout':
            require_once('./controller/c_checkout.php');
            break;
        case 'productdetail':
            require_once('./controller/c_productdetail.php');
            break;
        default:
            require_once('./controller/c_error.php');
        break;
    }
?>