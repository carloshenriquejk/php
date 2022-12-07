<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>formulario de contato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="my-5">Formulario de Contato</h1>
                <form action="enviar.php" method="POST">
                  <div class="mb-3">
                    <input type="text" name="nome" placeholder="Digite Seu Nome" class="form-control">
                  </div>    
                  <div class="mb-3">
                    <input type="email" name="email" placeholder="Digite Seu email" class="form-control">
                  </div>  
                  <div class="mb-3">
                   <textarea name="mensagem" placeholder="Digite sua Mensagem" rows="3" class="form-control"></textarea>
                  </div> 
                  <div class="mb-3">
                 <button cla type="submit" class="btn btn-primary">Enviar</button>
                  </div>   
                </form>

            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>