<?php

$numbers = [10, 20, 30];

$total = array_reduce($numbers, function($previous, $current) {
  return $previous + $current;
});

echo $total;

// * 2
$total = array_reduce(
  $numbers,
  fn($previous, $current) => $previous + $current
);