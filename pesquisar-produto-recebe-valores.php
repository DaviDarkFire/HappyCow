<?php
	include_once('layoutEngessado.php');
	include_once("conexao.php");
		
	/*Pega os valores do form e faz a pesquisa no banco de dados*/

	$sql = "SELECT * FROM Produto";

	if(isset($_POST["selectTipo"])){
		//esse if ve se o select que define o tipo de pesquisa foi selecionado

		$selectTipo = $_POST["selectTipo"];

		/* as próximas 3 comparações veêm que tipo de pesquisa o usuário escolheu e realiza essas pesquisas*/

		if($selectTipo == 0){			
			$valorPesquisa = $_POST["nome"];
			$sql = $sql." WHERE nome LIKE '%$valorPesquisa%'";

		}else if ($selectTipo == 1){
			$valorPesquisa = $_POST["categoria"];
			$sql = $sql." WHERE categoria LIKE '$valorPesquisa'";			
		}
		if ($selectTipo == 2){
			$valorPesquisa = $_POST["marca"];
			$sql = $sql." WHERE marca LIKE '%$valorPesquisa%'";			
		}
		if ($selectTipo == 3){
			$valorPesquisa = $_POST["preco"];
			$sql = $sql." WHERE preco LIKE '$valorPesquisa'";			
		}

		
		//os 3 próximos echo montam a tabela de exibição do resultado da pesquisa

		echo "<h2>Resultado da Pesquisa:</h2>";
		echo "<table>";
		echo "<tr>
				<th>Nome</th>
				<th>Categoria</th>
				<th>Marca</th>
				<th>Preço</th>
				<th>Venda</th>
			 </tr>";

		$res = mysql_query($sql) or die ("Erro ao pesquisar os dados do caixa: ".mysql_error());
		//o while abaixo coloca os valores pesquisados na tabela 
		while ($registro = mysql_fetch_assoc($res)){
			$nomeP = $registro["nome"];
			$categoriaP = $registro["categoria"];
			$marcaP = $registro["marca"];
			$precoP = $registro["preco"];
			$idVendaP = $registro["Venda_idVenda"];

			echo "<tr>
					<td>$nomeP</td>
					<td>$categoriaP</td>
					<td>$marcaP</td>
					<td>$precoP</td>
					<td>$idVendaP</td>
			     </tr>";
		}
		echo "</table>";

	}
			
?>