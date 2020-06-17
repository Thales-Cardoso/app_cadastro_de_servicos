<?php
	session_start();

	// Destroi os dados da SESSION e redireciona para a index.php
	session_destroy();
	header('Location: index.php');
?>