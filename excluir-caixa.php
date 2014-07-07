<?php
	include_once('conexao.php');
	include_once('layoutEngessado.php');

	$idCaixa = $_GET["id"];	

	$sql = "DELETE FROM Caixa WHERE idCaixa = $idCaixa";

	$res = mysql_query($sql) or die("Erro ao excluir caixa: ".mysql_error());

	echo "<script type='text/javascript'>

			alert('Caixa excluído com sucesso.');

		  </script>";
	
?>
