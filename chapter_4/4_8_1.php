<?php
// function createMsg($name) {

//   $msg = <<< EOM
//   {$name}様
//   お世話になっております。\n

//   EOM;

//   echo $msg;
// }

// createMsg("佐藤");

function getPrice($price)  {

  if($price < 0) {
    return 0;
  }
  return 500 * $price;
}

var_dump(getPrice(-3));
?>
