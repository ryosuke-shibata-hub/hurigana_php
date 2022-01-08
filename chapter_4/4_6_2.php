<?php

require_once __DIR__ ."/chap_4_fnc.php";

$order = [
  ['name'=>'おろろ','price'=>5],
  ['name'=>'いやん','price'=>8],
];

foreach ($order as $order) {
  # code...

  $price = getPrice($order['price']);
  createMsg($order['name'],$price);
}

?>
