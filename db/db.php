<?php
  $servername = "127.0.0.1:3307";
  $database = "hawking";
  $username = "root";
  $password = "";

  $pdo = null;

  try {
    $pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  } catch (PDOException $pe) {
      die("Could not connect to the database $servername :" . $pe->getMessage());
  }
?>