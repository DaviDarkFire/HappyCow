<?php
	include_once('layoutEngessado.php');
	include_once("conexao.php");

	$nome = $_POST['nome'];
	$especialidade = $_POST['especialidade'];	
	/*Pega os valores do form e faz o cadastro no banco de dados*/
	$sql = "INSERT INTO Acougueiro(nome,
								   especialidade)								   							  
								   VALUES 
							   	   ('$nome', 
								    '$especialidade')";

	mysql_query($sql) or die ("Erro ao inserir na tabela Açougueiro: ".mysql_error());	
?>