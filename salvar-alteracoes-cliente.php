<?php
	include_once('conexao.php');
	include_once('layoutEngessado.php'); 
	
	//pega os valores passados
	$nome = $_POST['nome'];
	$endereco = $_POST['endereco'];
	$telefone = $_POST['telefone'];
	$idCliente = $_GET['id'];

	//salva no banco de dados a alteração
	$sql = "UPDATE Cliente SET nome='$nome', 
	endereco='$endereco', telefone='$telefone' WHERE idCliente='$idCliente'";

	mysql_query($sql) or die ("Erro ao alterar caixa: ".mysql_error());


 ?>