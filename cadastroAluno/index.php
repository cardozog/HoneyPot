<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Site desenvolvido c/ template para fins institucionais" />
        <meta name="author" content="Guilherme Cardozo" />

              <!-- Ícone da guia e título-->
      <link rel="shortcut icon" type="imagex/ico" href="../assets/img/honeycomb.ico">
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
        <link href="../css/stylesCursos.css" rel="stylesheet" />
    </head>
  <body>
                <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.php">
      <img src="../assets/img/honeycombImagem.png" alt="Honeycomb" width="30" height="24" class="d-inline-block align-text-top " >
      Honeypot Dev Studio
    </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#gerenciamento">Alunos</a></li>
                        <li class="nav-item"><a class="nav-link" href="../cursos/index.php">Sair</a></li>                      
                    </ul>
                </div>
            </div>
        </nav>
<header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <img src="../assets/img/honeycombImagem.png" style="width:80px" id="honeycomb"/>
                        <h1 class="text-white font-weight-bold fonteTitulo">Honeypot Cursos</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <h1 class="text-white-75 mb-5 fonteTitulo">Tela de Gerenciamento</h1>
                    </div>
                </div>
            </div>
        </header>
    <section class="page-section" id="gerenciamento">
    <div class="container px-4 px-lg-5 h-100 text-center">
    <table class="table text-center">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Login</th>
      <th scope="col">Senha</th>
      <th scope="col">Curso</th>
      
    </tr>
  </thead>
  <tbody>

    <?php
      include_once("../Service/Banco.php");
      $banco = new Banco();

      $sql = "select * from aluno";

      $registros = $banco->query($sql);

      if (isset($registros)) {
        foreach ($registros as $linha) { 

          echo '<tr>
              <th scope="row">'.$linha['id'].'</th>
              <td>'.$linha['nome'].'</td>
              <td>'.$linha['login'].'</td>
              <td>'.$linha['senha'].'</td>
              <td>'.$linha['curso'].'</td>
  <td> <a href=excluir.php?id='.$linha['id'].' class="btn btn-primary">Excluir</a>
             <a href=telaAtualizar.php?id='.$linha['id'].' class="btn btn-outline-dark">Alterar</a></td>
             </tr>';
          
        }//fim foreach
      }//fim  if
    ?>
    
  </tbody>

</table>
<div class ="container text-center" >
            <a href="../cursos/index.php#matricula" class="btn btn-primary btn-xl ">
        Incluir</a>
      </div>

    </div>
    </section>
        <footer class="bg-light py-5">
          <div class="container small text-center text-mute">
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
        <!-- SimpleLightbox plugin-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>

        <script src="../js/scripts.js"></script>
    
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
