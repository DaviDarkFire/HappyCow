<?php
	include_once('conexao.php');
	include_once('layoutEngessado.php');

	$idAcougueiro = $_GET["id"];


	$sql = "DELETE FROM Acougueiro WHERE idAcougueiro = $idAcougueiro";

	$res = mysql_query($sql) or die("Erro ao excluir açougueiro: ".mysql_error());

	echo "<script type='text/javascript'>

			alert('Açougueiro excluído com sucesso.');

		  </script>";
	
?>