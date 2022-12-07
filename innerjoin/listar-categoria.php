<h1>listar Usuário</h1>
<?php
	  $sql = "SELECT * FROM categoria"; 
    $res = $conn->query($sql);
    $qtd = $res->num_rows;
    print "<p>Encontrou <b>$qtd</b> resultados</p>";

    if ($qtd > 0) {
        print "<table class='table table-hover table-striped table-border'>";
            print "<tr>";
            print "<th>#</th>";
            print "<th>Nome categoria</th>";
            print "<th>Ações</th>";
            print "</tr>";
    	 while ($row = $res->fetch_object()) {
              print "<tr>";
    	      	print "<td>".$row->cod_categoria."</td>";
    	 	     print "<td>".$row->nome_categoria."</td>";


            print "<td>
            <button class='btn btn-danger'  onclick=\"if(confirm('Tem Certeza que deseja excluir')){location.href='?page=salvar-livro&acao=excluir&cod_categoria=".$row->cod_categoria."';}else{false;}\" >Excluir</button>
            </td>";
              print "</tr>";
    	 }
           print "</table>";
    } else {
    	print "<p class='alert alert-danger'> Não encontrou resultado!</p>";
    }
    ?>


            
        
    
