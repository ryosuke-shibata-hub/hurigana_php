<?php
var_dump("年齢は？");
$age = trim(fgets(STDIN));

if($age < 20) {
  var_dump($age."才のあなたは");
  var_dump("みせいねんだお");
}elseif($age < 60) {
  var_dump($age."才のあなたは");
  var_dump("せいじんだお");
}else{
  var_dump($age."才のあなたは");
  var_dump("もうおとしより！");
}
?>
