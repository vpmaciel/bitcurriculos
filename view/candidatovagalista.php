<?php
require_once '../lib/biblioteca.php';
?>

<!DOCTYPE html>
<html>
<head>
<?php require_once 'cabecalho.php';?>
</head>
<body>

<?php require_once 'menu.php';?>

<div class="main">		
		<div align="center">
		<label class="titulo">Selecionar Candidatos</label><br><br>
			<form action="../controller/dadospessoais.php">
				<table class="tabela">
					<tr>
						<td><label for="nome">Nome</label></td>
						<td><input type="text" name="nome" maxlength="50" value="<?=isset($_POST['nome'])?$_POST['nome']:''?>" ></td>
					</tr>
					<tr>
						<td><label for="data_nascimento">Data de Nascimento</label></td>
						<td><input type="text" name="data_nascimento" maxlength="50" value="Doe"></td>
					</tr>
					<tr>
						<td><label for="lname">Sexo</label></td>
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
						<td><input type="text" name="lname" maxlength="50" value="Doe"></td>
					</tr>					
					<tr>
						<td><label for="lname">Possui Filhos</label></td>
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
						<td><label for="lname">Cidade</label></td>
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
						<td><label for="lname">CNH</label></td>
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
						<td><label for="lname">Último Salário Mensal (R$)</label></td>
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
						<td><label for="lname">Empregado Atualmente</label></td>
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
						<td><label for="lname">Disponível Para Trabalhar No Exterior</label></td>
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
						<td></td>
						<td><input type="submit" value="Salvar"></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</body>
</html>