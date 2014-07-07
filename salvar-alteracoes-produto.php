<?php
	include_once('conexao.php');
	include_once('layoutEngessado.php'); 
	
	//pega os valores passados
	$nome = $_POST['nome'];
	$marca = $_POST['marca'];
	$categoria = $_POST['categoria'];
	$preco = $_POST['preco'];
	$quantidade = $_POST['quantidade'];
	$idProduto = $_GET['id'];

	//salva no banco de dados a alteração
	$sql = "UPDATE Produto SET nome='$nome', 
	marca='$marca', categoria='$categoria', preco='$preco' WHERE idProduto='$idProduto'";

	mysql_query($sql) or die ("Erro ao alterar produto: ".mysql_error());


 ?>