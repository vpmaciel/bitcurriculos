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
		<h1 class="titulo">Certificado</h1>		
		<form action="../controller/dadospessoais.php">
			<table class="tabela">
				<tr>
					<td><label for="nome">Curso</label></td>
				</tr>
				<tr>
					<td><input type="text" name="nome" maxlength="50" value="<?=isset($_POST['nome'])?$_POST['nome']:''?>" ></td>
				</tr>
				<tr>
					<td><label for="data_nascimento">Instituição</label></td>
				</tr>
				<tr>
					<td><input type="text" name="data_nascimento" maxlength="50" value="Doe"></td>
				<tr>
				<tr>
					<td><label for="data_nascimento">Carga Horária (Horas)</label></td>
				</tr>
				<tr>
					<td><input type="text" name="data_nascimento" maxlength="50" value="Doe"></td>
				<tr>
				<tr>
					<td><label for="data_nascimento">Ano de Conclusão</label></td>
				</tr>
				<tr>
					<td><input type="text" name="data_nascimento" maxlength="50" value="Doe"></td>
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