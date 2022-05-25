<?php

class BankAccount
{
  public $accountNumber;
  public $balance;

  public function deposit($amount)
  {
    if ($amount) {
      $this->balance += $amount;
    }
  }

  public function withdraw($amount)
  {
    if ($amount <= $this->balance) {
      $this->balance -= $amount;
      return true;
    }

    return false;
  }
}

$account = new BankAccount();

$account->accountNumber = 1;
$account->balance = 100;