<?php
    $products_new = getorderby('products',array(),'addtime','desc','8');
    $products_sold = getorderby('products',array(),'sold','desc','8');
    $products_rate = getorderby('products',array(),'rate','desc','8');
    $products_slide = getlow('products',array("id"=>"6"));
    require_once('./view/v_home.php');
?>