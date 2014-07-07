<?php
	/*faz a conexão com o banco de dados*/
	$servidor = "localhost";
	$usuario  = "root";
	$senha    = "root";

	mysql_connect($servidor, $usuario, $senha) or die("Erro na Conexão. ".mysql_error());
	mysql_select_db("Acougue_trab_final_WEB2") or die("Erro ao selecionar BD. ".mysql_error());

?>