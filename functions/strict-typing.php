<?php 

declare(strict_types=1);

function add(int $x, int $y)
{
  return $x + $y;
}

echo add(1.5, 2.5);

function product(float $x, float $y)
{
  return $x * $y;
}

echo product(1, 2); // 2