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
		<h1 class="titulo">Idioma</h1>		
		<form action="../controller/dadospessoais.php">
			<table class="tabela">
			<tr>
				<td><label for="lname">Idioma</label></td>
				</tr>
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
					<td><label for="data_nascimento">Nível de Conhecimento</label></td>
				</tr>
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