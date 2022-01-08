<?php
$teams = ["A","B","C","D","E"];
$opps = ["A","B","C","D","E"];

foreach ($teams as $team) {
  # code...
  array_shift($opps);
  foreach ($opps as $opps_team) {
    # code...
      var_dump($team." vs ".$opps_team);
    }
  }

?>
