<?php
include_once("../Service/Banco.php");

if (isset($_GET['login']) && isset($_GET['senha']) && isset($_GET['id'])) {
  
  $banco = new Banco();
  
  $nome = $_GET['login'];
  $senha = $_GET['senha'];
  $id = $_GET['id'];
  
  $sql = "update aluno 
          set login='$nome',
              senha='$senha'
          where id = '$id'
          ";

  $banco->exec($sql);
  
  header('Location: index.php#gerenciamento');
}

?>