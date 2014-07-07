<?php
	include_once('layoutEngessado.php');
	include_once("conexao.php");
		
	/*Pega os valores do form e faz a pesquisa no banco de dados*/

	$sql = "SELECT * FROM Caixa";

	if(isset($_POST["selectTipo"])){
		//esse if ve se o select que define o tipo de pesquisa foi selecionado

		$selectTipo = $_POST["selectTipo"];

		/* as próximas 3 comparações veêm que tipo de pesquisa o usuário escolheu e realiza essas pesquisas*/

		if($selectTipo == 0){			
			$valorPesquisa = $_POST["nome"];
			$sql = $sql." WHERE nome LIKE '%$valorPesquisa%'";

		}else if ($selectTipo == 1){
			$valorPesquisa = $_POST["tipo"];
			$sql = $sql." WHERE tipo LIKE '$valorPesquisa'";			
		}
		if ($selectTipo == 2){
			$valorPesquisa = $_POST["aceitaCartao"];
			$sql = $sql." WHERE aceitaCartao LIKE '$valorPesquisa'";			
		}

		
		//os 3 próximos echo montam a tabela de exibição do resultado da pesquisa

		echo "<h2>Resultado da Pesquisa:</h2>";
		echo "<table>";
		echo "<tr>
				<th>Nome</th>
				<th>Tipo</th>
				<th>Aceita Cartão</th>
			 </tr>";

		$res = mysql_query($sql) or die ("Erro ao pesquisar os dados do caixa: ".mysql_error());
		//o while abaixo coloca os valores pesquisados na tabela 
		while ($registro = mysql_fetch_assoc($res)){
			$nomeP = $registro["nome"];
			$tipoP = $registro["tipo"];
			$aceitaCartaoP = $registro["aceitaCartao"];

			echo "<tr>
					<td>$nomeP</td>
					<td>$tipoP</td>
					<td>$aceitaCartaoP</td>
			     </tr>";
		}
		echo "</table>";

	}
			
?>