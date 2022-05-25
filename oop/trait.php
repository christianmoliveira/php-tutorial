<?php

trait Logger
{
  public function log($msg)
  {
    echo '<pre>';
    echo date('Y-m-d h:i:s'). ':' . '(' . __CLASS__ . ') ' . $msg . "\n";
    echo '</pre>';
  }
}

class NubankAccount
{
  use Logger;

  private $accountNumber;

  public function __construct($accountNumber)
  {
    $this->accountNumber = $accountNumber;
    $this->log("A new $accountNumber bank account created.");
  }
}

$newacc = new NubankAccount('Saving');

class NubankUser
{
  use Logger;

  public function __construct()
  {
    $this->log("A new user created.");
  }
}