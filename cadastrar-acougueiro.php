		<form action="salvar-acougueiro.php" method="POST">

			<fieldset>
				<legend>Açougueiro</legend>
				<div class='form-elements'>					
					<label for="nome">Nome do Acougueiro</label>
					<br>
					<input id="nome" name="nome" type="text" required>
				</div>
				<div class='form-elements'>
					<label for="especialidade">Especialidade do Acougueiro</label>
					<br>
					<select name="especialidade">
							<option value="bovina">Carne Bovina</option>
							<option value="suina">Carne Suina</option>
							<option value="frango">Carne de Frango</option>
					</select> 	
				</div>			
			</fieldset>		
			<input type="submit" value="Salvar">
		</form>	