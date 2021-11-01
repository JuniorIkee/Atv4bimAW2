<?php 
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "db_atv3";

session_start();

$conexao = mysqli_connect($servername, $username, $pass, $dbname) or die ('Não foi possível conectar');

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['passwor']);
 
$query = "select * from user where email = '$email' and password = '$senha'";
 
$result = mysqli_query($conexao, $query) or die('erro no select');
$row = mysqli_num_rows($result);
 
if($row == 1) {
	$_SESSION['email'] = $email;
	header('Location: logado.php');
	exit();
} else {
	$_SESSION['email'] = false;
    echo "Dados Incorretos";
}
?>
