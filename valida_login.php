<?php 
	session_start();


	// Recebe os dados do formulário
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	// Variavel de autenticação
	$usuario_autenticado = false;


	//Usuários cadastrados no sistema
	$usuario_app = array(
		array('email' => 'adm@teste.com.br', 'senha' => '123456'),
		array('email' => 'user@teste.com.br', 'senha' => 'abcd'),
	);

	foreach ($usuario_app as $user){
		//Comparação de Login com usuário cadastrados
		if($email == $user['email'] && $senha == $user['senha']){
		$usuario_autenticado = true;
		}
	}

	if($usuario_autenticado){
		$_SESSION['autenticacao'] = 'autenticado';
		header('Location: home.php');
	} else {
		$_SESSION['autenticacao'] = '0';
		header('Location: index.php?login=erro');
	}

?>