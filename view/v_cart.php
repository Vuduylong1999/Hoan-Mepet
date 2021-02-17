<?php include_once('header.php'); ?>

    <div class="content">
        <div class="container products">
            <div class="content-header"></div>
            <div class="content-main">
                <div class="cart-body">
                    <table class="table cart-table text-center" id="cart-table">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col" colspan="2">SẢN PHẨM</th>
                                <th scope="col">GIÁ</th>
                                <th scope="col">SỐ LƯỢNG</th>
                                <th scope="col">TỔNG</th>
                                <td scope="col"><!-- <a href="?controller=delallcart" class="del-cart"> -->
                                <a href="" class="del-cart del-all-cart">
                                <i class="fal fa-trash-alt"></i></a></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php   
                                    $total_cart = 0;
                                    if(!isset($_SESSION['cart'])) { ?>
                                    <td colspan="7" class="text-center blank-cart"><?php echo "Giỏ hàng hiện đang trống !" ?></td>
                            <?php }
                                else {  if (empty($_SESSION['cart'])) { ?>
                                        <td colspan="7" class="text-center blank-cart"><?php echo "Your cart is currently empty!" ?></td>
                                    <?php  } else {
                                        $i=0;
                                        foreach ($_SESSION['cart'] as $key => $value) {
                                        $i += 1;
                                    ?>
                                    <tr>
                                        <td><?php echo $i ?>.</td>
                                        <td scope="row" class="cart-image"><img src="./image/<?php echo $value['img_link'] ?>" alt="" style="width: 100px"></td>
                                        <td class="text-left"><?php echo $value['name'] ?></td>
                                        <td>$<?php echo $value['price'] ?></td>
                                        <td>
                                            <div class="cart-quantity">
                                                <a href="?controller=inccart&id=<?php echo $value['id'] ?>" class="inc-cart text-center"><i class="fal fa-plus"></i></a>
                                                <span class="d-flex justify-content-center align-items-center num-quantity text-center"><?php echo $value['sl'] ?></span>
                                                <a href="?controller=deccart&id=<?php echo $value['id'] ?>" class="dec-cart text-center"><i class="fal fa-minus"></i></a>
                                            </div>
                                        </td>
                                        <td>$<?php echo $value['sl']*$value['price'] ?></td>
                                        <td>
                                            <a href="?controller=delcart&id=<?php echo $value['id'] ?>" class="del-cart"><i class="fal fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                            <?php
                                        $total_cart += $value['sl']*$value['price'];
                                        }
                                    }
                            } ?>
                        </tbody>
                    </table>
                    <div class="total-cart d-flex justify-content-end">
                        Tổng: <span>$<?php echo $total_cart ?></span>
                    </div>
                    <div class="check-out d-flex justify-content-end">
                        <?php
                            if(isset($_SESSION['cart'])) { ?>
                                <a href="?controller=orderinfo" class="enable">THANH TOÁN</a>
                        <?php   }
                            else { ?>
                                <a class="disabled">THANH TOÁN</a> 
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include_once('footer.php'); ?>