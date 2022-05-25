<?php 

$numbers = [4, 5];
$scores = [1, 2, 3, ...$numbers];

// print_r($scores); 

// (
//   [0] => 1
//   [1] => 2
//   [2] => 3
//   [3] => 4
//   [4] => 5
// )

// * 2
function get_random_numbers()
{
  for ($i = 0; $i < 5; $i++) {
    $random_numbers[] = rand(1, 100);
  }
  return $random_numbers;
}

$random_numbers = [...get_random_numbers()];

// print_r($random_numbers);

// * 3
function even_number()
{
  for($i = 2; $i < 10; $i += 2) {
    yield $i;
  }
}

$even = [...even_number()];

// print_r($even);

// * 4
class RGB implements IteratorAggregate
{
  private $colors = ['red', 'green', 'blue'];

  public function getIterator(): Traversable
  {
    return new ArrayIterator($this->colors);
  }
}

$rgb = new RGB();
$colors = [...$rgb];

// print_r($colors);

// * 5
function format_name(string $first, string $middle, string $last): string {}

$names = [
  'first' => 'John',
  'middle' => 'V.',
  'last' => 'Doe'
];

echo format_name(...$names);
