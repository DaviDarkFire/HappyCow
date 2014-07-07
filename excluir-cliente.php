<?php
	include_once('conexao.php');
	include_once('layoutEngessado.php');

	$idCliente = $_GET["id"];	

	$sql = "DELETE FROM Cliente WHERE idCliente = $idCliente";

	$res = mysql_query($sql) or die("Erro ao excluir cliente: ".mysql_error());

	echo "<script type='text/javascript'>

			alert('Cliente excluído com sucesso.');

		  </script>";
	
?>