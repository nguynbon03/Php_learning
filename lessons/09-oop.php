<?php

  class Student
  {
      private string $name;
      private int $age;

      public function __construct(string $name, int $age)
      {
          $this->name = $name;
          $this->age = $age;
      }

      public function introduce(): string
      {
          return "Mình là {$this->name}, {$this->age} tuổi.";
      }

      public function haveBirthday(): void
      {
          $this->age++;
      }

      public function getAge(): int
      {
          return $this->age;
      }
  }

  $student = new Student("An", 20);

  echo $student->introduce() . PHP_EOL;

  $student->haveBirthday();

  echo "Tuổi sau sinh nhật: " . $student->getAge() . PHP_EOL;