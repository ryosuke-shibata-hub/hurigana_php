<?php
function h($str)
{
  return htmlspecialchars($str, ENT_QUOTES, "UTF-8");
}
function eto($year)
{
  $etos = ["子", "丑", "寅", "卯", "辰", "巳", "牛", "未", "申", "戌", "亥"];

  return $etos[($year - 4) % 12];
}

$year = filter_input(INPUT_GET, "year", FILTER_VALIDATE_INT);
