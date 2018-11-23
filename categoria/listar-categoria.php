<h1>Listar Categorias</h1>
<?php
	$sql = "SELECT * FROM categoria";
	
	$res = $conn->query($sql) or die($conn->error);
	
	$qtd = $res->num_rows;
	
	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
			print "<tr>";
			print "<th>#</th>";
			print "<th>Nome da Categoria</th>";
			print "<th>Ações</th>";   
			print "</tr>";
		$count = 1;
		while($row = $res->fetch_assoc()){
			print "<tr>";
			print "<td>".$count++."</td>";
			print "<td>".$row["nome_categoria"]."</td>";
			print "<td>
					
					<button onclick=\"location.href='index.php?page=edi-categoria&id_categoria=".$row["id_categoria"]."';\" class='btn btn-success'>Editar</button>
					
					<button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='index.php?page=sal-categoria&acao=excluir&id_categoria=".$row["id_categoria"]."';}else{false;}\"  class='btn btn-danger'>Excluir</button>
			
				   </td>"; 
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultados";
	}
?>







