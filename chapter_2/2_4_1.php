<?php
//2_4_1
var_dump("年齢は？");
$age = trim(fgets(STDIN));

if($age < 20) {
  var_dump($age."歳は");
  var_dump("みせいねんだよ");
}else{
  var_dump($age."歳は");
  var_dump("せいじんだお");
}?>
