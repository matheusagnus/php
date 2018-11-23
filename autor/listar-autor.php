<h1>Listar Autor</h1>
<?php
	$sql = "SELECT * FROM autor";
	
	$res = $conn->query($sql) or die($conn->error);
	
	$qtd = $res->num_rows;
	
	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Nome</th>";
		print "<th>Ações</th>";  
		print "</tr>";
		while($row = $res->fetch_assoc()){
			print "<tr>";
			print "<td>".$row["id_autor"]."</td>";
			print "<td>".$row["nome_autor"]."</td>";
			print "<td>
					
					<button onclick=\"location.href='index.php?page=edi-autor&id_autor=".$row["id_autor"]."';\" class='btn btn-success'>Editar</button>
					
					<button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='index.php?page=sal-autor&acao=excluir&id_autor=".$row["id_autor"]."';}else{false;}\"  class='btn btn-danger'>Excluir</button>
			
				   </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultados";
	}
?>






