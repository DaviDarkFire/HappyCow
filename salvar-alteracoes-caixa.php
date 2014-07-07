<?php
	include_once('conexao.php');
	include_once('layoutEngessado.php'); 
	
	//pega os valores passados
	$nome = $_POST['nome'];
	$tipo = $_POST['tipo'];
	$aceitaCartao = $_POST['aceitaCartao'];
	$idCaixa = $_GET['id'];

	//salva no banco de dados a alteração
	$sql = "UPDATE Caixa SET nome='$nome', 
	tipo='$tipo', aceitaCartao='$aceitaCartao' WHERE idCaixa='$idCaixa'";

	mysql_query($sql) or die ("Erro ao alterar caixa: ".mysql_error());


 ?>