<?php 

$roles = [
  'admin' => 1, 
  'approver' => 2,
  'editor' => 3, 
  'subscriber' => 4
];

$result = array_key_exists('admin', $roles);
var_dump($result); // true