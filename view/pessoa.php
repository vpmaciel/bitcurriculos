<?php
session_start();
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
	<h1>DADOS PESSOAIS</h1>		
	<form action="../controller/dadospessoais.php">
		<table class="tabela" align="center">
			<?=$lbt?><label for="nome">NOME</label><?=$let?>
			<?=$lbt?><input type="text" name="nome" maxlength="50" size="70" value="<?=isset($_POST['nome'])?$_POST['nome']:''?>" ><?=$let?>
			<?=$lbt?><label for="data_nascimento">DATA DE MASCIMENTO</label><?=$let?>
			<?=$lbt?><input type="text" name="data_nascimento" maxlength="50" size="70" value="Doe"><?=$let?>
			<?=$lbt?><label for="lname">CELULAR</label><?=$let?>
			<?=$lbt?><input type="text" name="lname" maxlength="50" size="70" value="Doe"><?=$let?>					
			<?=$lbt?><label for="lname">SEXO</label><?=$let?>
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
			<?=$lbt?><label for="lname">ESCOLARIDADE</label><?=$let?>
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
			<?=$lbt?><label for="lname">ESTADO CIVIL</label><?=$let?>
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
			<?=$lbt?><label for="lname">NACIONALIDADE</label><?=$let?>
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
			<?=$lbt?><label for="lname">POSSUI FILHOS</label><?=$let?>
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
			<?=$lbt?><label for="lname">POSSUI DEFICIÊNCIA</label><?=$let?>
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
			<?=$lbt?><label for="lname">PAÍS</label><?=$let?>
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
			<?=$lbt?><label for="lname">ESTADO</label><?=$let?>
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
			<?=$lbt?><label for="lname">CIDADE</label><?=$let?>
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
			<?=$lbt?><label for="lname">CNH</label><?=$let?>
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
			<?=$lbt?><label for="lname">ÚLTIMO SALÁRIO MENSAL (R$)</label><?=$let?>
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
			<?=$lbt?><label for="lname">EMPREGADO ATUALMENTE</label><?=$let?>
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
			<?=$lbt?><label for="lname">PROCURANDO NOVO EMPREGO ATUALMENTE</label><?=$let?>
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
			<?=$lbt?><label for="lname">DISPONÍVEL PARA VIAGEM</label><?=$let?>
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
			<?=$lbt?><label for="lname">PODE TRABALHAR EM OUTRAS CIDADES</label><?=$let?>
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
			<?=$lbt?><label for="lname">PODE TRABALHAR EM OUTROS PAÍSES</label><?=$let?>
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
			<?=$lbt?><label for="lname">PODE TRABALHAR HOME OFFICE</label><?=$let?>
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
			<?=$lbt?><label for="lname">POSSUI CARRO</label><?=$let?>
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
			<?=$lbt?><label for="lname">POSSUI MOTO</label><?=$let?>
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
			<?=$lbt?>&nbsp;<?=$let?>
			<?=$lbt?><input type="submit" value="Salvar"><?=$let?>
		</table>
	</form>
	</div>
</div> 
<?php
require_once '../model/pessoa.php';

?>

</body>
</html>