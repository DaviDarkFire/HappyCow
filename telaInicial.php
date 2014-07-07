			<h3>Clientes</h3>
			<table>				
				<thead>
					<tr>
						<th>Nome</th>
						<th>Endereço</th>
						<th>Telefone</th>
					</tr>
				</thead>
				<tbody>	
					<?php
						/*O código abaixo mostra as 5 últimas inserções na tabela cliente*/
						$sql = "SELECT * FROM Cliente";

						$res = mysql_query($sql) or die("Erro ao pesquisar dados dos clientes: ".mysql_error());							

						$total = mysql_num_rows($res);						

						$cont = 0;
						while($registro = mysql_fetch_assoc($res)){
							$cont = $cont+1;
							$nome = $registro["nome"];
							$endereco = $registro["endereco"];
							$telefone = $registro["telefone"];

							if ($total-$cont <= 4){
								echo "<tr>
										<td>$nome</td>
										<td>$endereco</td>
										<td>$telefone</td>
							          </tr>";								
							}													
						}
						/*Fim do código que mostra as 5 últimas inserções na tabela cliente*/																			
					?>
				</tbody>	
			</table>

			<h3>Produtos</h3>
			<table>
				<thead>
					<tr>						
						<th>Categoria</th>
						<th>Nome</th>
						<th>Marca</th>
						<th>Preço-R$</th>
					</tr>
				</thead>
				<tbody>	
					<?php
						/*O código abaixo mostra as 5 últimas inserções na tabela produto*/
						$sql = "SELECT * FROM Produto";

						$res = mysql_query($sql) or die("Erro ao pesquisar dados dos produtos: ".mysql_error());							

						$total = mysql_num_rows($res);						

						$cont = 0;
						while($registro = mysql_fetch_assoc($res)){
							$cont = $cont+1;
							$categoria = $registro["categoria"];
							$nome = $registro["nome"];
							$marca = $registro["marca"];
							$preco = $registro["preco"];							


							if ($total-$cont <= 4){
								echo "<tr>										
										<td>$categoria</td>
										<td>$nome</td>
										<td>$marca</td>
										<td>$preco</td>
							          </tr>";								
							}													
						}
						/*Fim do código que mostra as 5 últimas inserções na tabela produto*/																			
					?>
				</tbody>	
			</table>

			<h3>Caixas</h3>
			<table>
				<thead>
					<tr>						
						<th>Nome</th>
						<th>Tipo</th>
						<th>Aceita Cartão?</th>
					</tr>
				</thead>
				<tbody>	
					<?php
						/*O código abaixo mostra as 5 últimas inserções na tabela caixa*/
						$sql = "SELECT * FROM Caixa";

						$res = mysql_query($sql) or die("Erro ao pesquisar dados dos caixas: ".mysql_error());							

						$total = mysql_num_rows($res);						

						$cont = 0;
						while($registro = mysql_fetch_assoc($res)){
							$cont = $cont+1;
							$nome = $registro["nome"];
							$tipo = $registro["tipo"];
							$aceitaCartao = $registro["aceitaCartao"];
							

							if ($total-$cont <= 4){
								echo "<tr>
										<td>$nome</td>
										<td>$tipo</td>
										<td>$aceitaCartao</td>										
							          </tr>";								
							}													
						}
						/*Fim do código que mostra as 5 últimas inserções na tabela caixa*/																			
					?>
				</tbody>	
			</table>

			<h3>Açougueiro</h3>
			<table>
				<thead>
					<tr>						
						<th>Nome</th>
						<th>Especialidade</th>						
					</tr>
				</thead>
				<tbody>	
					<?php
						/*O código abaixo mostra as 5 últimas inserções na tabela açougueiro*/
						$sql = "SELECT * FROM Acougueiro";

						$res = mysql_query($sql) or die("Erro ao pesquisar dados dos açougueiros: ".mysql_error());							

						$total = mysql_num_rows($res);						

						$cont = 0;
						while($registro = mysql_fetch_assoc($res)){
							$cont = $cont+1;
							$nome = $registro["nome"];
							$especialidade = $registro["especialidade"];							
							

							if ($total-$cont <= 4){
								echo "<tr>
										<td>$nome</td>
										<td>$especialidade</td>																				
							          </tr>";								
							}													
						}
						/*Fim do código que mostra as 5 últimas inserções na tabela açougueiro*/																			
					?>
				</tbody>	
			</table>

			<h3>Vendas</h3>
			<table>
				<thead>
					<tr>						
						<th>Num. Venda</th>
						<th>Cliente</th>
						<th>Caixa</th>
						<th>Açougueiro</th>												
					</tr>
				</thead>
				<tbody>	
					<?php
						$acougueiroN;
						$caixaN;
						$clienteN;
						/*O código abaixo mostra as vendas cadastradas*/
						$sql = "SELECT * FROM Venda";

						$res = mysql_query($sql) or die("Erro ao pesquisar dados das vendas: ".mysql_error());							

						$total = mysql_num_rows($res);						

						$cont = 0;						
						while($registro = mysql_fetch_assoc($res)){		
							$cont=$cont+1;					
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
								$clienteN = $registro2['nome'];
							}

							$sql = "SELECT * FROM Caixa WHERE idCaixa='$Caixa_idCaixa'";
							$res3 = mysql_query($sql);

							while($registro3 = mysql_fetch_assoc($res3)){
								$caixaN = $registro3['nome'];
							}

							$sql = "SELECT * FROM Acougueiro WHERE idAcougueiro='$Acougueiro_idAcougueiro'";
							$res4 = mysql_query($sql) or die("Erro ao pesquisar dados do acougueiro: ".mysql_error());

							while($registro4 = mysql_fetch_assoc($res4)){
								$acougueiroN = $registro4['nome'];

							}
							if ($total-$cont <= 4){
								echo "<tr>
										<td>$idVenda</td>
										<td>$clienteN</td>
										<td>$caixaN</td>
										<td>$acougueiroN</td>										
								      </tr>";	
							}	      						      
							      							    																												
						}

						/*Fim do código que mostra os cadastros da tabela venda*/																			
					?>
				</tbody>	
			</table>





		


		