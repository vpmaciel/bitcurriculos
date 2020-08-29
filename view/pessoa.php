<?php
session_start();
require_once '../lib/biblioteca.php';
require_once '../model/pessoa.php';
echo $DOCTYPE;
echo $HTML;
echo $HEAD;
require_once 'cabecalho.php';
echo $HEAD_;
echo $BODY;
require_once 'menu.php';
echo $DIV_MAIN;
echo $H1 . 'DADOS PESSOAIS' . $H1_;

$FORM_PESSOA = '<form action="../controller/pessoa.php" method="post">';

echo $FORM_PESSOA;

echo $TABLE;

echo $TR . $TD . $LABEL . 'NOME' . $LABEL_ . $TD_ . $TR_; 
$pessoa['nome'] = isset($_POST['nome'])?$_POST['nome']:'';
$NOME = '<input type="text" name="nome" maxlength="50" size="70" value="' . $pessoa['nome'] .'">';
echo $TR . $TD . $NOME . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'DATA DE MASCIMENTO' . $LABEL_ . $TD_ . $TR_; 
$pessoa['data_nascimento'] = isset($_POST['data_nascimento'])?$_POST['data_nascimento']:'';
$DATA_NASCIMENTO = '<input type="text" name="data_nascimento" maxlength="10" size="70" value="' . $pessoa['data_nascimento'] .'">';
echo $TR . $TD . $DATA_NASCIMENTO . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'CELULAR' . $LABEL_ . $TD_ . $TR_; 
$pessoa['celular_numero'] = isset($_POST['celular_numero'])?$_POST['celular_numero']:'';
$CELULAR = '<input type="text" name="celular_numero" maxlength="16" size="70" value="' . $pessoa['celular_numero'] .'">';
echo $TR . $TD . $CELULAR . $TD_ . $TR_; 

echo $TR . $TD . $LABEL . 'SEXO' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select id="cars">';
echo $SELECT;
foreach ($sexo_lista as $indice => $sexo) {	
	echo ($sexo == $pessoa['sexo'])	? "<option value=$indice selected>$sexo</option>" : "<option value=$indice>$sexo</option>";
}
echo $SELECT_;

?>
			
			
			<?php
				
			?>
							
			<?=$let?>
			<?=$lbt?><label>ESCOLARIDADE</label><?=$let?>
			<?=$lbt?>
			<select id="cars">
			<?php
				foreach ($cidade_lista as $indice => $sexo) {					
					echo ($sexo == $pessoa['sexo'])	? "<option value=$indice selected>$sexo</option>" : "<option value=$indice>$sexo</option>";
				}
			?>					
			</select>
			<?=$let?>
			<?=$lbt?><label>ESTADO CIVIL</label><?=$let?>
			<?=$lbt?>		
			<select id="cars">			
			<?php
				foreach ($sexo_lista as $indice => $sexo) {					
					echo ($sexo == $pessoa['sexo'])	? "<option value=$indice selected>$sexo</option>" : "<option value=$indice>$sexo</option>";
				}
			?>	
			</select>				
			<?=$let?>
			<?=$lbt?><label>NACIONALIDADE</label><?=$let?>
			<?=$lbt?>		
			<select id="cars">
			<?php
				foreach ($sexo_lista as $indice => $sexo) {					
					echo ($sexo == $pessoa['sexo'])	? "<option value=$indice selected>$sexo</option>" : "<option value=$indice>$sexo</option>";
				}
			?>		
			</select>		
			<?=$let?>
			<?=$lbt?><label>POSSUI FILHOS</label><?=$let?>
			<?=$lbt?>		
			<select id="cars">		
			<?php
				foreach ($sexo_lista as $indice => $sexo) {					
					echo ($sexo == $pessoa['sexo'])	? "<option value=$indice selected>$sexo</option>" : "<option value=$indice>$sexo</option>";
				}
			?>		
			</select>	
			<?=$let?>
			<?=$lbt?><label>POSSUI DEFICIÊNCIA</label><?=$let?>
			<?=$lbt?>		
			<select id="cars">				
			<?php
				foreach ($sexo_lista as $indice => $sexo) {					
					echo ($sexo == $pessoa['sexo'])	? "<option value=$indice selected>$sexo</option>" : "<option value=$indice>$sexo</option>";
				}
			?>		
			</select>		
			<?=$let?>
			<?=$lbt?><label>PAÍS</label><?=$let?>
			<?=$lbt?>		
			<select id="cars">				
			<?php
				foreach ($sexo_lista as $indice => $sexo) {					
					echo ($sexo == $pessoa['sexo'])	? "<option value=$indice selected>$sexo</option>" : "<option value=$indice>$sexo</option>";
				}
			?>		
			</select>		
			<?=$let?>
			<?=$lbt?><label>ESTADO</label><?=$let?>
			<?=$lbt?>		
			<select id="cars">				
			<?php
				foreach ($sexo_lista as $indice => $sexo) {					
					echo ($sexo == $pessoa['sexo'])	? "<option value=$indice selected>$sexo</option>" : "<option value=$indice>$sexo</option>";
				}
			?>		
			</select>		
			<?=$let?>
			<?=$lbt?><label>CIDADE</label><?=$let?>
			<?=$lbt?>		
			<select id="cars">				
			<?php
				foreach ($sexo_lista as $indice => $sexo) {					
					echo ($sexo == $pessoa['sexo'])	? "<option value=$indice selected>$sexo</option>" : "<option value=$indice>$sexo</option>";
				}
			?>
			</select>
			<?=$let?>
			<?=$lbt?><label>CNH</label><?=$let?>
			<?=$lbt?>		
			<select id="cars">				
			<?php
				foreach ($sexo_lista as $indice => $sexo) {					
					echo ($sexo == $pessoa['sexo'])	? "<option value=$indice selected>$sexo</option>" : "<option value=$indice>$sexo</option>";
				}
			?>		
			</select>		
			<?=$let?>
			<?=$lbt?><label>ÚLTIMO SALÁRIO MENSAL (R$)</label><?=$let?>
			<?=$lbt?>		
			<select id="cars">				
			<?php
				foreach ($sexo_lista as $indice => $sexo) {					
					echo ($sexo == $pessoa['sexo'])	? "<option value=$indice selected>$sexo</option>" : "<option value=$indice>$sexo</option>";
				}
			?>
			</select>
			<?=$let?>
			<?=$lbt?><label>EMPREGADO ATUALMENTE</label><?=$let?>
			<?=$lbt?>						
			<select id="cars">
			<?php
				foreach ($sexo_lista as $indice => $sexo) {					
					echo ($sexo == $pessoa['sexo'])	? "<option value=$indice selected>$sexo</option>" : "<option value=$indice>$sexo</option>";
				}
			?>
			</select>
			<?=$let?>
			<?=$lbt?><label>PROCURANDO NOVO EMPREGO ATUALMENTE</label><?=$let?>
			<?=$lbt?>						
			<select id="cars">
			<?php
				foreach ($sexo_lista as $indice => $sexo) {					
					echo ($sexo == $pessoa['sexo'])	? "<option value=$indice selected>$sexo</option>" : "<option value=$indice>$sexo</option>";
				}
			?>
			</select>
			<?=$let?>
			<?=$lbt?><label>DISPONÍVEL PARA VIAGEM</label><?=$let?>
			<?=$lbt?>		
			<select id="cars">				
			<?php
				foreach ($sexo_lista as $indice => $sexo) {					
					echo ($sexo == $pessoa['sexo'])	? "<option value=$indice selected>$sexo</option>" : "<option value=$indice>$sexo</option>";
				}
			?>	
			</select>
			<?=$let?>
			<?=$lbt?><label>PODE TRABALHAR EM OUTRAS CIDADES</label><?=$let?>
			<?=$lbt?>		
			<select id="cars">				
			<?php
				foreach ($sexo_lista as $indice => $sexo) {					
					echo ($sexo == $pessoa['sexo'])	? "<option value=$indice selected>$sexo</option>" : "<option value=$indice>$sexo</option>";
				}
			?>
			</select>
			<?=$let?>
			<?=$lbt?><label>PODE TRABALHAR EM OUTROS PAÍSES</label><?=$let?>
			<?=$lbt?>		
			<select id="cars">				
			<?php
				foreach ($sexo_lista as $indice => $sexo) {					
					echo ($sexo == $pessoa['sexo'])	? "<option value=$indice selected>$sexo</option>" : "<option value=$indice>$sexo</option>";
				}
			?>
			</select>
			<?=$let?>
			<?=$lbt?><label>PODE TRABALHAR HOME OFFICE</label><?=$let?>
			<?=$lbt?>		
			<select id="cars">	
			<?php
			foreach ($sexo_lista as $indice => $sexo) {				
				echo ($sexo == $pessoa['sexo'])	? "<option value=$indice selected>$sexo</option>" : "<option value=$indice>$sexo</option>";
			}
			?>
			</select>
			<?=$let?>
			<?=$lbt?><label>POSSUI CARRO</label><?=$let?>
			<?=$lbt?>		
			<select id="cars">				
			<?php
			foreach ($sexo_lista as $indice => $sexo) {				
				echo ($sexo == $pessoa['sexo'])	? "<option value=$indice selected>$sexo</option>" : "<option value=$indice>$sexo</option>";
			}
			?>		
			</select>		
			<?=$let?>
			<?=$lbt?><label>POSSUI MOTO</label><?=$let?>
			<?=$lbt?>
			<select id="cars">
			<?php
			foreach ($sexo_lista as $indice => $sexo) {				
				echo ($sexo == $pessoa['sexo'])	? "<option value=$indice selected>$sexo</option>" : "<option value=$indice>$sexo</option>";
			}
			?>
			</select>
			<?=$let?>
			<?=$lbt?>&nbsp;<?=$let?>
			<?=$lbt?><input type="submit" value="Salvar" onclick='return pergunta();'><?=$let?>
		</table>
	</form>
	</div>
</div> 
</body>
</html>