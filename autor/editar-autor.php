<h1>Editar Autor</h1>
<?php
	$sql = "SELECT * FROM autor WHERE id_autor = ".$_REQUEST["id_autor"];
	
	$res = $conn->query($sql);
	
	$row = $res->fetch_assoc();
?>
<form action="index.php?page=sal-autor" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_autor" value="<?php print $_REQUEST["id_autor"]; ?>">
	<div class="form-group">
		<label>Nome do Autor</label>
		<input type="text" name="nome_autor" class="form-control" value="<?php print $row["nome_autor"]; ?>">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-info">Enviar</button>
	</div>
</form>