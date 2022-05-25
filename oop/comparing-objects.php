<?php

class Point
{
  private $x;
  private $y;

  public function __construct($x, $y)
  {
    $this->x = $x;
    $this->y = $y;
  }
}

$p1 = new Point(10, 20);
$p2 = new Point(10, 20);

if ($p1 == $p2) {
  echo 'p1 and p2 are equal.';
} else {
  echo 'p1 and p2 are not equal.';
}

$p3 = $p2;

if ($p2 == $p3) {
  echo 'p2 and p3 are equal.';
} else {
  echo 'p2 and p3 are not equal.';
}