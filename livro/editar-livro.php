<h1>Editar Livro</h1>
<?php
	$sql = "SELECT * FROM livro WHERE id_livro = ".$_REQUEST["id_livro"];
	
	$res = $conn->query($sql);
	
	$row = $res->fetch_assoc(); 
?>
<form action="index.php?page=sal-livro" method="POST">
	<input type="hidden" name="acao" value="editar">
	<div class="form-group">
<label>Título</label>
		<input type="text" name="titulo_livro" class="form-control">
	</div>

	<?php
		$sql = "SELECT * FROM categoria";
		
		$res = $conn->query($sql);
		
		print "<div class='form-group'>";
		print "<label>Categoria</label>";
		
		print "<select name='categoria_id_categoria' class='form-control'>";
		print "<option>-Escolha-</option>";
		if($res->num_rows > 0){		
			while($row = $res->fetch_assoc()){
				print "<option value='".$row["id_categoria"]."'>".$row["nome_categoria"]."</option>";
			}		
		}else{
			print "<option>N/A</option>";
		}
		print "</select>";
		
		print "</div>";
		
		print "<div class='form-group'>";
		print "<label>Autor</label>";
		
		$sql = "SELECT * FROM autor";
		
		$res = $conn->query($sql);
		
		print "<select name='autor_id_autor' class='form-control'>";
		print "<option>-Escolha-</option>";
		if($res->num_rows > 0){		
			while($row = $res->fetch_assoc()){
				print "<option value='".$row["id_autor"]."'>".$row["nome_autor"]."</option>";
			}		
		}else{
			print "<option>N/A</option>";
		}
		print "</select>";
		
		print "</div>";
	?>
	<button type="submit" class="btn btn-info">Enviar</button>
	</form>