<?php 

function sum(int ...$numbers): int
{
  return array_sum($numbers);
}

echo sum(10, 20) . "\n"; // 30
echo sum(10, 20, 30) . "\n"; // 60

