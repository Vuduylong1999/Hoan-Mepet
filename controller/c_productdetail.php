<?php
  $id = $_GET['id'];
  $product_detail = get('products',array('id'=>$id));
  require_once('./view/v_productdetail.php');
?>