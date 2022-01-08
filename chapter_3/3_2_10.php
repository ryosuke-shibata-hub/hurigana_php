<?php
$teams = ["A","B","C","D","E"];
$opps = ["A","B","C","D","E"];

foreach ($teams as $team) {
  # code...
  foreach ($opps as $opps_team) {
    # code...

    if($team != $opps_team) {
      var_dump($team." vs ".$opps_team);
    }
  }
}
?>
