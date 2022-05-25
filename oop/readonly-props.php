<?php

class User
{
  private readonly string $username;

  public function __construct(string $username)
  {
    $this->username = $username;
  }
}

$user = new User('joe');
