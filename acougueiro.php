
		
		<!--Direciona o Usuário para a tela de cadastro ou pesquisa de açougueiro-->
		<ul>
			<li><a href="<?php echo '?p=cadastrar-acougueiro'; ?>">Cadastrar</a></li>			
			<li><a href="<?php echo '?p=pesquisar-acougueiro'; ?>">Pesquisar</a></li>
		</ul>		
			<table>
				<thead>
					<tr>						
						<th>Nome</th>
						<th>Especialidade</th>
						<th>Excluir</th>
						<th>Alterar</th>						
					</tr>
				</thead>
				<tbody>	
					<?php
						/*O código abaixo mostra os açougueiros cadastrados*/
						$sql = "SELECT * FROM Acougueiro";

						$res = mysql_query($sql) or die("Erro ao pesquisar dados dos açougueiros: ".mysql_error());							
						
						while($registro = mysql_fetch_assoc($res)){							
							$nome = $registro["nome"];
							$especialidade = $registro["especialidade"];
							$idAcougueiro = $registro["idAcougueiro"];							
														
							echo "<tr>
									<td>$nome</td>
									<td>$especialidade</td>
									<td><a href='excluir-acougueiro.php?id=$idAcougueiro'><img src='icons/02.png' alt='Excluir'></a></td>																			
									<td><a href='alterar-acougueiro.php?id=$idAcougueiro'><img src='icons/0003.png' alt='Alterar'></a></td>																					
							      </tr>";							      
							      							    																												
						}
						/*Fim do código que mostra os cadastros da tabela açougueiro*/																			
					?>
				</tbody>	
			</table>
		