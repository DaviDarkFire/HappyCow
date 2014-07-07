
		<form action="pesquisar-venda-recebe-valores.php" method="POST">
			<fieldset>
				<legend>Produto</legend>
				<div class='form-elements'>
					<label>Por qual campo deseja fazer a pesquisa?</label>
					<!--Este select abaixo pergunta ao usuário por qual campo ele quer fazer a pesquisa-->
					<br>
					<select name="selectTipo">
						<option value="0">Cliente</option>
						<option value="1">Açougueiro</option>
						<option value="2">Caixa</option>				
					</select>
				</div>
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
			</fieldset>		
			<input type="submit" value="Pesquisar">
		</form>
		





























