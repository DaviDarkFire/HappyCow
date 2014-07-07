		


		<!--Direciona o usuário para a tela de cadastro de Produto o de pesquisa-->
		<ul>
			<li><a href="<?php echo '?p=cadastrar-produto'; ?>">Cadastrar</a></li>			
			<li><a href="<?php echo '?p=pesquisar-produto'; ?>">Pesquisar</a></li>			
		</ul>
							
			<table>
				<thead>
					<tr>						
						<th>Categoria</th>
						<th>Nome</th>
						<th>Marca</th>
						<th>Preço-R$</th>
						<th>Excluir</th>
						<th>Alterar</th>
					</tr>
				</thead>
				<tbody>	
					<?php
						/*O código abaixo mostra todos os produtos cadastrados*/
						$sql = "SELECT * FROM Produto";

						$res = mysql_query($sql) or die("Erro ao pesquisar dados dos produtos: ".mysql_error());													
						
						while($registro = mysql_fetch_assoc($res)){							
							$categoria = $registro["categoria"];
							$nome = $registro["nome"];
							$marca = $registro["marca"];
							$preco = $registro["preco"];							
							$idProduto = $registro["idProduto"];

							echo "<tr>									
									<td>$categoria</td>
									<td>$nome</td>
									<td>$marca</td>
									<td>$preco</td>
									<td><a href='excluir-produto.php?id=$idProduto'><img src='icons/02.png' alt='Excluir'></a></td>
									<td><a href='alterar-produto.php?id=$idProduto'><img src='icons/0003.png' alt='Alterar'></a></td>
							     </tr>";
						}						
					?>
				</tbody>	
			</table>


		
		