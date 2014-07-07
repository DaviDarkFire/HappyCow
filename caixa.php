		


		<!--Direciona o Usuário para a tela de cadastro ou pesquisa de um caixa-->
		<ul>
			<li><a href="<?php echo '?p=cadastrar-caixa'; ?>">Cadastrar</a></li>			
			<li><a href="<?php echo '?p=pesquisar-caixa'; ?>">Pesquisar</a></li>			
		</ul>

			<table>
				<thead>
					<tr>						
						<th>Nome</th>
						<th>Tipo</th>
						<th>Aceita Cartão?</th>
						<th>Excluir</th>
						<th>Alterar</th>
					</tr>
				</thead>
				<tbody>	
					<?php
						/*O código abaixo mostra todos os caixas cadastrados*/
						$sql = "SELECT * FROM Caixa";

						$res = mysql_query($sql) or die("Erro ao pesquisar dados dos caixas: ".mysql_error());							
						
						while($registro = mysql_fetch_assoc($res)){							
							$nome = $registro["nome"];
							$tipo = $registro["tipo"];
							$aceitaCartao = $registro["aceitaCartao"];
							$idCaixa = $registro["idCaixa"];
													
							echo "<tr>
									<td>$nome</td>
									<td>$tipo</td>
									<td>$aceitaCartao</td>
									<td><a href='excluir-caixa.php?id=$idCaixa'><img src='icons/02.png' alt='Excluir'></a></td>										
									<td><a href='alterar-caixa.php?id=$idCaixa'><img src='icons/0003.png' alt='Alterar'></a></td>
							      </tr>";								
																				
						}
						/*Fim do código que mostra os caixas cadastrados*/																			
					?>
				</tbody>	
			</table>
		