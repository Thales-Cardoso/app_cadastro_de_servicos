<?php
  session_start();

  if(!isset($_SESSION['autenticacao']) || $_SESSION['autenticacao'] != 'autenticado'){
    header('location: index.php?login=erro2');
  }
?>