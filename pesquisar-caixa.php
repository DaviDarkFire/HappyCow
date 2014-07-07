		

		<form action="pesquisar-caixa-recebe-valores.php" method="POST">
			<fieldset>
				<legend>Caixa</legend>
				<div class='form-elements'>
					<label>Deseja fazer a pesquisa por nome, tipo ou se ele aceita ou não cartão?</label>
					<!--Este select abaixo pergunta por qual campo o usuário quer fazer a pesquisa-->
					<br>
					<select name="selectTipo">
						<option value="0">Nome</option>
						<option value="1">tipo</option>
						<option value="2">Aceita Cartão</option>
					</select>
				</div>	
				<div class='form-elements'>	
					<label for="nome">Pesquisar Aç. por nome:</label>
					<br>
					<input type="text" name="nome" id="nome">
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
			<input type="submit" value="Pesquisar">
		</form>