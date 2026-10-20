<?php

  $numbers = [5, 2, 8];

  echo "Mảng ban đầu:\n";
  print_r($numbers);

  echo "Số phần tử: " . count($numbers) . "\n";

  array_push($numbers, 10, 1);

  echo "Sau khi thêm 10 và 1:\n";
  print_r($numbers);

  $removedNumber = array_pop($numbers);

  echo "Phần tử bị xóa: $removedNumber\n";
  echo "Sau khi xóa phần tử cuối:\n";
  print_r($numbers);

  sort($numbers);

  echo "Sau khi sắp xếp tăng dần:\n";
  print_r($numbers);

  $moreNumbers = [20, 30];
  $allNumbers = array_merge($numbers, $moreNumbers);

  echo "Sau khi gộp mảng:\n";
  print_r($allNumbers);