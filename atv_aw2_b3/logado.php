<?php
session_start();
if(!$_SESSION['email']) {
	header('Location: erro2.html');
	exit();}
?>

<h2> Hello </h2>