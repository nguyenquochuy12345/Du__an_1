<?php
if (isset($_GET['order_id'])) {
  $order_id = $_GET['order_id'];
  

  $order_details = show_chitiet_order($order_id);

}
