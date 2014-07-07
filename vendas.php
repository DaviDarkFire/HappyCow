				
		<!--Direciona o usuário para a tela de cadastro ou pesquisa de venda-->
		<ul>
			<li><a href="<?php echo '?p=cadastrar-venda'; ?>">Cadastrar</a></li>
			<li><a href="<?php echo '?p=pesquisar-venda'; ?>">Pesquisar</a></li>			
		</ul>

		<table>
				<thead>
					<tr>						
						<th>Num. Venda</th>
						<th>Cliente</th>
						<th>Caixa</th>
						<th>Açougueiro</th>
						<th>Excluir</th>
						<th>Alterar</th>						
					</tr>
				</thead>
				<tbody>	
					<?php
						$acougueiro;
						$caixa;
						$cliente;
						/*O código abaixo mostra as vendas cadastradas*/
						$sql = "SELECT * FROM Venda";

						$res = mysql_query($sql) or die("Erro ao pesquisar dados das vendas: ".mysql_error());							
						
						while($registro = mysql_fetch_assoc($res)){							
							$idVenda = $registro["idVenda"];
							$Cliente_idCliente = $registro["Cliente_idCliente"];
							$Caixa_idCaixa = $registro["Caixa_idCaixa"];
							$Acougueiro_idAcougueiro = $registro["Acougueiro_idAcougueiro"];							
														
							/*como a tabela venda armazena apenas os ids das outras tabelas,
							o código abaixo serve para mostrar ao usuário os nomes correspondentes, visto que não faria
							sentido para o usuário uma tabela cheia de números.
							O único número que aparece nessa tabela, é o número da venda, visto que não é possível atri-
							buir um nome para uma venda*/

							$sql = "SELECT * FROM Cliente WHERE idCliente='$Cliente_idCliente'";
							$res2 = mysql_query($sql);

							while($registro2 = mysql_fetch_assoc($res2)){
								$cliente = $registro2['nome'];
							}

							$sql = "SELECT * FROM Caixa WHERE idCaixa='$Caixa_idCaixa'";
							$res3 = mysql_query($sql);

							while($registro3 = mysql_fetch_assoc($res3)){
								$caixa = $registro3['nome'];
							}

							$sql = "SELECT * FROM Acougueiro WHERE idAcougueiro='$Acougueiro_idAcougueiro'";
							$res4 = mysql_query($sql) or die("Erro ao pesquisar dados do acougueiro: ".mysql_error());

							while($registro4 = mysql_fetch_assoc($res4)){
								$acougueiro = $registro4['nome'];

							}
						
							echo "<tr>
									<td>$idVenda</td>
									<td>$cliente</td>
									<td>$caixa</td>
									<td>$acougueiro</td>
									<td><a href='excluir-venda.php?id=$idVenda' onclick='aviso()'><img src='icons/02.png' alt='Excluir'></a></td>																			
									<td><a href='alterar-venda.php?id=$idVenda'><img src='icons/0003.png' alt='Alterar'></a></td>																					
							      </tr>";							      
							      							    																												
						}

						/*Fim do código que mostra os cadastros da tabela venda*/																			
					?>
				</tbody>	
			</table>