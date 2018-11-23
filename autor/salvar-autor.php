<?php
$nome = $_REQUEST["nome_autor"];

switch($_REQUEST["acao"]){
	case "cadastrar":
	$sql = "INSERT INTO autor (nome_autor) VALUES ('{$nome}')";
	
	$res = $conn->query($sql) or die($conn->error);
	
	if($res==true){
		print "<script>alert('Cadastrou com sucesso!');</script>";
		print "<script>location.href='index.php?page=cad-autor';</script>";
	}else{
		print "<script>alert('Deu erro');</script>";
		print "<script>location.href='index.php?page=cad-autor';</script>";
	}
	break;
	case "editar":
	$sql = "UPDATE autor
	SET nome_autor='{$nome}'
	WHERE id_autor=".$_REQUEST["id_autor"];
	
	$res = $conn->query($sql) or die($conn->error);
	
	if($res==true){
		print "<script>alert('Editou com sucesso!');</script>";
		print "<script>location.href='index.php?page=lis-autor';</script>";
	}else{
		print "<script>alert('Deu erro');</script>";
		print "<script>location.href='index.php?page=lis-autor';</script>";
	}
	break;
	
	case "excluir":
	$sql = "DELETE FROM autor WHERE id_autor=".$_REQUEST["id_autor"];
	
	$res = $conn->query($sql);
	
	if($res==true){
		print "<script>alert('Excluiu com sucesso!');</script>";
		print "<script>location.href='index.php?page=lis-autor';</script>";
	}else{
		print "<script>alert('Deu erro');</script>";
		print "<script>location.href='index.php?page=lis-autor';</script>";
	}
	break;
}


?>