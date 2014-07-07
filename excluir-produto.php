<?php
	include_once('conexao.php');
	include_once('layoutEngessado.php');

	$idProduto = $_GET["id"];


	$sql = "DELETE FROM Produto WHERE idProduto = $idProduto";

	$res = mysql_query($sql) or die("Erro ao excluir produto: ".mysql_error());

	//as linhas abaixo excluem o produto da tabela Item_Venda

	$sql = "DELETE FROM Item_Venda WHERE idProduto = $idProduto";

	$res = mysql_query($sql) or die("Erro ao excluir Item Venda: ".mysql_error());

	echo "<script type='text/javascript'>

			alert('Produto excluído com sucesso.');

		  </script>";
	
?>