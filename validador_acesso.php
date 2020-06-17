<?php
  session_start();

  // Verifica se o usuário possui permissão para acessar a pagina através da SESSION
  if(!isset($_SESSION['autenticacao']) || $_SESSION['autenticacao'] != 'sim'){
    header('location: index.php?login=erro2');
  }
?>