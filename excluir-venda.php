<?php
	include_once('conexao.php');
	include_once('layoutEngessado.php');

	$idVenda = $_GET["id"];	

	$sql = "DELETE FROM Venda WHERE idVenda = $idVenda";

	mysql_query($sql) or die("Erro ao excluir venda: ".mysql_error());

	/*As linhas de cima excluem o valor que o usuário escolheu para ser excluido.
	As linhas abaixo deste comentário excluem o id da venda que está sendo excluída 
	da tabela Item_Venda, visto que não pode existir uma referência a uma venda que
	não existe */

	$sql = "UPDATE Item_Venda SET idVenda='' WHERE idVenda='$idVenda'";

	mysql_query($sql) or die("Erro ao atualizar a tabela Item_Venda: ".mysql_error());

	echo "<script type='text/javascript'>

			alert('Venda excluída com sucesso.');

		  </script>";
	
?>