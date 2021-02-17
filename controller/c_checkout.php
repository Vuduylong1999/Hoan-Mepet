<?php
    if(isset($_POST['btn-thanhtoan'])) {
        $full_name = $_POST['full_name'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];/* 
        $email = $_POST['email']; */
        $order_id = 1;
        $data_order = getorderby('shop_order',array(),'id','desc','1');
        foreach ($data_order as $key => $value) {
            $order_id += $value['id'];
        }
        foreach ($_SESSION['cart'] as $key => $value) {
            insert('shop_order_detail',array(
                'order_id' => $order_id,
                'product_id' => $value['id'],
                'qty' => $value['sl'],
                'price' => $value['price'],
                'amount' => $value['sl']*$value['price']
            ));
        }
        $order_detail = get('shop_order_detail',array('order_id' => $order_id));
        $amount = 0;
        foreach ($order_detail as $key => $value) {
            $amount += $value['amount'];
        }
        insert('shop_order',array(
            'id' => $order_id,
            'full_name' => $full_name,
            'address' => $address,
            'phone' => $phone,
            'amount' => $amount,
            'status' => 0/* ,
            'email' => $email */
        ));
        unset($_SESSION['cart']);
        echo "thanh toan thanh cong";
    }
?>