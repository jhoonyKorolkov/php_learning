<?php
namespace Classes\Geometry;
class Rectangle extends Figure
{
  private float $a;
  private float $b;

  public function __construct(float $a, float $b)
  {
    $this->a = $a;
    $this->b = $b;
  }

  public function getArea(): float
  {
    return $this->a * $this->b;
  }
}