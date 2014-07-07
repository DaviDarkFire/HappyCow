		<form action="pesquisar-produto-recebe-valores.php" method="POST">
			<fieldset>
				<legend>Produto</legend>
				<div class='form-elements'>
					<!--Este select abaixo pergunta por qual campo o usuário deseja fazer a pesquisa-->
					<label for="selectTipo">Escolha por qual campo deseja fazer a pesquisa:</label>
					<br>
					<select name="selectTipo">
						<option value="0">Nome</option>
						<option value="1">Categoria</option>
						<option value="2">Marca</option>
						<option value="3">Preço</option>
					</select>
				</div>
				<div class='form-elements'>	
					<label for="nome">Nome do Produto</label>
					<br>
					<input id="nome" name="nome" type="text">
				</div>
				<div class='form-elements'>	
					<label for="marca">Marca do Produto</label>
					<br>
					<input id="marca" name="marca" type="text">
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
					<input id="preco" name="preco" type="text">
				</div>	
			</fieldset>	

			<input type="submit" value="Pesquisar">
		</form>			