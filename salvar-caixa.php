<?php
	include_once('layoutEngessado.php');
	include_once("conexao.php");

	$nome = $_POST['nome'];
	$tipo = $_POST['tipo'];
	$aceitaCartao = $_POST['aceitaCartao'];

	

	/*Pega os valores do form e faz o cadastro no banco de dados*/
	
	$sql = "INSERT INTO Caixa(  nome,
								tipo,
								aceitaCartao) 
								VALUES 
							   ('$nome', 
								'$tipo',
								'$aceitaCartao')";

	mysql_query($sql) or die ("Erro ao inserir na tabela Produto: ".mysql_error());
?>