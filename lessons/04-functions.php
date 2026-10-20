<?php

  function greet(string $name): string
  {
      return "Xin chào, $name!";
  }

  function add(int $a, int $b): int
  {
      return $a + $b;
  }

  echo greet("An") . "\n";
  echo "Tổng: " . add(4, 6) . "\n";