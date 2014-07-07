		<form action="salvar-cliente.php" method="POST">
			<fieldset>
				<legend>Cliente</legend>

				<div class='form-elements'>
					<label for="nome">Nome do Cliente</label>
					<br>
					<input id="nome" name="nome" type="text" required>
				</div>
				<div class='form-elements'>
					<label for="endereco">Endereço do Cliente</label>
					<br>
					<input id="endereco" name="endereco" type="text" required>
				</div>
				<div class='form-elements'>
					<label for="telefone">Telefone do Cliente</label>
					<br>
					<input id="telefone" name="telefone" type="text" required>
				</div>
			</fieldset>	
			<input type="submit" value="Salvar">
		</form>