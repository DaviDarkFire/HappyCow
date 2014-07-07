<?php 
	include_once('conexao.php');
	include_once('layoutEngessado.php');

	$cliente = $_POST['cliente'];
	$acougueiro = $_POST['acougueiro'];	
	$caixa = $_POST['caixa'];
	$idVenda = $_POST['idVenda'];

	echo $idVenda;

	$sql = "UPDATE Venda SET Cliente_idCliente='$cliente', Caixa_idCaixa='$caixa',
	Acougueiro_idAcougueiro='$acougueiro' WHERE idVenda='$idVenda'";

	mysql_query($sql) or die ("Não foi possível atualizar os dados da tabela venda: ".mysql_error());

	$sql = "SELECT idVenda FROM Venda";

	$res = mysql_query($sql) or die ("Erro dados da tabela Venda: ".mysql_error());

	/*o os códigos mysql_num_rows e mysql_result, servem para pegar o último valor 
	inserido na tabela Venda*/

	$tamanho = mysql_num_rows($res);	

	$idVenda = mysql_result($res, $tamanho-1);

	/*O foreach a seguir pega os produtos que o usuário escolheu para a venda, e inseri 
	o id de venda na tabela Item_Venda se os ids dos produtos escolhidos para venda
	 e os ids dos produtos na tabela Item_Venda forem iguais */

	foreach ($_POST['produtos'] as $produtos => $valor) {
		/*O delete a seguir deleta os valores a serem alterados para que o novo
		valor digitado pelo usuário tome o seu lugar*/

		$sql = "DELETE FROM Item_Venda WHERE idProduto='$valor'";

		mysql_query($sql);

		/*O código a seguir inseri o id dos produtos digitados pelo usuário na tabela
		Item_venda*/
		$sql = "INSERT INTO Item_Venda (idProduto)
										VALUES
										('$valor')";																				

		mysql_query($sql) or die ("Erro ao atualizar o idProduto na tabela Item_venda: ".mysql_error());

		/*O código a seguir altera o id de venda em Item_Venda*/

		$sql = "UPDATE Item_Venda SET idVenda='$idVenda' WHERE idProduto='$valor'";
		
		echo $sql;

		mysql_query($sql) or die ("Erro ao atualizar o idVenda na tabela Item_venda: ".mysql_error());

	}

 ?>