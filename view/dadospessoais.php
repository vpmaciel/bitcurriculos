<?php
require_once '../lib/biblioteca.php';

$cnh_array = Cnh::$valor_array;

$sexo_array = Sexo::$valor_array;

$deficiencia_array = Deficiencia::$valor_array;

$escolaridade_array = Escolaridade::$valor_array;

$contrato_array = Contrato::$valor_array;

$ultimo_salario_array = PretensaoSalarial::$valor_array;

$nivel_hierarquico_array = NivelHierarquico::$valor_array;

$area_interesse_array = AreaInteresse::$valor_array;

$estado_array = Estado::$valor_array;

$estado_civil_array = EstadoCivil::$valor_array;

$nacionalidade_array = Nacionalidade::$valor_array;

$pais_array = Pais::$valor_array;

$resposta_array = Resposta::$valor_array;
?>

<!DOCTYPE html>
<html>
<head>
<?php require_once 'cabecalho.php';?>
</head>
<body>

<?php require_once 'menu.php';?>

<div class="main">
		<h1>Dados Pessoais</h1>
		<div align="center">
			<form action="../controller/dadospessoais.php">
				<table class="tabela">
					<tr>
						<td><label for="nome">Nome</label></td>
						<td><input type="text" name="nome" size="80" maxlength="50" value="<?=isset($_POST['nome'])?$_POST['nome']:''?>" ></td>
					</tr>
					<tr>
						<td><label for="data_nascimento">Data de Nascimento</label></td>
						<td><input type="text" name="data_nascimento" size="80" maxlength="50" value="Doe"></td>
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
						<td><input type="text" name="lname" size="80" maxlength="50" value="Doe"></td>
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
						<td><input type="text" name="lname" size="80" maxlength="50" value="Doe"></td>
					</tr>
					<tr>
						<td><label for="lname">Cidade</label></td>
						<td><input type="text" name="lname" size="80" maxlength="50" value="Doe"></td>
					</tr>
					<tr>
						<td><label for="lname">Bairro</label></td>
						<td><input type="text" name="lname" size="80" maxlength="50" value="Doe"></td>
					</tr>
					<tr>
						<td><label for="lname">Logradouro</label></td>
						<td><input type="text" name="lname" size="80" maxlength="50" value="Doe"></td>
					</tr>
					<tr>
						<td><label for="lname">Complemento</label></td>
						<td><input type="text" name="lname" size="80" maxlength="50" value="Doe"></td>
					</tr>					<tr>
						<td><label for="lname">CEP</label></td>
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
						<td><input type="submit" value="Submit"></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</body>
</html>