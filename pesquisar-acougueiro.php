

		<form action="pesquisar-acougueiro-recebe-valores.php" method="POST">
			<fieldset>
				<legend>Acougueiro</legend>
				<div class='form-elements'>
					<label>Deseja fazer a pesquisa por nome ou especialidade do Açougueiro?</label>
					<!--Este select abaixo pergunta se o usuário quer fazer pesquisa por nome ou especialidade-->
					<select name="selectTipo">
						<option value="0">Nome</option>
						<option value="1">Especialidade</option>
					</select>
				</div>	
				<div class='form-elements'>				
					<label for="nome">Pesquisar Aç. por nome:</label>
					<input type="text" name="nome" id="nome">
				</div>	
				<div class='form-elements'>
					<label for="nome">Pesquisar Aç. por Especialidade:</label>
					<select name="especialidade">
							<option value="bovina">Carne Bovina</option>
							<option value="suina">Carne Suina</option>
							<option value="frango">Carne de Frango</option>
					</select>
				</div>	
			</fieldset>
			<input type="submit" value="Pesquisar">
		</form>