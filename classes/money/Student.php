<?php
namespace Classes\Money;
class Student extends User
{
  public function increaseRevenue(float $amount): void
  {
    $this->revenue += $amount;
    echo "{$this->name} теперь получает стипендию {$this->revenue}" . PHP_EOL;
  }
}
