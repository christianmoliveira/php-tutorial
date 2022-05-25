<?php

class BankAccount
{
  public function __construct(private $accountNumber, private $balance, $type)
  {
  }
}