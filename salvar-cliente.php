<?php
	include_once('layoutEngessado.php');
	include_once("conexao.php");

	$nome = $_POST['nome'];
	$endereco = $_POST['endereco'];
	$telefone = $_POST['telefone'];
	
	/*Pega os valores do form e faz o cadastro no banco de dados*/
	$sql = "INSERT INTO Cliente(nome, 
								endereco, 
								telefone) 
								VALUES 
								('$nome', 
								'$endereco', 
								'$telefone')";

	mysql_query($sql) or die ("Erro ao inserir na tabela Cliente: ".mysql_error());	
?>
