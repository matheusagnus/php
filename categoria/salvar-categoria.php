<?php
	$nome = @$_REQUEST["nome_categoria"];
	
	switch($_REQUEST["acao"]){
		case "cadastrar":
			$sql = "INSERT INTO categoria (nome_categoria) VALUES ('{$nome}')";
			
			$res = $conn->query($sql);
			
			if($res==true){
				print "<br><div class='alert alert-success'>Cadastro com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível cadastrar!</div>";
			}
			
		break;
		case "editar":
			$sql = "UPDATE categoria
					SET nome_categoria='{$nome}'
					WHERE id_categoria=".$_REQUEST["id_categoria"];
					
			$res = $conn->query($sql);
			
			if($res==true){
				print "<script>alert('Editou com sucesso!');</script>";
				print "<script>location.href='index.php?page=lis-categoria';</script>";
			}else{
				print "<script>alert('Deu erro');</script>";
				print "<script>location.href='index.php?page=lis-categoria';</script>";
			}
		break;
		case "excluir":
			$sql = "DELETE FROM categoria WHERE id_categoria=".$_REQUEST["id_categoria"];
			
			$res = $conn->query($sql);
			
			if($res==true){
				print "<script>alert('Excluiu com sucesso!');</script>";
				print "<script>location.href='index.php?page=lis-categoria';</script>";
			}else{
				print "<script>alert('Deu erro');</script>";
				print "<script>location.href='index.php?page=lis-categoria';</script>";
			}
		break;
	}
?>







