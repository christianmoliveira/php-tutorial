<?php

$message = 'Hi';
$say = function() {
  // echo $message; // Erro: Undefined variable '$message'
};

$say();

// * 2
$say = function () use (&$message) {
  $message = 'Hello';
  echo $message;
};
$say();

// * 3
function multiplier($x)
{
  return function ($y) use ($x)
  {
    return $x * $y;
  };
}

$double = multiplier(2);
echo $double(100); // 200