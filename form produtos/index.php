<!DOCTYPE html>
<html lang="pt-br">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" >
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Cadastro de Produtos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=novo">Novo Produto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=listar">Listar Produto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=editar">editar Produto</a>
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
          case "novo":
            include("novo-produto.php");
            break;

          case "listar":
            include("listar-produto.php");
            break;

          case "salvar":
            include("salvar-produto.php");
            break;

          case "editar":
            include("editar-usuario.php") ;
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
