<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

              <!-- Ícone da guia e título-->
      <link rel="shortcut icon" type="imagex/ico" href="/assets/img/honeycomb.ico">
        <title>Honeypot Cursos</title>


        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@300&display=swap" rel="stylesheet">

      
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/css/stylesCursos.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                
                <a class="navbar-brand" href="/index.php#page-top">
      <img src="/assets/img/honeycombImagem.png" alt="Honeycomb" width="30" height="24" class="d-inline-block align-text-top ">
      Honeypot Dev Studio
    </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.php#gerenciamento">Voltar</a></li>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <img src="/assets/img/honeycombImagem.png" style="width:80px"/>
                        <h1 class="text-white font-weight-bold fonteTitulo">Atualização de Dados</h1>
                        <hr class="divider" />
                    </div>
  <div class="col-lg-8 align-self-baseline">

    <!-- login -->
<form action="atualizar.php" >

      <?php

      include_once("../Service/Banco.php");

      if (isset($_GET['id']) ) {

          $id = $_GET['id'];

        echo "<input type='hidden' name='id' value='$id'> ";
        
          $banco = new Banco();
          $sql = "select * from aluno
                  where id = $id";
          $registros = $banco->query($sql);

           if (isset($registros)) {
              foreach ($registros as $linha) { 
                echo '
                  <div class="mb-3">
                    <label for="idnome" class="form-label text-white font-weight-bold fonteTitulo">Nome</label>
                    <input type="text" class="form-control" id="idnome" name="nome" value='.$linha['nome'].'>
                   </div>
                  <div class="mb-3">
                    <label for="idlogin" class="form-label text-white font-weight-bold fonteTitulo">Login</label>
                    <input type="text" class="form-control"  id="idlogin" name="login" value='.$linha['login'].'>
                  </div>

                  <div class="mb-3">
                    <label for="idsenha" class="form-label text-white font-weight-bold fonteTitulo">Senha</label>
                    <input type="text" class="form-control" id="idsenha" name="senha" value='.$linha['senha'].'>
                   </div>
             ';
              }
           }else {
             echo '<div class="alert alert-danger" role="alert">
    Registro não encontrado.
</div>';
           }   
      }
   
      ?>
      <input type="submit" value="Salvar" class="btn btn-success">
      <br>  <br>
    </form>

  </div>

        </header>

        <!-- Footer-->
        <footer class="bg-light py-5">
          <div class="container small text-center text-mute self-align" >
            <ul class="list-group list-group-flush">
            <li class="list-group-item bi-twitter"> - twitter.com/honeypotdev</li>
            <li class="list-group-item bi-instagram"> - instagram.com/honeypotdev</li>
            <li class="list-group-item bi-github"> - github.com/honeypotdev</li>

          </ul>
          </div>
          
          <div class="container px-4 px-lg-5"><div class="small text-center text-muted"> &copy; 2022 - Honeypot Dev Studio</div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="../js/scripts.js"></script>
    
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
