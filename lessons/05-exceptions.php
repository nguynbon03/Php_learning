<?php

  function divide(int $a, int $b): float
  {
      if ($b === 0) {
          throw new Exception("Không thể chia cho 0");
      }

      return $a / $b;
  }

  try {
      echo "Kết quả: " . divide(10, 2) . "\n";
      echo "Kết quả: " . divide(10, 0) . "\n";
  } catch (Exception $error) {
      echo "Lỗi: " . $error->getMessage() . "\n";
  } finally {
      echo "Kết thúc xử lý\n";
  }