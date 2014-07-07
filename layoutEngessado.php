<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Tela Inicial</title>
		<link rel="stylesheet" href="css/estiloLayoutEngessado.css">
	</head>	
	<body>
		<!--O layout engessado define a parte que vai ficar fixa no software-->
		<header>
			<span>Franquia de Açougues HappyCow</span>
		</header>
		<div id="menu">
			
			<ul>
				<li><a href="<?php echo '?p=clientes'; ?>">Cliente</a></li>
				<li><a href="<?php echo '?p=acougueiro'; ?>">Açougueiro</a></li>
				<li><a href="<?php echo '?p=caixa'; ?>">Caixa</a></li>
				<li><a href="<?php echo '?p=produto'; ?>">Produto</a></li>
				<li><a href="<?php echo '?p=vendas'; ?>">Vendas</a></li>
			</ul>	
		</div>	
