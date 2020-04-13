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
						<table>
						<tr>
						<td><label for="fname">First name:</label></td>
						<td><input type="text" id="fname" name="fname" value="John"><br></td>
						</tr>
						<tr>
						<td><label for="lname">Last name:</label> </td>
						<td><input type="text" id="lname" name="lname" value="Doe"><br></td>
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