<?php
var_dump("数値を入力して");
$msg = trim(fgets(STDIN));

if($msg = !is_numeric($msg)) {
  var_dump("数値じゃないよ");
}
?>
