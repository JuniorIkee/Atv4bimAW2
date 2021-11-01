<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_atv3";

$name = $_POST['name'];
$email = $_POST['email'];
$senha = $_POST['password'];

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "INSERT INTO `user` (`name`, `email`,`password`)
  VALUES ('$name','$email','$senha')";
  $conn->exec($sql);
  echo "Novo registro criado!";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>