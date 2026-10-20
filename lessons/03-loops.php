<?php

  echo "for:\n";
  for ($i = 1; $i <= 3; $i++) {
      echo "$i ";
  }
  echo "\n";

  echo "while:\n";
  $i = 1;
  while ($i <= 3) {
      echo "$i ";
      $i++;
  }
  echo "\n";

  echo "do...while:\n";
  $i = 1;
  do {
      echo "$i ";
      $i++;
  } while ($i <= 3);
  echo "\n";

  echo "foreach:\n";
  $names = ["An", "Bình", "Chi"];
  foreach ($names as $name) {
      echo "$name ";
  }
  echo "\n";