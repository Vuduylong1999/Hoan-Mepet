<?php include_once('header.php'); ?>

    <div class="content">
        <div class="content-header"></div>
        <div class="content-main">
            <div class="container-fluid product-detail">
                <div class="row">
                    <?php
                        $sl = 1;
                        foreach ($product_detail as $key => $value) {
                    ?>
                        <div class="col-lg-5 col-md-7 col-12 product-image">
                            <img src="./image/<?php echo $value['img_link'] ?>" alt="">
                        </div>
                        <div class="col-lg-4 col-md-5 col-12 product-info">
                            <div class="add-wishlist d-flex" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                <a href="">
                                    <i class="fal fa-heart"></i>
                                    <i class="fas fa-heart"></i>
                                </a>
                            </div>
                            <div class="detail-name"><?php echo $value['name'] ?></div>
                            <div class="detail-price">$<?php echo $value['price'] ?></div>
                            <div class="detail-brand"><b>Thương hiệu: </b><?php echo $value['brand'] ?></div>
                            <div class="detail-status"><b>Tình trạng: </b>
                                <?php
                                    if ($value['amount']>0) {
                                        echo "Còn hàng";
                                    }
                                    else {echo "Hết hàng";}
                                ?>
                            </div>
                            <div class="d-flex justify-content-start position-relative align-items-center">
                                <div class="addcart-quantity">
                                    <a href="?controller=incdetail&id=<?php echo $value['id'] ?>" class="inc-cart text-center"><i class="fal fa-plus"></i></a>
                                    <span class="d-flex justify-content-center align-items-center num-quantity text-center"><?php echo $sl ?></span>
                                    <a href="?controller=decdetail&id=<?php echo $value['id'] ?>" class="dec-cart text-center"><i class="fal fa-minus"></i></a>
                                </div>
                                <div class="detail-addcart"><a href="?controller=addcart&id=<?php echo $value['id'] ?>">THÊM VÀO GIỎ</a></div>
                                <div class="product-cate"></div>
                            </div>
                            <div class="detail-cate">
                                <b>Phân loại: </b>
                                <a href=""><?php echo $value['cate-animal']; ?></a>, 
                                <a href=""><?php echo $value['cate-type']; ?></a>, 
                                <a href=""><?php echo $value['cate-detail']; ?></a>, 
                                <a href=""><?php echo $value['brand']; ?></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12 col-12">
                            <div class="shopad-box text-center">
                                <h5>Lý do nên chọn chúng tôi ?</h5>
                                <p>MePetStore cung cấp đa dạng các sản phẩm chất lượng và đảm bảo tất cả các sản phẩm là chính hãng được nhập khẩu từ các công ty uy tín trên khắp thế giới.</p>
                            </div>
                            <div class="shopad-box text-center">
                                <h5>Trả hàng</h5>
                                <p>Bạn có thể trả lại hàng trong vòng 14 ngày nếu bạn đổi ý. Bạn sẽ nhận hoàn tiền và miễn phí phí vận chuyển trả hàng nếu sản phẩm được giao bị hư hỏng hay không giống như mô tả.</p>
                            </div>
                            <div class="shopad-box text-center">
                                <h5>Vận chuyển</h5>
                                <p>Miễn phí vận chuyển cho 5Km đầu tiên. 20.000đ cho mỗi 5Km tiếp theo. Đặc biệt miễn phí vận chuyển cho mọi đơn hàng trên 1.000.000đ trên toàn quốc.</p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

<?php include_once('footer.php'); ?>