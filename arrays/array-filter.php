<?php 

$numbers = [1, 2, 3, 4, 5];

$odd_numbers = array_filter(
  $numbers,
  fn($number) => $number % 2 === 1
);

// print_r($odd_numbers);

// * 2
class Odd
{
  public function isOdd($num) 
  {
    return $num % 2 === 1;
  }
}

$numbers = [1, 2, 3, 4, 5];
$odd_numbers = array_filter(
  $numbers,
  [new Odd(), 'isOdd']
);

// print_r($odd_numbers);

// * 3
class Even
{
  public static function isEven($num) 
  {
    return $num % 2 === 0;
  }
}

$even_numbers = array_filter($numbers, ['Even', 'isEven']);

// * 4
class Positive
{
  public function __invoke($number)
  {
    return $number > 0;
  }
}

$more_numbers = [-1, -2, 0, 1, 3, 2];
$positives = array_filter($more_numbers, new Positive());

print_r($positives);