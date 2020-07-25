<?php
require_once '../lib/biblioteca.php';
?>

<!DOCTYPE html>
<html>
<head>
<?php require_once 'cabecalho.php';?>
</head>
<body>
<div style="overflow:auto">
<?php require_once 'menu.php';?>
<div class="main">		
	<div align="left">
		<h1 class="titulo">Curso</h1>		
		<form action="../controller/dadospessoais.php">
			<table class="tabela" align="center">
			<?=$lbt?><label for="nome">Curso</label><?=$let?>
			<?=$lbt?><input type="text" name="nome" maxlength="50" value="<?=isset($_POST['nome'])?$_POST['nome']:''?>" ><?=$let?>
			<?=$lbt?><label for="data_nascimento">Instituição</label><?=$let?>
			<?=$lbt?><input type="text" name="data_nascimento" maxlength="50" value="Doe"><?=$let?>
			<?=$lbt?><label for="data_nascimento">Ano de Início</label><?=$let?>
			<?=$lbt?><input type="text" name="data_nascimento" maxlength="50" value="Doe"><?=$let?>
			<?=$lbt?><label for="data_nascimento">Ano de Conclusão</label><?=$let?>
			<?=$lbt?><input type="text" name="data_nascimento" maxlength="50" value="Doe"><?=$let?>
			<?=$lbt?><label for="lname">Situação</label><?=$let?>
			<?=$lbt?>
			<select id="cars">
			<?php
				foreach ($sexo_array as $indice => $sexo) {
					$indice = Html::configurar($indice);
					echo "<option value=$indice>$sexo</option>";
				}
			?>
			</select>
			<?=$let?>
			<?=$lbt?><label for="data_nascimento">Modalidade</label><?=$let?>
			<?=$lbt?>
			<select id="cars">
				<?php
					foreach ($sexo_array as $indice => $sexo) {
						$indice = Html::configurar($indice);
						echo "<option value=$indice>$sexo</option>";
					}
				?>
			</select>
			<?=$let?>
			<?=$lbt?><label for="data_nascimento">Nível<?=$let?>
			<?=$lbt?>
			<select id="cars">
			<?php
				foreach ($sexo_array as $indice => $sexo) {
					$indice = Html::configurar($indice);
					echo "<option value=$indice>$sexo</option>";
				}
			?>
			</select>
			<?=$let?>
			<?=$lbt?><td>&nbsp;</td><?=$let?>
			<?=$lbt?><input type="submit" value="Salvar"><?=$let?>
			</table>
		</form>
	</div>
</div> 
</body>
</html>