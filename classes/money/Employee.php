<?php
namespace Classes\Money;
class Employee extends User
{
  public function increaseRevenue(float $amount): void
  {
    $this->revenue += $amount;
    echo "{$this->name} теперь получает зарплату {$this->revenue}" . PHP_EOL;
  }
}