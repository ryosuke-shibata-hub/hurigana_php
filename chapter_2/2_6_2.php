<?php
var_dump("年齢は？");
$age = trim(fgets(STDIN));

if($age >= 5 || $age <= 65 ) {
  var_dump($age."才は");
  var_dump("幼児又は高齢者だお");
}
?>
