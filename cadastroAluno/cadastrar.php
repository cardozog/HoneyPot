<?php
include_once("../Service/Banco.php");

if (isset($_GET['login']) && isset($_GET['senha']) && isset($_GET['nome']) && isset($_GET['curso'])) {
  
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
  
  $login = $_GET['login'];
  $senha = $_GET['senha'];
  $nome = $_GET['nome'];
  $curso = $_GET['curso'];

  $sql = "insert into 
         aluno(login,senha,nome,curso) 
         values('$login','$senha','$nome','$curso')";

  $banco->exec($sql);
  

}
  header('Location: https://HoneyPotFinal.cardozog.repl.co/login/index.php');
?>