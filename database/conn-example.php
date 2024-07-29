<?php
$hostname = '#';
$database = '#';
$username = '#';
$password = '#';
try {
  $pdo = new PDO("pgsql:host=$hostname;dbname=$database", $username, $password);
} catch (PDOException $e) {
  echo "Error" . $e->getMessage();
}