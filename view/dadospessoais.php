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
		<h1>BitCurriculos</h1>
		<div align="center">
			<form action="../controller/dadospessoais.php">
				<table class="tabela">
					<tr>
						<td><label for="nome">NOME</label></td>
						<td><input type="text" name="nome" size="80" maxlength="50" value="<?=isset($_POST['nome'])?$_POST['nome']:''?>" ></td>
					</tr>
					<tr>
						<td><label for="data_nascimento">DATA DE NASCIMENTO</label></td>
						<td><input type="text" name="data_nascimento" size="80" maxlength="50" value="Doe"></td>
					</tr>
					<tr>
						<td><label for="lname">SEXO</label></td>
						<td><select id="cars">
						<?php
                        foreach ($sexo_array as $indice => $sexo) {
                            $indice = Html::configurar($indice);
                            echo "<option value=$indice>$sexo</option>";
                        }
                        ?>
						</select></td>
					</tr>
					<tr>
						<td><label for="lname">ESCOLARIDADE</label></td>
						<td><select id="cars">
								<option value="volvo">Volvo</option>
								<option value="saab">Saab</option>
								<option value="mercedes">Mercedes</option>
								<option value="audi">Audi</option>
						</select></td>
					</tr>
					<tr>
						<td><label for="lname">ESTADO CIVIL</label></td>
						<td><select id="cars">
								<option value="volvo">Volvo</option>
								<option value="saab">Saab</option>
								<option value="mercedes">Mercedes</option>
								<option value="audi">Audi</option>
						</select></td>
					</tr>
					<tr>
						<td><label for="lname">NACIONALIDADE</label></td>
						<td><select id="cars">
								<option value="volvo">Volvo</option>
								<option value="saab">Saab</option>
								<option value="mercedes">Mercedes</option>
								<option value="audi">Audi</option>
						</select></td>
					</tr>
					<tr>
						<td><label for="lname">CELULAR (DDD)</label></td>
						<td><input type="text" name="lname" size="80" maxlength="50" value="Doe"></td>
					</tr>
					<tr>
						<td><label for="lname">CELULAR (NÚMERO)</label></td>
						<td><input type="text" name="lname" size="80" maxlength="50" value="Doe"></td>
					</tr>
					<tr>
						<td><label for="lname">POSSUI FILHOS</label></td>
						<td><input type="text" name="lname" size="80" maxlength="50" value="Doe"></td>
					</tr>
					<tr>
						<td><label for="lname">POSSUI DEFICIÊNCIA</label></td>
						<td><select id="cars">
								<option value="volvo">Volvo</option>
								<option value="saab">Saab</option>
								<option value="mercedes">Mercedes</option>
								<option value="audi">Audi</option>
						</select></td>
					</tr>
					<tr>
						<td><label for="lname">PAÍS</label></td>
						<td><select id="cars">
								<option value="volvo">Volvo</option>
								<option value="saab">Saab</option>
								<option value="mercedes">Mercedes</option>
								<option value="audi">Audi</option>
						</select></td>
					</tr>
					<tr>
						<td><label for="lname">ESTADO</label></td>
						<td><input type="text" name="lname" size="80" maxlength="50" value="Doe"></td>
					</tr>
					<tr>
						<td><label for="lname">CIDADE</label></td>
						<td><input type="text" name="lname" size="80" maxlength="50" value="Doe"></td>
					</tr>
					<tr>
						<td><label for="lname">BAIRRO</label></td>
						<td><input type="text" name="lname" size="80" maxlength="50" value="Doe"></td>
					</tr>
					<tr>
						<td><label for="lname">LOGRADOURO</label></td>
						<td><input type="text" name="lname" size="80" maxlength="50" value="Doe"></td>
					</tr>
					<tr>
						<td><label for="lname">COMPLEMENTO</label></td>
						<td><select id="cars">
								<option value="volvo">Volvo</option>
								<option value="saab">Saab</option>
								<option value="mercedes">Mercedes</option>
								<option value="audi">Audi</option>
						</select></td>
					</tr>
					<tr>
						<td><label for="lname">CEP</label></td>
						<td><select id="cars">
								<option value="volvo">Volvo</option>
								<option value="saab">Saab</option>
								<option value="mercedes">Mercedes</option>
								<option value="audi">Audi</option>
						</select></td>
					</tr>
					<tr>
						<td><label for="lname">CNH</label></td>
						<td><select id="cars">
								<option value="volvo">Volvo</option>
								<option value="saab">Saab</option>
								<option value="mercedes">Mercedes</option>
								<option value="audi">Audi</option>
						</select></td>
					</tr>
					<tr>
						<td><label for="lname">ÚLTIMO SALÁRIO MENSAL (R$)</label></td>
						<td><select id="cars">
								<option value="volvo">Volvo</option>
								<option value="saab">Saab</option>
								<option value="mercedes">Mercedes</option>
								<option value="audi">Audi</option>
						</select></td>
					</tr>
					<tr>
						<td><label for="lname">EMPREGADO ATUALMENTE</label></td>
						<td><select id="cars">
								<option value="volvo">Volvo</option>
								<option value="saab">Saab</option>
								<option value="mercedes">Mercedes</option>
								<option value="audi">Audi</option>
						</select></td>
					</tr>
					<tr>
						<td><label for="lname">DISPONÍVEL PARA VIAGENS</label></td>
						<td><select id="cars">
								<option value="volvo">Volvo</option>
								<option value="saab">Saab</option>
								<option value="mercedes">Mercedes</option>
								<option value="audi">Audi</option>
						</select></td>
					</tr>
					<tr>
						<td><label for="lname">DISPONÍVEL PARA TRABALHAR EM OUTRAS CIDADES</label></td>
						<td><select id="cars">
								<option value="volvo">Volvo</option>
								<option value="saab">Saab</option>
								<option value="mercedes">Mercedes</option>
								<option value="audi">Audi</option>
						</select></td>
					</tr>
					<tr>
						<td><label for="lname">DISPONÍVEL PARA TRABALHAR NO EXTERIOR</label></td>
						<td><select id="cars">
								<option value="volvo">Volvo</option>
								<option value="saab">Saab</option>
								<option value="mercedes">Mercedes</option>
								<option value="audi">Audi</option>
						</select></td>
					</tr>
					<tr>
						<td><label for="lname">DISPONÍVEL PARA TRABALHAR HOME OFFICE</label></td>
						<td><select id="cars">
								<option value="volvo">Volvo</option>
								<option value="saab">Saab</option>
								<option value="mercedes">Mercedes</option>
								<option value="audi">Audi</option>
						</select></td>
					</tr>
					<tr>
						<td><label for="lname">POSSUI CARRO</label></td>
						<td><select id="cars">
								<option value="volvo">Volvo</option>
								<option value="saab">Saab</option>
								<option value="mercedes">Mercedes</option>
								<option value="audi">Audi</option>
						</select></td>
					</tr>
					<tr>
						<td><label for="lname">POSSUI MOTO</label></td>
						<td><select id="cars">
								<option value="volvo">Volvo</option>
								<option value="saab">Saab</option>
								<option value="mercedes">Mercedes</option>
								<option value="audi">Audi</option>
						</select></td>
					</tr>
					<tr>
						<td><input type="submit" value="Submit"></td>
						<td></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</body>
</html>