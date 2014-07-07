<?php
	include_once('layoutEngessado.php');
	include_once("conexao.php");
		
	/*Pega os valores do form e faz a pesquisa no banco de dados*/

	$sql = "SELECT * FROM Venda";

	if(isset($_POST["selectTipo"])){
		//esse if ve se o select que define o tipo de pesquisa foi selecionado

		$selectTipo = $_POST["selectTipo"];

		/* as próximas 2 comparações veêm que tipo de pesquisa o usuário escolheu e realiza essas pesquisas*/

		if($selectTipo == 0){			
			$valorPesquisa = $_POST["cliente"];
			$sql = $sql." WHERE Cliente_idCliente LIKE '$valorPesquisa'";
		}
		if ($selectTipo == 1){
			$valorPesquisa = $_POST["acougueiro"];
			$sql = $sql." WHERE Acougueiro_idAcougueiro LIKE '$valorPesquisa'";			
		}
		if ($selectTipo == 2){
			$valorPesquisa = $_POST["caixa"];
			$sql = $sql." WHERE Caixa_idCaixa LIKE '$valorPesquisa'";			
		}		

		$res = mysql_query($sql) or die ("Erro ao pesquisar os dados da venda: ".mysql_error());		
		//os próximos echo montam a tabela de exibição do resultado da pesquisa

		echo "<h2>Resultado da Pesquisa:</h2>";
		echo "<table>";
		echo "<tr>
				<th>Num. Venda</th>
				<th>Cliente</th>
				<th>Caixa</th>
				<th>Acougueiro</th>
			 </tr>";

		while($registro = mysql_fetch_assoc($res)){							
			$idVenda = $registro["idVenda"];
			$Cliente_idCliente = $registro["Cliente_idCliente"];
			$Caixa_idCaixa = $registro["Caixa_idCaixa"];
			$Acougueiro_idAcougueiro = $registro["Acougueiro_idAcougueiro"];							
														
			/*como a tabela venda armazena apenas os ids das outras tabelas,
			o código abaixo serve para mostrar ao usuário os nomes correspondentes, visto que não faria
			sentido para o usuário uma tabela cheia de números.
			O único número que aparece nessa tabela, é o número da venda, visto que não é possível atri-
			buir um nome para uma venda*/

			$sql = "SELECT * FROM Cliente WHERE idCliente='$Cliente_idCliente'";
			$res2 = mysql_query($sql);

			while($registro2 = mysql_fetch_assoc($res2)){
				$cliente = $registro2['nome'];
			}

			$sql = "SELECT * FROM Caixa WHERE idCaixa='$Caixa_idCaixa'";
			$res3 = mysql_query($sql);

			while($registro3 = mysql_fetch_assoc($res3)){
				$caixa = $registro3['nome'];
			}

			$sql = "SELECT * FROM Acougueiro WHERE idAcougueiro='$Acougueiro_idAcougueiro'";
			$res4 = mysql_query($sql) or die("Erro ao pesquisar dados do acougueiro: ".mysql_error());

			while($registro4 = mysql_fetch_assoc($res4)){
				$acougueiro = $registro4['nome'];

			}
					
			echo "<tr>
					<td>$idVenda</td>
					<td>$cliente</td>
					<td>$caixa</td>
					<td>$acougueiro</td>					
			      </tr>";							      
			}				      							    																																	 		
	}			
?>