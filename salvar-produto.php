<?php
	include_once('layoutEngessado.php');
	include_once("conexao.php");

	$nome = $_POST['nome'];
	$marca = $_POST['marca'];
	$preco = $_POST['preco'];
	$categoria = $_POST['categoria'];
	$quantidade = $_POST['quantidade'];
	$idProduto;

	/*Pega os valores do form e faz o cadastro no banco de dados*/
	
	$sql = "INSERT INTO Produto(categoria, 
								nome,
								marca,
								preco) 
								VALUES 
							   ('$categoria', 
								'$nome',
								'$marca',
								'$preco')";
	

	mysql_query($sql) or die ("Erro ao inserir na tabela Produto: ".mysql_error());
	
?>