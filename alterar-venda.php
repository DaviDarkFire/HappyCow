		<?php 
			include_once('conexao.php');
			include_once('layoutEngessado.php');

			$idVenda = $_GET['id'];
			
		 ?>
		<form action="salvar-alteracoes-venda.php" method="POST">
			<fieldset>
				<legend>Venda</legend>
				<input type="text" value=<?php echo $idVenda;?> name="idVenda" hidden/>				
				<div class='form-elements'>	
					<label>Cliente:</label>
					<br>
					<select name="cliente">
						<!--O pedaço de código a seguir coloca o nome dos clientes em um select para serem escolhidos-->
						<?php					
							$sql = "SELECT * FROM Cliente";
							$res = mysql_query($sql) or die("Erro ao pesquisar Cliente: ".mysql_error());
							while ($registro = mysql_fetch_assoc($res)) {
								$idCliente = $registro["idCliente"];
								$nome = $registro["nome"];
								echo "<option value='$idCliente'>$nome</option>";

							}

						?>


					</select>
				</div>
				<div class='form-elements'>	
					<label>Açougueiro:</label>
					<br>
					<select name="acougueiro">
						<!--O pedaço de código a seguir coloca o nome dos açougueiros em um select para serem escolhidos-->
						<?php
							$sql = "SELECT * FROM Acougueiro";
							$res = mysql_query($sql) or die("Erro ao pesquisar Acougueiro: ".mysql_error());
							while ($registro = mysql_fetch_assoc($res)) {
								$idAcougueiro = $registro["idAcougueiro"];
								$nome = $registro["nome"];
								echo "<option value='$idAcougueiro'>$nome</option>";

							}
						?>
					</select>
				</div>	
				<div class='form-elements'>
					<label>Caixa:</label>
					<br>
					<select name="caixa">
						<!--O pedaço de código a seguir coloca o nome das pessoas nos caixas em um select, para serem escolhidos-->
						<?php
							$sql = "SELECT * FROM Caixa";
							$res = mysql_query($sql) or die("Erro ao pesquisar Caixa: ".mysql_error());
							while ($registro = mysql_fetch_assoc($res)) {
								$idCaixa = $registro["idCaixa"];
								$nome = $registro["nome"];
								echo "<option value='$idCaixa'>$nome</option>";

							}
						?>
					</select>
				</div>
				<div class='form-elements'>
					<label>Produtos:</label>
					<div>
						<!--O pedaço de código a seguir coloca o nome dos produtos vendidos em um checkbox, para serem escolhidos-->
						<?php
							$sql = "SELECT * FROM Produto";
							$res = mysql_query($sql) or die("Erro ao pesquisar Produto: ".mysql_error());
							while ($registro = mysql_fetch_assoc($res)) {
								$idProduto = $registro["idProduto"];
								$nome = $registro["nome"];
								echo "<input type='checkbox' name='produtos[]' value='$idProduto'>$nome";

							}
						?>
				</div>		
			</fieldset>							
			<input type="submit" value="Salvar">
		</form>
		