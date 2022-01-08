<?php

function createMsg($name,$price) {
  $msg = <<< EOM

  {$name}様
  ご注文を承った！
  合計{$price}だお！\n

  EOM;

  echo($msg);
}

function getPrice($cnt) {
  return 500 * $cnt;
}


?>
