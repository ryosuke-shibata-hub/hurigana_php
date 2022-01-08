<?php
// $day = ["月","火","水","木","金","土","日"];
// $day[2] = "炎";
// var_dump($day);
//おまけ
$day = ["月","火","水"];
$day[] = "木";
array_push($day,"金");
$day = array_merge($day,["土","日"]);

var_dump($day);
//   [0]=>
//   string(3) "月"
//   [1]=>
//   string(3) "火"
//   [2]=>
//   string(3) "水"
//   [3]=>
//   string(3) "木"
//   [4]=>
//   string(3) "金"
//   [5]=>
//   string(3) "土"
//   [6]=>
//   string(3) "日"

?>
