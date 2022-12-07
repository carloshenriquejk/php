<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>inner Join</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" >
  </head>
  <body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Livraria</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
     aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
          data-bs-toggle="dropdown" aria-expanded="false">
           Categoria
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="?page=cadastrar-categoria">Cadastrar </a></li>
            <li><a class="dropdown-item" href="?page=listar-categoria">Listar</a></li>
          </ul>
        </li>

              <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
          data-bs-toggle="dropdown" aria-expanded="false">
           Livro
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="?page=cadastrar-livro">Cadastrar </a></li>
            <li><a class="dropdown-item" href="?page=listar-livro">Listar</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

 <div class="container">
  <div class="row">
    <div class="col mt-5">
      <?php
      include("config.php");
        switch(@$_REQUEST["page"]){
          case "cadastrar-categoria":
            include("cadastrar-categoria.php");
            break;

          case "listar-categoria":
            include("listar-categoria.php");
            break;

          case "salvar-categoria":
            include("salvar-categoria.php");
            break; 

            case "cadastrar-livro":
            include("cadastrar-livro.php");
            break;

          case "listar-livro":
            include("listar-livro.php");
            break;

          case "salvar-livro":
            include("salvar-livro.php");
            break; 
         default:
         print "<h1>Bem Vindo!</h1>"; 
       }
          ?>
    </div>
  </div>
   
 </div>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>