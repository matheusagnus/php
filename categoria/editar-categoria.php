<h1>Editar Aluno</h1>
<?php
	$sql = "SELECT * FROM categoria WHERE id_categoria = ".$_REQUEST["id_categoria"];
	
	$res = $conn->query($sql);
	
	$row = $res->fetch_assoc();
?>
<form action="index.php?page=sal-categoria" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_categoria" value="<?php print $_REQUEST["id_categoria"]; ?>">
	<div class="form-group">
		<label>Nome da Categoria</label>
		<input type="text" name="nome_categoria" class="form-control" value="<?php print $row["nome_categoria"]; ?>">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-info">Enviar</button>
	</div>
</form> 