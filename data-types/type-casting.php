<?php

// Cast to a integer
echo (int)12.5 . "\n";
echo (int)12.1 . "\n";
echo (int)12.9 . "\n";
echo (int)-12.9 . "\n";

$message = 'Hi';
$num = (int) $message;
echo $num;

$amount = (int) '100 USD';
echo $amount; // 100

$qty = null;
echo (int)$qty; // 0