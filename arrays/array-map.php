<?php

// * 1

$lengths = [10, 20, 30];
$areas = array_map(fn($length) => $length * $length, $lengths);

// print_r($areas);

// * 2
class User
{
  public $id;
  public $username;
  public $email;

  public function __construct(int $id, string $username, string $email)
  {
    $this->id = $id;
    $this->username = $username;
    $this->email = $email;
  }
}

$users = [
  new User(1, 'joe', 'joe@phptutorial.net'),
  new User(2, 'john', 'john@phptutorial.net'),
  new User(3, 'jane', 'jane@phptutorial.net'),
];

$usernames = array_map(
  fn($user) => $user->username,
  $users
);

// print_r($usernames);

// * 3

class Square
{
  public static function area($length) 
  {
    return $length * $length;
  }
}

$lengths = [10, 20, 30];
$areas = array_map('Square::area', $lengths);

// print_r($areas);
