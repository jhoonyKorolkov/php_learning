<?php
namespace Classes\Money;
abstract class User
{
  protected string $name;
  protected float $revenue;

  public function __construct(string $name, float $revenue)
  {
    $this->name = $name;
    $this->revenue = $revenue;
  }

  abstract public function increaseRevenue(float $amount): void;
  # code...
}