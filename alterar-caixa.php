<?php
	include_once('conexao.php');
	include_once('layoutEngessado.php');

	$idCaixa = $_GET["id"];

	$nome;
	$tipo;
	$aceitaCartao;

	//na linha abaixo eu pego o id do caixa que o usuário quer alterar
	$sql = "SELECT * FROM Caixa WHERE idCaixa = $idCaixa";

	$res = mysql_query($sql) or die("Erro ao pesquisar caixa: ".mysql_error());

	//faço variáveis receberem os valores pegos do banco de dados
	while($registro = mysql_fetch_assoc($res)){
		
		$nome = $registro['nome'];
		$tipo =  $registro['tipo'];
		$aceitaCartao = $registro['aceitaCartao'];
	}
	//monto o form de alteração dos dados do açougueiro
	echo "<form action='salvar-alteracoes-caixa.php?id=$idCaixa' method='POST'>";
	echo 		"<fieldset>";
	echo 				"<legend>Caixa</legend>";
	echo 				"<div class='form-elements'>";
	echo    				"<label>Nome</label>";
	echo 					"<br>";
	echo 					"<input type='text' name='nome' id='nome'>";
	echo 				"</div>";
	echo 				"<div class='form-elements'>";	
	echo    				"<label>Tipo</label>";
	echo 					"<br>";
	echo    				"<select name='tipo'>"; 												
	echo 						"<option value='normal'>Normal</option>";
	echo 						"<option value='poucosProdutos'>Poucos Produtos</option>";	
	echo    				"</select>";
	echo 				"</div>";
	echo 				"<div class='form-elements'>";
	echo 					"<label for='aceitaCartao'>Aceita Cartão?</label>";
	echo 					"<br>";
	echo 					"<input type='radio' name='aceitaCartao' value='sim'>Sim";
	echo 					"<input type='radio' name='aceitaCartao' value='nao'>Não";
	echo 				"</div>";					
	echo 		"</fieldset>";

	echo 	"<input type='submit' name='salvar' value='Salvar'>";
	echo "</form>";	

	//na linha abaixo faço os inputs da página receberem os valores que eu peguei do banco de dados para serem alterados
	echo "<script type='text/javascript'>

			document.getElementById('nome').value = '$nome';			
		 </script>";
	
?>	