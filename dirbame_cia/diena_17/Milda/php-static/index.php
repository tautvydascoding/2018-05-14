<?php

function daugVardu() {
  static $nr = 0;

  // ar tiesa?
  if ($nr < 5) {
      $nr++;
      daugVardu();
  }
  echo "Tadas: $nr";
}

daugVardu();












 ?>
