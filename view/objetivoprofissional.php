<?php
require_once '../lib/biblioteca.php';
?>

<!DOCTYPE html>
<html>
<head>
<?php require_once 'cabecalho.php';?>
</head>
<body>
<?php require_once 'titulo.php';?>
<div style="overflow:auto">
<?php require_once 'menu.php';?>
<div class="main">		
	<div align="left">
		<h1 class="titulo">Objetivo Profissional</h1>		
		<form action="../controller/dadospessoais.php">
			<table class="tabela">
				<tr>
					<td><label for="nome">Nome</label></td>
				</tr>
				<tr>
					<td><input type="text" name="nome" maxlength="50" value="<?=isset($_POST['nome'])?$_POST['nome']:''?>" ></td>
				</tr>
				<tr>
					<td><label for="data_nascimento">Data de Nascimento</label></td>
				</tr>
				<tr>
					<td><input type="text" name="data_nascimento" maxlength="50" value="Doe"></td>
				<tr>
				</tr>
					<td><label for="lname">Sexo</label></td>
					<tr>
				<tr>
					<td>
						<select id="cars">
						<?php
						foreach ($sexo_array as $indice => $sexo) {
							$indice = Html::configurar($indice);
							echo "<option value=$indice>$sexo</option>";
						}
						?>
						</select>
					</td>
				</td>
				</tr>
				<tr>
					<td><label for="lname">Escolaridade</label></td>
				</tr>
				<tr>
					<td>
						<select id="cars">
							<option value="volvo">Volvo</option>
							<option value="saab">Saab</option>
							<option value="mercedes">Mercedes</option>
							<option value="audi">Audi</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><label for="lname">Estado Civil</label></td>
				</tr>
				<tr>	
					<td>
						<select id="cars">
							<option value="volvo">Volvo</option>
							<option value="saab">Saab</option>
							<option value="mercedes">Mercedes</option>
							<option value="audi">Audi</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><label for="lname">Nacionalidade</label></td>
				</tr>
				<tr>	
					<td>
						<select id="cars">
							<option value="volvo">Volvo</option>
							<option value="saab">Saab</option>
							<option value="mercedes">Mercedes</option>
							<option value="audi">Audi</option>
						</select>
					</td>
				</tr>					
				<tr>
					<td><label for="lname">Celular</label></td>
				</tr>
				<tr>						
					<td><input type="text" name="lname" maxlength="50" value="Doe"></td>
				</tr>					
				<tr>
					<td><label for="lname">Possui Filhos</label></td>
				</tr>
				<tr>						
					<td>
						<select id="cars">
							<option value="volvo">Volvo</option>
							<option value="saab">Saab</option>
							<option value="mercedes">Mercedes</option>
							<option value="audi">Audi</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><label for="lname">Possui Deficiência</label></td>
				</tr>
				<tr>						
					<td>
						<select id="cars">
							<option value="volvo">Volvo</option>
							<option value="saab">Saab</option>
							<option value="mercedes">Mercedes</option>
							<option value="audi">Audi</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><label for="lname">País</label></td>
				</tr>
				<tr>						
					<td>
						<select id="cars">
							<option value="volvo">Volvo</option>
							<option value="saab">Saab</option>
							<option value="mercedes">Mercedes</option>
							<option value="audi">Audi</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><label for="lname">Estado</label></td>
				</tr>
				<tr>						
					<td>
						<select id="cars">
							<option value="volvo">Volvo</option>
							<option value="saab">Saab</option>
							<option value="mercedes">Mercedes</option>
							<option value="audi">Audi</option>
						</select>
					</td>
				<tr>
				</tr>
					<td><label for="lname">Cidade</label></td>
				<tr>
				</tr>						
					<td>
						<select id="cars">
							<option value="volvo">Volvo</option>
							<option value="saab">Saab</option>
							<option value="mercedes">Mercedes</option>
							<option value="audi">Audi</option>
						</select>
					</td>
				<tr>
				</tr>
					<td><label for="lname">CNH</label></td>
				<tr>
				</tr>						
					<td>
						<select id="cars">
							<option value="volvo">Volvo</option>
							<option value="saab">Saab</option>
							<option value="mercedes">Mercedes</option>
							<option value="audi">Audi</option>
						</select>
					</td>
				<tr>
				</tr>
					<td><label for="lname">Último Salário Mensal (R$)</label></td>
				<tr>
				</tr>						
					<td>
						<select id="cars">
							<option value="volvo">Volvo</option>
							<option value="saab">Saab</option>
							<option value="mercedes">Mercedes</option>
							<option value="audi">Audi</option>
						</select>
					</td>
				<tr>
				</tr>
					<td><label for="lname">Empregado Atualmente</label></td>
				<tr>
				</tr>						
					<td>
						<select id="cars">
							<option value="volvo">Volvo</option>
							<option value="saab">Saab</option>
							<option value="mercedes">Mercedes</option>
							<option value="audi">Audi</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><label for="lname">Disponível Para Viagens</label></td>
				</tr>
				<tr>						
					<td>
						<select id="cars">
							<option value="volvo">Volvo</option>
							<option value="saab">Saab</option>
							<option value="mercedes">Mercedes</option>
							<option value="audi">Audi</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><label for="lname">Disponível Para Trabalhar Em Outras Cidades</label></td>
				<tr>
				</tr>						
					<td>
						<select id="cars">
							<option value="volvo">Volvo</option>
							<option value="saab">Saab</option>
							<option value="mercedes">Mercedes</option>
							<option value="audi">Audi</option>
						</select>
					</td>
				<tr>
				</tr>
					<td><label for="lname">Disponível Para Trabalhar No Exterior</label></td>
				<tr>
				</tr>						
					<td>
						<select id="cars">
							<option value="volvo">Volvo</option>
							<option value="saab">Saab</option>
							<option value="mercedes">Mercedes</option>
							<option value="audi">Audi</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><label for="lname">Disponível Para Trabalhar Home Office</label></td>
				</tr>
				<tr>						
					<td>
						<select id="cars">
							<option value="volvo">Volvo</option>
							<option value="saab">Saab</option>
							<option value="mercedes">Mercedes</option>
							<option value="audi">Audi</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><label for="lname">Possui Carro</label></td>
				</tr>
				<tr>						
					<td>
						<select id="cars">
							<option value="volvo">Volvo</option>
							<option value="saab">Saab</option>
							<option value="mercedes">Mercedes</option>
							<option value="audi">Audi</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><label for="lname">Possui Moto</label></td>
				</tr>
				<tr>
					<td>
						<select id="cars">
							<option value="volvo">Volvo</option>
							<option value="saab">Saab</option>
							<option value="mercedes">Mercedes</option>
							<option value="audi">Audi</option>
						</select>
					</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td><input type="submit" value="Salvar"></td>						
				</tr>
			</table>
		</form>
	</div>
</div> 
<?php require_once 'faleconosco.php';?>
</div> 
<?php require_once 'rodape.php';?>
</body>
</html>