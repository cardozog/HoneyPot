<?php
include_once("../Service/Banco.php");

if (isset($_GET['nome']) &&isset($_GET['login'])&& isset($_GET['senha'])&& isset($_GET['curso'])) {
  
  $banco = new Banco();

  $banco->exec(
    "CREATE TABLE IF NOT EXISTS aluno (
      id INTEGER PRIMARY KEY AUTOINCREMENT, 
      nome TEXT,
      login TEXT,
      senha TEXT,
      curso TEXT
    )"
  );
  
  $nome = $_GET['nome'];
  $login = $_GET['login'];
  $senha = $_GET['senha'];
  $senha = $_GET['curso'];  

  $sql = "insert into 
         usuario(nome,login,senha,curso) 
         values('$nome','$login','$senha','$curso')";

  $banco->exec($sql);
  
  header('Location: https://HoneyPotFinal.cardozog.repl.co/index.php');
}

?>