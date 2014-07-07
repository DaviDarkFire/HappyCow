		<form action="pesquisar-cliente-recebe-valores.php" method="POST">
			<fieldset>
				<legend>Cliente</legend>
				<div class='form-elements'>
					<label>Escolha por qual campo deseja fazer a pesquisa:</label>
					<br>
					<select name="selectTipo">
						<option value="0">Nome</option>
						<option value="1">Endereço</option>
						<option value="2">Telefone</option>
					</select>
				</div>
				<div class='form-elements'>	
					<label for="nome">Nome do Cliente</label>
					<br>
					<input id="nome" name="nome" type="text">
				</div>
				<div class='form-elements'>	
					<label for="endereco">Endereço do Cliente</label>
					<br>
					<input id="endereco" name="endereco" type="text">
				</br>	
				<div class='form-elements'>
					<label for="telefone">Telefone do Cliente</label>
					<br>
					<input id="telefone" name="telefone" type="text">
				</div>	

			</fieldset>
			<input type="submit" value="Pesquisar">
		</form>