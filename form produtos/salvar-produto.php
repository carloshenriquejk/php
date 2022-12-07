<?php 
  switch ($_REQUEST["acao"]) {
  	case 'cadastrar':
  		$nome = $_POST["nome"];
  		$quantidade = $_POST["quantidade"];
  		$valor = $_POST["valor"];
      $descricao = $_POST["descricao"];
      $subtotal = $quantidade * $valor;
      $total = $subtotal;
      echo "<script>console.log('Console: " . $nome . "' );</script>";
      echo "<script>console.log('Console: " . $quantidade . "' );</script>";
      echo "<script>console.log('Console: " . $valor . "' );</script>";

  		$sql = "INSERT INTO produtos  (nome, quantidade, valor, descricao, total ) VALUES ('{$nome}', '{$quantidade}', '{$valor}', '{$descricao}',  '{$total}')";

  		$res = $conn->query($sql);

  		if($res==true){
  			print" <script > alert('Cadastro com sucesso');
  			</script>";
  			print" <script > location.href='?page=listar'
  			</script>";
  		}else{
  			print" <script > alert('Não foi possivel efetuar o cadastro sucesso');
  			</script>";
  			//print" <script > location.href='?page=listar'
  			//</script>";
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
  
  }
 