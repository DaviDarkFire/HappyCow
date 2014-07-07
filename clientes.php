		
		<!--Direciona o Usuário para a tela de cadastro ou pesquisa de cliente-->
		<ul>
			<li><a href="<?php echo '?p=cadastrar-cliente'; ?>">Cadastrar</a></li>			
			<li><a href="<?php echo '?p=pesquisar-cliente'; ?>">Pesquisar</a></li>			
		</ul>

			<?php				
				$sql = "SELECT * FROM Cliente";

				$res = mysql_query($sql) or die("Erro ao pesquisar dados dos clientes: ".mysql_error());							
			?>					
			<table>
				<thead>
					<tr>
						<th>Nome</th>
						<th>Endereço</th>
						<th>Telefone</th>
						<th>Excluir</th>
						<th>Alterar</th>
					</tr>
				</thead>
				<tbody>	
					<?php
						/*O código abaixo mostra todos os clientes cadastrados*/
						while($registro = mysql_fetch_assoc($res)){
							$nome = $registro["nome"];
							$endereco = $registro["endereco"];
							$telefone = $registro["telefone"];
							$idCliente = $registro["idCliente"];

							echo "<tr>
									<td>$nome</td>
									<td>$endereco</td>
									<td>$telefone</td>
									<td><a href='excluir-cliente.php?id=$idCliente'><img src='icons/02.png' alt='Excluir'></a></td>
									<td><a href='alterar-cliente.php?id=$idCliente'><img src='icons/0003.png' alt='Alterar'></a></td>
						      </tr>";						      
						}											
					?>
				</tbody>	
			</table>


		
		

