<?php
	include_once('conexao.php');
	include_once('layoutEngessado.php');

	$idCliente = $_GET["id"];

	$nome;
	$endereco;
	$telefone;

	//na linha abaixo eu pego o id do cliente que o usuário quer alterar
	$sql = "SELECT * FROM Cliente WHERE idCliente = $idCliente";

	$res = mysql_query($sql) or die("Erro ao pesquisar cliente: ".mysql_error());

	//faço variáveis receberem os valores pegos do banco de dados
	while($registro = mysql_fetch_assoc($res)){
		
		$nome = $registro['nome'];
		$endereco =  $registro['endereco'];
		$telefone = $registro['telefone'];
	}
	//monto o form de alteração dos dados do cliente
	echo "<form action='salvar-alteracoes-cliente.php?id=$idCliente' method='POST'>";
	echo 		"<fieldset>";
	echo 				"<legend>Cliente</legend>";
	echo 				"<div class='form-elements'>";
	echo    				"<label>Nome do cliente</label>";
	echo 					"<br>";
	echo 					"<input type='text' name='nome' id='nome'>";
	echo 				"</div>";
	echo 				"<div class='form-elements'>";
	echo 					"<label for='endereco'>Endereço do Cliente</label>";
	echo 					"<br>";
	echo 					"<input id='endereco' name='endereco' type='text'>";
	echo 				"</div>";
	echo 				"<div class='form-elements'>";
	echo 					"<label for='telefone'>Telefone do Cliente</label>";
	echo 					"<br>";
	echo 					"<input id='telefone' name='telefone' type='text'>";
	echo 				"</div>";
	echo 		"</fieldset>";

	echo 		"<input type='submit' name='salvar' value='Salvar'>";
	echo "</form>";	

	//na linha abaixo faço os inputs da página receberem os valores que eu peguei do banco de dados para serem alterados
	echo "<script type='text/javascript'>

			document.getElementById('nome').value = '$nome';
			document.getElementById('endereco').value = '$endereco';			
			document.getElementById('telefone').value = '$telefone';
		 </script>";
	
?>