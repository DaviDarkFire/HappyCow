		<form action="salvar-produto.php" method="POST">

			<fieldset>
				<legend>Produto</legend>	
				<div class='form-elements'>
					<label for="nome">Nome do Produto</label>
					<br>
					<input id="nome" name="nome" type="text" required>
				</div>
				<div class='form-elements'>	
					<label for="marca">Marca do Produto</label>
					<br>
					<input id="marca" name="marca" type="text" required>
				</div>	
				<div class='form-elements'>
					<label for="categoria">Categoria do Produto</label>
					<br>
					<select name="categoria">
							<option value="bovina">Carne Bovina</option>
							<option value="suina">Carne Suina</option>
							<option value="frango">Carne de Frango</option>
							<option value="carvao">Carvão</option>
					</select>
				</div>
				<div class='form-elements'>	
					<label for="preco">Preço do Produto</label>
					<br>
					<input id="preco" name="preco" type="text" required>
				</div>							
			</fieldset>			

			<input type="submit" value="Salvar">
		</form>			