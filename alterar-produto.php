<?php
	include_once('conexao.php');
	include_once('layoutEngessado.php');

	$idProduto = $_GET["id"];

	$nome;
	$marca;
	$preco;
	$quantidade;

	//na linha abaixo eu pego o id do produto que o usuário quer alterar
	$sql = "SELECT * FROM Produto WHERE idProduto = $idProduto";

	$res = mysql_query($sql) or die("Erro ao pesquisar produto: ".mysql_error());

	//faço variáveis receberem os valores pegos do banco de dados
	while($registro = mysql_fetch_assoc($res)){
		
		$nome = $registro['nome'];
		$categoria =  $registro['categoria'];
		$marca = $registro['marca'];
		$preco = $registro['preco'];
	}

	/*o select abaixo pega o Item_Venda que possui o id do produto que está sendo alterado*/
	$sql = "SELECT * FROM Item_Venda WHERE idProduto = $idProduto";

	$res = mysql_query($sql) or die("Erro ao pesquisar produto: ".mysql_error());

	while($registro = mysql_fetch_assoc($res)){
		
		$quantidade = $registro['quantidade'];
				
	}

	//monto o form de alteração dos dados do produto
	echo "<form action='salvar-alteracoes-produto.php?id=$idProduto' method='POST'>";
	echo 		"<fieldset>";
	echo 				"<legend>Produto</legend>";
	echo 				"<div class='form-elements'>";
	echo    				"<label>Nome</label>";
	echo 					"<br>";
	echo 					"<input type='text' name='nome' id='nome'>";
	echo 				"</div>";
	echo 				"<div class='form-elements'>";
	echo 					"<label for='marca'>Marca do Produto</label>";
	echo 					"<br>";
	echo 					"<input id='marca' name='marca' type='text'>";
	echo 				"</div>";
	echo 				"<div class='form-elements'>";
	echo 					"<label for='categoria'>Categoria do Produto</label>";
	echo 					"<br>";
	echo 					"<select name='categoria'>";
	echo 						"<option value='bovina'>Carne Bovina</option>";
	echo 						"<option value='suina'>Carne Suina</option>";
	echo 						"<option value='frango'>Carne de Frango</option>";
	echo 						"<option value='carvao'>Carvão</option>";
	echo 					"</select>";
	echo 				"</div>";
	echo 				"<div class='form-elements'>";
	echo 					"<label for='preco'>Preço do Produto</label>";
	echo 					"<br>";
	echo 					"<input id='preco' name='preco' type='text'>";
	echo 				"</div>";
	echo 				"<div class='form-elements'>";
	echo 					"<label>Quantidade:</label>";
	echo 					"<br>";
	echo 					"<input type='text' name='quantidade' id='quantidade'>";
	echo 				"</div>";
	echo 		"</fieldset>";

	echo 		"<input type='submit' name='salvar' value='Salvar'>";
	echo "</form>";	

	//na linha abaixo faço os inputs da página receberem os valores que eu peguei do banco de dados para serem alterados
	echo "<script type='text/javascript'>

			document.getElementById('nome').value = '$nome';
			document.getElementById('marca').value = '$marca';			
			document.getElementById('preco').value = '$preco';
			document.getElementById('quantidade').value = '$quantidade';
		 </script>";
	
?>