<?php
	include_once('conexao.php');
	include_once('layoutEngessado.php');

	$idAcougueiro = $_GET["id"];

	$nome;
	$especialidade;

	//na linha abaixo eu pego o id do açougueiro que o usuário quer alterar
	$sql = "SELECT * FROM Acougueiro WHERE idAcougueiro = $idAcougueiro";

	$res = mysql_query($sql) or die("Erro ao pesquisar açougueiro: ".mysql_error());

	//faço variáveis receberem os valores pegos do banco de dados
	while($registro = mysql_fetch_assoc($res)){
		
		$nome = $registro['nome'];
		$especialidade =  $registro['especialidade'];
	}
	//monto o form de alteração dos dados do açougueiro
	echo "<form action='salvar-alteracoes-acougueiro.php?id=$idAcougueiro' method='POST'>";
	echo 		"<fieldset>";
	echo 				"<legend>Açougueiro</legend>";	
	echo 				"<div class='form-elements'>";
	echo    				"<label>Nome</label>";
	echo 					"<br>";
	echo 					"<input type='text' name='nome' id='nome'>";
	echo 				"</div>";
	echo 				"<div class='form-elements'>";
	echo    				"<label>Especialidade</label>";
	echo 					"<br>";
	echo    				"<select name='especialidade'>"; 																					
	echo 						"<option value='bovina'>Carne Bovina</option>";
	echo 						"<option value='suina'>Carne Suina</option>";
	echo 						"<option value='frango'>Carne de Frango</option>";
	echo    				"</select>";
	echo 				"</div>";
	echo 		"</fieldset>";	
	echo 				"<input type='submit' name='salvar' value='Salvar'>";
	
	echo "</form>";	

	//na linha abaixo faço os inputs da página receberem os valores que eu peguei do banco de dados para serem alterados
	echo "<script type='text/javascript'>

			document.getElementById('nome').value = '$nome';			
		 </script>";
	
?>