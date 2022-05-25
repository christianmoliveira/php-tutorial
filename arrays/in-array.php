<?php

$roles = [
  'admin',
  'approver',
  'editor',
  'subscriber'
];

$result = in_array('admin', $roles);
var_dump($result); // true