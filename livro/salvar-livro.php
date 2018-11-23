<?php
$categoria = $_REQUEST["categoria_id_categoria"];
$autor 	   = $_REQUEST["autor_id_autor"];
$titulo    = $_REQUEST["titulo_livro"];

switch($_REQUEST["acao"]){
	case "cadastrar":
	$sql = "INSERT INTO livro (categoria_id_categoria, autor_id_autor, titulo_livro ) VALUES ({$categoria}, {$autor}, '{$titulo}')";
	
	$res = $conn->query($sql) or die($conn->error);
	
	if($res==true){
		print "<script>alert('Cadastrou com sucesso!');</script>";
		print "<script>location.href='index.php?page=cad-livro';</script>";
	}else{
		print "<script>alert('Deu erro');</script>";
		print "<script>location.href='index.php?page=cad-livro';</script>";
	}
	
	break;
	case "editar":
	
	$sql = "UPDATE livro
	SET (titulo_livro, categoria_id_categoria, autor_id_autor) VALUES ({$titulo}, {$categoria}, {$autor})
	WHERE id_livro=".$_REQUEST["id_livro"];
	
	$res = $conn->query($sql);
	
	if($res==true){
		print "<script>alert('Editou com sucesso!');</script>";
		print "<script>location.href='index.php?page=lis-livro';</script>";
	}else{
		print "<script>alert('Deu erro');</script>";
		print "<script>location.href='index.php?page=lis-livro';</script>";
	}
	
	break;
	case "excluir":
	
	$sql = "DELETE FROM livro WHERE id_livro=".$_REQUEST["id_livro"];
	
	$res = $conn->query($sql);
	
	if($res==true){
		print "<script>alert('Excluiu com sucesso!');</script>";
		print "<script>location.href='index.php?page=lis-livro';</script>";
	}else{
		print "<script>alert('Deu erro');</script>";
		print "<script>location.href='index.php?page=lis-livro';</script>";
	}

	break;
}
?>




