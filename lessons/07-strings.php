<?php

  $text = "  php training  ";

  echo "Chuỗi ban đầu: [$text]\n";

  $cleanText = trim($text);
  echo "Sau khi xóa khoảng trắng: [$cleanText]\n";

  echo "Độ dài chuỗi: " . strlen($cleanText) . "\n";
  echo "Chữ hoa: " . strtoupper($cleanText) . "\n";
  echo "Chữ thường: " . strtolower($cleanText) . "\n";

  $replacedText = str_replace("training", "course", $cleanText);
  echo "Sau khi thay thế: $replacedText\n";

  echo "Chuỗi có PHP không: ";
  echo str_contains($cleanText, "php") ? "Có\n" : "Không\n";