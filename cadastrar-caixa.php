		<form action="salvar-caixa.php" method="POST">

			<fieldset>
				<legend>Caixa</legend>
				<div class='form-elements'>						
					<label for="nome">Nome do Caixa</label>
					<br>
					<input id="nome" name="nome" type="text" required>
				</div>					
				<div class='form-elements'>					
					<label for="tipo">Tipo do Caixa</label>
					<br>
					<select name="tipo">
						<option value="normal">Normal</option>
						<option value="poucosProdutos">Poucos Produtos</option>						
					</select>
				</div>						
				<div class='form-elements'>					
					<label for="aceitaCartao">Aceita Cartão?</label>
					<br>
					<input type="radio" name="aceitaCartao" value="sim">Sim
					<input type="radio" name="aceitaCartao" value="nao">Não
				</div>					
			</fieldset>	
			<input type="submit" value="Salvar">
		</form>	