<?php
$servername = "localhost";
$username = "root";
$password = "asenhaeessa123";
$dbname = "db_atv3";

try {
  $connInit = new PDO("mysql:host=$servername", $username, $password);
  $connInit->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sqlcreateDb = "CREATE DATABASE db_atv3";
  $connInit->exec($sqlcreateDb);

  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sqlcreateTb = "CREATE TABLE User (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    password VARCHAR(80) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    $conn->exec($sqlcreateTb);
    
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>