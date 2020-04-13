<?php
require_once '../lib/biblioteca.php';

$cnh_array = Cnh::ObterValorArray();

$sexo_array = Sexo::ObterValorArray();

$deficiencia_array = Deficiencia::ObterValorArray();

$escolaridade_array = Escolaridade::ObterValorArray();

$contrato_array = Contrato::ObterValorArray();

$ultimo_salarioArray = PretensaoSalarial::ObterValorArray();

$nivel_hierarquico_array = NivelHierarquico::ObterValorArray();

$area_interesse_array = AreaInteresse::ObterValorArray();

$estado_array = Estado::ObterValorArray();

$estado_civil_array = EstadoCivil::ObterValorArray();

$nacionalidade_array = Nacionalidade::ObterValorArray();

$pais_array = Pais::ObterValorArray();

$resposta_array = Resposta::ObterValorArray();
?>
<!DOCTYPE html>
<html>
<head>
<?php
require_once 'cabecalho.php';
?>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-2">
			<?php require_once 'menu.php'; ?>
			</div>
			<div class="col-lg-10">
				<h1>BitCurriculos</h1>
				<div align="center">
					<form action="/action_page.php">
						<table class="tabela" cellspacing="10">
							<tr>
								<td><label for="fname">NOME</label></td>
								<td><input type="text" name="fname" size="80" value="John"></td>
							</tr>
							<tr>
								<td><label for="lname">DATA DE NASCIMENTO</label></td>
								<td><input type="text" name="lname" size="80" value="Doe"></td>
							</tr>
							<tr>
								<td><label for="lname">IDADE</label></td>
								<td><input type="text" name="lname" size="80" value="Doe"></td>
							</tr>
							<tr>
								<td><label for="lname">SEXO</label></td>
								<td><select id="cars">
										<option value="volvo">Volvo</option>
										<option value="saab">Saab</option>
										<option value="mercedes">Mercedes</option>
										<option value="audi">Audi</option>
								</select>
								</td>
							</tr>
							<tr>
								<td><label for="lname">ESCOLARIDADE</label></td>
								<td><select id="cars">
										<option value="volvo">Volvo</option>
										<option value="saab">Saab</option>
										<option value="mercedes">Mercedes</option>
										<option value="audi">Audi</option>
								</select>
								</td>
							</tr>
							<tr>
								<td><label for="lname">ESTADO CIVIL</label></td>
								<td><select id="cars">
										<option value="volvo">Volvo</option>
										<option value="saab">Saab</option>
										<option value="mercedes">Mercedes</option>
										<option value="audi">Audi</option>
								</select>
								</td>
							</tr>
							<tr>
								<td><label for="lname">NACIONALIDADE</label></td>
								<td><select id="cars">
										<option value="volvo">Volvo</option>
										<option value="saab">Saab</option>
										<option value="mercedes">Mercedes</option>
										<option value="audi">Audi</option>
								</select>
								</td>
							</tr>
							<tr>
								<td><label for="lname">TELEFONE RESIDENCIAL (DDD)</label></td>
								<td><input type="text" name="lname" size="80" value="Doe"></td>
							</tr>
							<tr>
								<td><label for="lname">TELEFONE RESIDENCIAL (NÚMERO)</label></td>
								<td><input type="text" name="lname" size="80" value="Doe"></td>
							</tr>
							<tr>
								<td><label for="lname">CELULAR (DDD)</label></td>
								<td><input type="text" name="lname" size="80" value="Doe"></td>
							</tr>
							<tr>
								<td><label for="lname">CELULAR (NÚMERO)</label></td>
								<td><input type="text" name="lname" size="80" value="Doe"></td>
							</tr>
							<tr>
								<td><label for="lname">POSSUI FILHOS</label></td>
								<td><input type="text" name="lname" size="80" value="Doe"></td>
							</tr>
							<tr>
								<td><label for="lname">POSSUI DEFICIÊNCIA</label></td>
								<td><select id="cars">
										<option value="volvo">Volvo</option>
										<option value="saab">Saab</option>
										<option value="mercedes">Mercedes</option>
										<option value="audi">Audi</option>
								</select>
								</td>
							</tr>
							<tr>
								<td><label for="lname">PAÍS</label></td>
								<td><select id="cars">
										<option value="volvo">Volvo</option>
										<option value="saab">Saab</option>
										<option value="mercedes">Mercedes</option>
										<option value="audi">Audi</option>
								</select>
								</td>
							</tr>
							<tr>
								<td><label for="lname">ESTADO</label></td>
								<td><input type="text" name="lname" size="80" value="Doe"></td>
							</tr>
							<tr>
								<td><label for="lname">CIDADE</label></td>
								<td><input type="text" name="lname" size="80" value="Doe"></td>
							</tr>
							<tr>
								<td><label for="lname">BAIRRO</label></td>
								<td><input type="text" name="lname" size="80" value="Doe"></td>
							</tr>
							<tr>
								<td><label for="lname">LOGRADOURO</label></td>
								<td><input type="text" name="lname" size="80" value="Doe"></td>
							</tr>
							<tr>
								<td><label for="lname">COMPLEMENTO</label></td>
								<td><select id="cars">
										<option value="volvo">Volvo</option>
										<option value="saab">Saab</option>
										<option value="mercedes">Mercedes</option>
										<option value="audi">Audi</option>
								</select>
								</td>
							</tr>
							<tr>
								<td><label for="lname">CEP</label></td>
								<td><select id="cars">
										<option value="volvo">Volvo</option>
										<option value="saab">Saab</option>
										<option value="mercedes">Mercedes</option>
										<option value="audi">Audi</option>
								</select>
								</td>
							</tr>
							<tr>
								<td><label for="lname">CNH</label></td>
								<td><select id="cars">
										<option value="volvo">Volvo</option>
										<option value="saab">Saab</option>
										<option value="mercedes">Mercedes</option>
										<option value="audi">Audi</option>
								</select>
								</td>
							</tr>
							<tr>
								<td><label for="lname">ÚLTIMO SALÁRIO MENSAL (R$)</label></td>
								<td><select id="cars">
										<option value="volvo">Volvo</option>
										<option value="saab">Saab</option>
										<option value="mercedes">Mercedes</option>
										<option value="audi">Audi</option>
								</select>
								</td>
							</tr>
							<tr>
								<td><label for="lname">EMPREGADO ATUALMENTE</label></td>
								<td><select id="cars">
										<option value="volvo">Volvo</option>
										<option value="saab">Saab</option>
										<option value="mercedes">Mercedes</option>
										<option value="audi">Audi</option>
								</select>
								</td>
							</tr>
							<tr>
								<td><label for="lname">DISPONÍVEL PARA VIAGENS</label></td>
								<td><select id="cars">
										<option value="volvo">Volvo</option>
										<option value="saab">Saab</option>
										<option value="mercedes">Mercedes</option>
										<option value="audi">Audi</option>
								</select>
								</td>
							</tr>
							<tr>
								<td><label for="lname">DISPONÍVEL PARA TRABALHAR EM OUTRAS CIDADES</label></td>
								<td><select id="cars">
										<option value="volvo">Volvo</option>
										<option value="saab">Saab</option>
										<option value="mercedes">Mercedes</option>
										<option value="audi">Audi</option>
								</select>
								</td>
							</tr>
							<tr>
								<td><label for="lname">DISPONÍVEL PARA TRABALHAR NO EXTERIOR</label></td>
								<td><select id="cars">
										<option value="volvo">Volvo</option>
										<option value="saab">Saab</option>
										<option value="mercedes">Mercedes</option>
										<option value="audi">Audi</option>
								</select>
								</td>
							</tr>
							<tr>
								<td><label for="lname">DISPONÍVEL PARA TRABALHAR HOME OFFICE</label></td>
								<td><select id="cars">
										<option value="volvo">Volvo</option>
										<option value="saab">Saab</option>
										<option value="mercedes">Mercedes</option>
										<option value="audi">Audi</option>
								</select>
								</td>
							</tr>
							<tr>
								<td><label for="lname">POSSUI CARRO</label></td>
								<td><select id="cars">
										<option value="volvo">Volvo</option>
										<option value="saab">Saab</option>
										<option value="mercedes">Mercedes</option>
										<option value="audi">Audi</option>
								</select>
								</td>
							</tr>
							<tr>
								<td><label for="lname">POSSUI MOTO</label></td>
								<td><select id="cars">
										<option value="volvo">Volvo</option>
										<option value="saab">Saab</option>
										<option value="mercedes">Mercedes</option>
										<option value="audi">Audi</option>
								</select>
								</td>
							</tr>
							<tr>
								<td><input type="submit" value="Submit"></td>
								<td></td>
							</tr>
						</table>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>