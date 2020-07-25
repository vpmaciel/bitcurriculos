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
	<h1>Login</h1>
	<form action="../controller/dadospessoais.php">
	<table class="tabela" align="center">
		<tr>
			<td>
				<label>E-MAIL</label>
			</td>
		</tr>
		<tr>
			<td>
				<input type="text" name="nome" maxlength="50" size="70" value="<?=isset($_POST['nome'])?$_POST['nome']:''?>" >
			</td>
		</tr>
		<tr>
			<td>
				<label>SENHA</label>
			</td>
		</tr>
		<tr>
			<td>
				<input type="text" name="data_nascimento" maxlength="50" size="70">
			</td>
		</tr>
		<tr>
			<td>
				&nbsp;
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" value="Entrar">
			</td>
		</tr>
	</table>
	</form>
</div> 
</body>
</html>