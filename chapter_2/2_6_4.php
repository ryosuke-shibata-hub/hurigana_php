<?php
var_dump("年齢は？");
$age = trim(fgets(STDIN));

if($age < 6) {
  var_dump($age."才のあなたは幼児だお");
}
?>
