<?php
$hostname = 'localhost';
$database = 'todotasksdb';
$username = 'postgres';
$password = 'postgres';
try {
  $pdo = new PDO("pgsql:host=$hostname;dbname=$database", $username, $password);
} catch (PDOException $e) {
  echo "Error" . $e->getMessage();
}