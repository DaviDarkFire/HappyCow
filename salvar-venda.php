<?php
	include_once('layoutEngessado.php');
	include_once("conexao.php");

	$cliente = $_POST['cliente'];
	$acougueiro = $_POST['acougueiro'];	
	$caixa = $_POST['caixa'];
	

	/*Pega os valores do form e faz o cadastro no banco de dados*/
	$sql = "INSERT INTO Venda(Cliente_idCliente,
							  Caixa_idCaixa,
							  Acougueiro_idAcougueiro)
							  VALUES
							  ($cliente,
							   $caixa,
							   $acougueiro)";
	
	mysql_query($sql) or die ("Erro ao inserir na tabela venda: ".mysql_error());

	$sql = "SELECT idVenda FROM Venda";

	$res = mysql_query($sql) or die ("Erro dados da tabela Venda: ".mysql_error());

	/*o os códigos mysql_num_rows e mysql_result, servem para pegar o último valor 
	inserido na tabela Venda*/

	$tamanho = mysql_num_rows($res);	

	$idVenda = mysql_result($res, $tamanho-1);


	/*O foreach a seguir pega os produtos que o usuário escolheu para a venda, e inseri 
	eles na tabela Item_Venda, logo após isso ele pega o id da última venda
	cadastrada e inseri ele onde os produtos forem iguais aos escolhidos pelo usuário */

	foreach ($_POST['produtos'] as $produtos => $valor) {
							
		$sql = "INSERT INTO Item_Venda (idProduto)
										VALUES
										('$valor')";																				

		mysql_query($sql) or die ("Erro ao atualizar o idProduto na tabela Item_venda: ".mysql_error());		

		$sql = "UPDATE Item_Venda SET idVenda='$idVenda' WHERE idProduto='$valor'";
		
		mysql_query($sql) or die ("Erro ao atualizar o idVenda na tabela Item_venda: ".mysql_error());								
	}
	echo "<script type='text/javascript'>alert('Venda cadastrada com sucesso');</script>";
	
?>