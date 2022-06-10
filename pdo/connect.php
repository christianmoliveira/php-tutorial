<?php

require 'config.php';

function connect(string $host, string $db, string $user, string $password): PDO
{ 
  $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";
  
  try {
    $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
  
    // make a database connection
    return new PDO($dsn, $user, $password, $options);
  } catch (PDOException $e) {
    die($e->getMessage());
  }
}

return connect($host, $db, $user, $password);