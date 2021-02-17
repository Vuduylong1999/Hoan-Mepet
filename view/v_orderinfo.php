<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mepet - Pet is love</title>
    <link href = "image/web-icon.png" rel="icon" type="image/gif">
    <link rel="stylesheet" href="Bootstrap-jquery/bootstrap-4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-pro-5.13.0-web/css/all.min.css">
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.css">
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="content">
        <div class="container-fluid">
            <div class="content-main row">
                <div class="order-info col-lg-7">
                    <div class="orderinfo-tittle">Customer information</div>
                    <form action="?controller=checkout" method="POST" id="orderinfo">
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="" placeholder="Enter your full name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="" placeholder="Enter your phone number">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="" placeholder="Enter your shipping address">
                    </div>
                    </form>
                    <div class="nav-form d-flex justify-content-center align-items-center">
                        <div><a href="?controller=cart">< Return to cart</a></div>
                        <div class="text-right"><button class="btn btn-primary" type="submit" form="orderinfo">DONE</button></div>
                    </div>
                    <div id="orderinfo-error">
                    </div>
                </div>
                <div class="cart-review col-lg-5">
                    <table class="product-table table text-center">
                        <thead>
                            <?php   
                                $total_cart = 0;
                                foreach ($_SESSION['cart'] as $key => $value) {
                            ?>
                                <tr>
                                    <td scope="row" class="cart-image">
                                        <img src="./image/<?php echo $value['img_link'] ?>" alt="" style="width: 100px">
                                        <span class="dot d-flex justify-content-center align-items-center"><?php echo $value['sl'] ?></span>
                                    </td>
                                    <td class="text-left"><?php echo $value['name'] ?></td>
                                    <td class="text-right">$<?php echo $value['sl']*$value['price'] ?></td>
                                </tr>
                            <?php
                                $total_cart += $value['sl']*$value['price'];
                            } ?>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-left cart-image">Total</td>
                                <td></td>
                                <td class="text-right">$<?php echo $total_cart ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="Bootstrap-jquery/jquery-3.5.1.min.js"></script>
    <script src="Bootstrap-jquery/bootstrap-4.5.2/js/bootstrap.min.js"></script>
    <script src="OwlCarousel2-2.3.4/dist/owl.carousel.js"></script>
    <script src="js.js"></script>
</body>
</html>