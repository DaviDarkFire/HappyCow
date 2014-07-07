<?php
	include_once 'conexao.php';
	$p = $_GET['p'];
	if (empty($p)) {
		$pagina = 'telaInicial';
	} else {
		$pagina = $p;
	}

	if (!file_exists($pagina.'.php')) {
		$pagina = "Página não encontrada!";
	}
	/*inclui o layout engessado na tela principal do projeto*/
	include_once('layoutEngessado.php');
?>
			<div class="main">
				<div id="content">
				<?php 
					if (file_exists($pagina.'.php')) {
						include_once("$pagina.php");
					} else {
						echo "A página que você tentou acessar não existe!";
					}
				?>
				</div>					
			</div>
