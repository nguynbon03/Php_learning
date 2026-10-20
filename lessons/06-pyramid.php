<?php

  $height = 5;

  for ($row = 1; $row <= $height; $row++) {
      $spaces = $height - $row;
      $stars = 2 * $row - 1;

      echo str_repeat(" ", $spaces);
      echo str_repeat("*", $stars);
      echo PHP_EOL;
  }