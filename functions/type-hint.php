<?php

function testReturn(): ?string
{
  return 'elePHPant'; // elePHPant
}

var_dump(testReturn());

function testReturn2(): ?string
{
  return null; // NULL
}

var_dump(testReturn2());
