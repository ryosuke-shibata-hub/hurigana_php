<?php
var_dump("ハロー");

var_dump(10 + 5);
var_dump(10 - 5);
var_dump(10 * 5);
var_dump(10 / 5);
var_dump(10 + 0.5);
var_dump(2 + 5 + 3);
var_dump(2 + 5 * 3);
//かっこ内の式から有線される
var_dump(2 * (5 - 3));
//5-3->2 * 2 =4
var_dump(5 / (4 *(1 - 0.2)));
//1-0.2->0.8×4->3.2÷5 = 1.5625
var_dump(2 + 10 * -5);

$message = "はろー";
var_dump($message);

$value = 70;
$sales = $value * 0.7;
var_dump($sales);
?>
