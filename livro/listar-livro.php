<h1>Listar Livro</h1>
<?php
	$sql = "SELECT l.*, c.*, a.* 
			FROM livro AS l
			INNER JOIN categoria AS c
			ON c.id_categoria = l.categoria_id_categoria
			INNER JOIN autor AS a
			ON a.id_autor = l.autor_id_autor";
	
	$res = $conn->query($sql) or die($conn->error);
	
	$qtd = $res->num_rows;
	
	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-striped table-bordered table-hover'>";
		print "<tr>";
		print "<th>Nº</th>";
		print "<th>Título</th>";
		print "<th>Categoria</th>";
		print "<th>Autor</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $res->fetch_assoc()){
			print "<tr>";
			print "<td>".$row["id_livro"]."</td>";
			print "<td>".$row["titulo_livro"]."</td>";
			print "<td>".$row["nome_categoria"]."</td>";
			print "<td>".$row["nome_autor"]."</td>";
			/*print "<td>
					
					<button onclick=\"location.href='index.php?page=edi-livro&id_livro=".$row["id_livro"]."';\" class='btn btn-success'>Editar</button>*/
					print "<td>
					<button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='index.php?page=sal-livro&acao=excluir&id_livro=".$row["id_livro"]."';}else{false;}\"  class='btn btn-danger'>Excluir</button>
			
				   </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultados";
	}
?>