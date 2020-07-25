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
	<h1>Experiência Profissional</h1>		
	<form action="../controller/dadospessoais.php">
		<table class="tabela">
			<tr><td><label for="nome">Empresa</label></td></tr>
			<tr><td><input type="text" name="nome" maxlength="50" value="<?=isset($_POST['nome'])?$_POST['nome']:''?>" ></td></tr>
			<tr><td><label for="data_nascimento">Cargo</label></td></tr>
			<tr><td><input type="text" name="data_nascimento" maxlength="50" value="Doe"></td></tr>
			<tr><td><label for="data_nascimento">Data de Admissão</label></td></tr>
			<tr><td><input type="text" name="data_nascimento" maxlength="50" value="Doe"></td></tr>
			<tr><td><label for="data_nascimento">Data de Saída</label></td></tr>
			<tr><td><input type="text" name="data_nascimento" maxlength="50" value="Doe"></td></tr>								
			<tr><td><label for="data_nascimento">Funções</label></td></tr>
			<tr><td><input type="text" name="data_nascimento" maxlength="50" value="Doe"></td></tr>
			<tr><td>&nbsp;</td></tr>
			<tr><td><input type="submit" value="Salvar"></td></tr>
		</table>
	</form>
</div> 
</body>
</html>