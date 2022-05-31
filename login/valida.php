 <?php

  include_once("../Service/Banco.php");

  if (isset($_POST['loginUsuario']) && isset($_POST['senhaUsuario']) ) {
    $banco = new Banco();

    $login = $_POST['loginUsuario'];
    $senha = $_POST['senhaUsuario'];
    
    $sql = "select * from aluno
            where login = '$login' and senha = '$senha'";
 
      $registros = $banco->query($sql);

      if ( ! empty($registros)) {
        
        foreach ($registros as $linha) { 
          
          if ($linha['login'] == $login && $linha['senha']==$senha) {
            
            echo '
            <script>
              window.location.replace("https://honeypotfinal.cardozog.repl.co/cadastroAluno/index.php");
            </script>
          ';
            
            die();
          }          
          
        }//fim foreach

        echo '
            <script>
              window.location.replace("https://honeypotfinal.cardozog.repl.co/login/index.php?erro");
            </script>
          ';
         
      }else {
        echo '
            <script>
              window.location.replace("https://honeypotfinal.cardozog.repl.co/login/index.php?erro");
            </script>
          ';
      }
    
  }
    

    

    
    ?>