<?php
	include_once('conexao.php');
	include_once('layoutEngessado.php'); 
	
	//pega os valores passados
	$nome = $_POST['nome'];
	$especialidade = $_POST['especialidade'];
	$idAcougueiro = $_GET['id'];

	//salva no banco de dados a alteração
	$sql = "UPDATE Acougueiro SET nome='$nome', 
	especialidade='$especialidade' WHERE idAcougueiro='$idAcougueiro'";

	mysql_query($sql) or die ("Erro ao alterar acougueiro: ".mysql_error());


 ?>