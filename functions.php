<?php
function shohag_count($var_count) {
  $total_count = 0;
  foreach ($var_count as $key => $value) {
    $total_count++;
  }
  echo $total_count;
}
 ?>
