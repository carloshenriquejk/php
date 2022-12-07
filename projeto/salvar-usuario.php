<?php 
  switch ($_REQUEST["acao"]) {
  	case 'cadastrar':
  		$nome = $_POST["nome"];
  		$email = $_POST["email"];
  		$senha = md5($_POST["senha"]);
  		$data_nasc = $_POST["data_nasc"];

  		$sql = "INSERT INTO usuarios  (nome, email, senha, data_nasc) VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";

  		$res = $conn->query($sql);

  		if($res==true){
  			print" <script > alert('Cadastro com sucesso');
  			</script>";
  			print" <script > location.href='?page=listar'
  			</script>";
  		}else{
  			print" <script > alert('Não foi possivel efetuar o cadastro sucesso');
  			</script>";
  			print" <script > location.href='?page=listar'
  			</script>";
  		}
  		break;
  	

    case 'editar':
      $nome = $_POST["nome"];
      $email = $_POST["email"];
      $senha = md5($_POST["senha"]);
      $data_nasc = $_POST["data_nasc"];

      $sql = "UPDATE usuarios SET 
             nome='{$nome}',
             email='{$email}',
             senha='{$senha}',
             data_nasc='{$data_nasc}'
      WHERE 
            id=".$_REQUEST["id"];

      $res = $conn->query($sql);

      if($res==true){
        print" <script > alert('editado com sucesso');
        </script>";
        print" <script > location.href='?page=listar'
        </script>";
      }else{
        print" <script > alert('Não foi possivel editar');
        </script>";
        print" <script > location.href='?page=listar'
        </script>";
      }
      break;

  case 'excluir':


      $sql = "DELETE FROM usuarios  WHERE id=".$_REQUEST["id"];

      $res = $conn->query($sql);

      if($res==true){
        print" <script > alert('excluido com sucesso');
        </script>";
        print" <script > location.href='?page=listar'
        </script>";
      }else{
        print" <script > alert('Não foi possivel editar');
        </script>";
        print" <script > location.href='?page=listar'
        </script>";
      }
      break;
    

        case 'novo-produto':

      $nome_produto       = $_POST["nome_produto"];
      $quantidade = $_POST["quantidade"];
      $valor      = $_POST["valor"];
     
       echo "<script>console.log('Console: " . $nome_produto . "' );</script>";
       echo "<script>console.log('Console: " . $quantidade . "' );</script>";
       echo "<script>console.log('Console: " . $valor . "' );</script>";

   
    
       $sql = "INSERT INTO produto  (nome_produto, quantidade, valor) VALUES ('{$nome_produto}', '{$quantidade}', '{$valor}'')";

   
    $res = $conn->query($sql);
    
      if($res==true){
        print" <script > alert('Cadastro com sucesso');
        </script>";
        print" <script > location.href='?page=listar'
        </script>";
      }else{
        print" <script > alert('Não foi possivel efetuar o cadastro sucesso');
        </script>";
       
      }
      break;
  }
 