<?php
session_start();
if(!$_SESSION['email']) {
    header('Location: erro2.html');
	exit();
}
?>
<h1>Seja Bem Vindo!!</h1>
