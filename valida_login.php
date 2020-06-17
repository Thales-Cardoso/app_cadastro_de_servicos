<?php 
	session_start();


	// Recebe os dados do formulário
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	// Variavel de autenticação
	$usuario_autenticado = false;
	$id_usuario = null;
	$id_perfil = null;


	//Usuários cadastrados no sistema
	$usuario_app = array(
		array('id' => 1 ,'email' => 'adm@teste.com.br', 'senha' => '123' ,'id_perfil' => 1),
		array('id' => 2 ,'email' => 'user@teste.com.br', 'senha' => '123' ,'id_perfil' => 1),
		array('id' => 3 ,'email' => 'maria@teste.com.br', 'senha' => '123' ,'id_perfil' => 2),
		array('id' => 4 ,'email' => 'joao@teste.com.br', 'senha' => '123' ,'id_perfil' => 2),
	);

	// Compara os dados para login
	foreach ($usuario_app as $user){
		//Comparação de Login com usuário cadastrados
		if($email == $user['email'] && $senha == $user['senha']){
		$usuario_autenticado = true;
		$id_usuario = $user['id'];
		$id_perfil = $user['id_perfil'];
		}
	}

	// Criação de acesso
	if($usuario_autenticado){
		$_SESSION['id_usuario'] = $id_usuario;
		$_SESSION['id_perfil'] = $id_perfil;
		$_SESSION['autenticacao'] = 'sim';
		header('Location: home.php');
	} else {
		$_SESSION['autenticacao'] = 'nao';
		header('Location: index.php?login=erro');
	}
	
?>