<?php 
	require_once "validador_acesso.php"; 

	// Recupera e trata os arquivos do formulário
	$titulo 	= str_replace('#', '-', $_POST['titulo']) ;
	$categoria 	= str_replace('#', '-', $_POST['categoria']);
	$descricao 	= str_replace('#', '-', $_POST['descricao']);

	// Faz a união dos dados do formulário em forma de Texto
	$texto = $_SESSION['id_usuario'].'#'.$titulo.'#'.$categoria.'#'.$descricao.PHP_EOL;

	// Abre um arquivo
	$arquivo = fopen('registros.txt', 'a',);

	// Escreve o conteúdo dentro do arquivo
	fwrite($arquivo, $texto);

	// Fecha o arquivo
	fclose($arquivo);

	header('Location: abrir_chamado.php');

?>