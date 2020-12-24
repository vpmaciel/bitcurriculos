<?php
session_start();

if(!isset($_SESSION['usu_int_id'])) {
	header('location:..\view\erro.php?e=UNL');
}
require_once '../lib/biblioteca.php';

echo $DOCTYPE;
echo $HTML;
echo $HEAD;
require_once 'cabecalho.php';
require_once 'pessoa.js';
echo $HEAD_;
echo $BODY;

require_once 'menu.php';

echo $DIV_MAIN;
echo $H1 . 'DADOS PESSOAIS' . $H1_;

$FORM = '<form action="../controller/pessoa.php" method="post">';

echo $FORM;

echo $TABLE;

echo $TR . $TD . $LABEL . 'Nome' . $LABEL_ .$TD_ . $TR_; 
$pessoa['pes_char_nome'] = isset($_POST['pes_char_nome'])?$_POST['pes_char_nome']:'';
$INPUT = '<input type="text" name="pes_char_nome" required size="70" minlength="10" maxlength="50" value="' . $pessoa['pes_char_nome'] .'">';
echo $TR. $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'URL de repositório de códigos' . $LABEL_ .$TD_ . $TR_; 
$pessoa['pes_char_url_repositorio_codigos'] = isset($_POST['pes_char_url_repositorio_codigos'])?$_POST['pes_char_url_repositorio_codigos']:'';
$INPUT = '<input type="url" name="pes_char_url_repositorio_codigos" required size="70" minlength="10" maxlength="50" value="' . $pessoa['pes_char_url_repositorio_codigos'] .'">';
echo $TR. $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'URL do linkedin' . $LABEL_ .$TD_ . $TR_; 
$pessoa['pes_char_url_linkedin'] = isset($_POST['pes_char_url_linkedin'])?$_POST['pes_char_url_linkedin']:'';
$INPUT = '<input type="url" name="pes_char_url_linkedin" required size="70" minlength="10" maxlength="50" value="' . $pessoa['pes_char_url_linkedin'] .'">';
echo $TR. $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Data de nascimento' . $LABEL_ .$TD_ . $TR_; 
$pessoa['pes_date_data_nascimento'] = isset($_POST['pes_date_data_nascimento'])?$_POST['pes_date_data_nascimento']:'';
$INPUT = '<input type="text" name="pes_date_data_nascimento" id="pes_date_data_nascimento" size="70" required onkeypress="$(this).mask(\'00-00-0000\');" minlength="10" maxlength="10" value="' . $pessoa['pes_date_data_nascimento'] .'">';
echo $TR. $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Celular' . $LABEL_ .$TD_ . $TR_; 
$pessoa['pes_char_celular_numero'] = isset($_POST['pes_char_celular_numero'])?$_POST['pes_char_celular_numero']:'';
$INPUT = '<input type="text" name="pes_char_celular_numero" size="70" required onkeypress="$(this).mask(\'(00)0-0000-0000\');" minlength="15" maxlength="15" value="' . $pessoa['pes_char_celular_numero'] .'">';
echo $TR. $TD . $INPUT . $TD_ . $TR_; 

echo $TR . $TD . $LABEL . 'Sexo' . $LABEL_ .$TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="pes_bit_sexo">';
echo $SELECT;
foreach ($array_sexo as $indice => $pes_bit_sexo) {	
	if ($indice == 0) {
		continue;
	}
	echo ($pes_bit_sexo == $pessoa['pes_bit_sexo'])	? "<option value=$indice selected>$pes_bit_sexo</option>" : "<option value=$indice>$pes_bit_sexo</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Escolaridade' . $LABEL_ .$TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="pes_int_escolaridade">';
echo $SELECT;
foreach ($array_escolaridade as $indice => $pes_int_escolaridade) {	
	if ($indice == 0) {
		continue;
	}
	echo ($pes_int_escolaridade == $pessoa['pes_int_escolaridade'])	? "<option value=$indice selected>$pes_int_escolaridade</option>" : "<option value=$indice>$pes_int_escolaridade</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Estado civil' . $LABEL_ .$TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="pes_int_estado_civil">';
echo $SELECT;
foreach ($array_estado_civil as $indice => $pes_int_estado_civil) {	
	if ($indice == 0) {
		continue;
	}
	echo ($pes_int_estado_civil == $pessoa['pes_int_estado_civil'])	? "<option value=$indice selected>$pes_int_estado_civil</option>" : "<option value=$indice>$pes_int_estado_civil</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Nacionalidade' . $LABEL_ .$TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="pes_int_nacionalidade">';
echo $SELECT;
foreach ($array_nacionalidade as $indice => $pes_int_nacionalidade) {	
	if ($indice == 0) {
		continue;
	}
	echo ($pes_int_nacionalidade == $pessoa['pes_int_nacionalidade'])	? "<option value=$indice selected>$pes_int_nacionalidade</option>" : "<option value=$indice>$pes_int_nacionalidade</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Possui filhos' . $LABEL_ .$TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="pes_bit_possui_filhos">';
echo $SELECT;
foreach ($array_resposta as $indice => $pes_bit_possui_filhos) {	
	if ($indice == 0) {
		continue;
	}
	echo ($pes_bit_possui_filhos == $pessoa['pes_bit_possui_filhos'])	? "<option value=$indice selected>$pes_bit_possui_filhos</option>" : "<option value=$indice>$pes_bit_possui_filhos</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Possui deficiência' . $LABEL_ .$TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="pes_bit_possui_deficiencia">';
echo $SELECT;
foreach ($array_resposta as $indice => $pes_bit_possui_deficiencia) {	
	if ($indice == 0) {
		continue;
	}
	echo ($pes_bit_possui_deficiencia == $pessoa['pes_bit_possui_deficiencia'])	? "<option value=$indice selected>$pes_bit_possui_deficiencia</option>" : "<option value=$indice>$pes_bit_possui_deficiencia</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'País' . $LABEL_ .$TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="pes_int_pais">';
echo $SELECT;
foreach ($array_pais as $indice => $pes_int_pais) {	
	if ($indice == 0) {
		continue;
	}
	echo ($pes_int_pais == $pessoa['pes_int_pais'])	? "<option value=$indice selected>$pes_int_pais</option>" : "<option value=$indice>$pes_int_pais</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Estado' . $LABEL_ .$TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="pes_int_estado">';
echo $SELECT;
foreach ($array_estado as $indice => $pes_int_estado) {	
	if ($indice == 0) {
		continue;
	}
	echo ($pes_int_estado == $pessoa['pes_int_estado'])	? "<option value=$indice selected>$pes_int_estado</option>" : "<option value=$indice>$int_estado</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Cidade' . $LABEL_ .$TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="pes_int_cidade">';
echo $SELECT;
foreach ($array_cidade as $indice => $pes_int_cidade) {	
	if ($indice == 0) {
		continue;
	}
	echo ($pes_int_cidade == $pessoa['pes_int_cidade'])	? "<option value=$indice selected>$pes_int_cidade</option>" : "<option value=$indice>$pes_int_cidade</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'CNH' . $LABEL_ .$TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="pes_int_cnh">';
echo $SELECT;
foreach ($array_cnh as $indice => $pes_int_cnh) {	
	if ($indice == 0) {
		continue;
	}
	echo ($pes_int_cnh == $pessoa['pes_int_cnh'])	? "<option value=$indice selected>$pes_int_cnh</option>" : "<option value=$indice>$pes_int_cnh</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Último salário mensal (R$)' . $LABEL_ .$TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="pes_int_ultimo_salario_mensal">';
echo $SELECT;
foreach ($array_ultimo_salario as $indice => $pes_int_ultimo_salario_mensal) {	
	if ($indice == 0) {
		continue;
	}
	echo ($pes_int_ultimo_salario_mensal == $pessoa['pes_int_ultimo_salario_mensal'])	? "<option value=$indice selected>$pes_int_ultimo_salario_mensal</option>" : "<option value=$indice>$pes_int_ultimo_salario_mensal</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Está empregado atualmente' . $LABEL_ .$TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="pes_bit_empregado_atualmente">';
echo $SELECT;
foreach ($array_resposta as $indice => $pes_bit_empregado_atualmente) {	
	if ($indice == 0) {
		continue;
	}
	echo ($pes_bit_empregado_atualmente == $pessoa['pes_bit_empregado_atualmente'])	? "<option value=$indice selected>$pes_bit_empregado_atualmente</option>" : "<option value=$indice>$pes_bit_empregado_atualmente</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Está porcurando emprego atualmente' . $LABEL_ .$TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="pes_bit_procurando_emprego_atualmente">';
echo $SELECT;
foreach ($array_resposta as $indice => $pes_bit_procurando_emprego_atualmente) {	
	if ($indice == 0) {
		continue;
	}
	echo ($pes_bit_procurando_emprego_atualmente == $pessoa['pes_bit_procurando_emprego_atualmente'])	? "<option value=$indice selected>$pes_bit_procurando_emprego_atualmente</option>" : "<option value=$indice>$pes_bit_procurando_emprego_atualmente</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Está disponível para viagem' . $LABEL_ .$TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="pes_bit_disponivel_viagens">';
echo $SELECT;
foreach ($array_resposta as $indice => $pes_bit_disponivel_viagens) {	
	if ($indice == 0) {
		continue;
	}
	echo ($pes_bit_disponivel_viagens == $pessoa['pes_bit_disponivel_viagens'])	? "<option value=$indice selected>$pes_bit_disponivel_viagens</option>" : "<option value=$indice>$pes_bit_disponivel_viagens</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Pode trabalhar em outras cidades' . $LABEL_ .$TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="pes_bit_trabalha_outras_cidades">';
echo $SELECT;
foreach ($array_resposta as $indice => $pes_bit_trabalha_outras_cidades) {	
	if ($indice == 0) {
		continue;
	}
	echo ($pes_bit_trabalha_outras_cidades == $pessoa['pes_bit_trabalha_outras_cidades'])	? "<option value=$indice selected>$pes_bit_trabalha_outras_cidades</option>" : "<option value=$indice>$pes_bit_trabalha_outras_cidades</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Pode trabalhar em outros países' . $LABEL_ .$TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="pes_bit_trabalha_exterior">';
echo $SELECT;
foreach ($array_resposta as $indice => $pes_bit_trabalha_exterior) {	
	if ($indice == 0) {
		continue;
	}
	echo ($pes_bit_trabalha_exterior == $pessoa['pes_bit_trabalha_exterior'])	? "<option value=$indice selected>$pes_bit_trabalha_exterior</option>" : "<option value=$indice>$pes_bit_trabalha_exterior</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Pode trabalhar home office' . $LABEL_ .$TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="pes_bit_trabalha_home_office">';
echo $SELECT;
foreach ($array_resposta as $indice => $pes_bit_trabalha_home_office) {	
	if ($indice == 0) {
		continue;
	}
	echo ($pes_bit_trabalha_home_office == $pessoa['pes_bit_trabalha_home_office'])	? "<option value=$indice selected>$pes_bit_trabalha_home_office</option>" : "<option value=$indice>$pes_bit_trabalha_home_office</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Possui carro' . $LABEL_ .$TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="pes_bit_possui_carro">';
echo $SELECT;
foreach ($array_resposta as $indice => $pes_bit_possui_carro) {	
	if ($indice == 0) {
		continue;
	}
	echo ($pes_bit_possui_carro == $pessoa['pes_bit_possui_carro'])	? "<option value=$indice selected>$pes_bit_possui_carro</option>" : "<option value=$indice>$pes_bit_possui_carro</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Possui moto' . $LABEL_ .$TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="pes_pes_bit_possui_moto">';
echo $SELECT;
foreach ($array_resposta as $indice => $pes_bit_possui_moto) {	
	if ($indice == 0) {
		continue;
	}
	echo ($pes_bit_possui_moto == $pessoa['pes_bit_possui_moto'])	? "<option value=$indice selected>$pes_bit_possui_moto</option>" : "<option value=$indice>$pes_bit_possui_moto</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Foi dispensado do serviço militar' . $LABEL_ .$TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="pes_bit_dispensado_servico_militar">';
echo $SELECT;
foreach ($array_resposta as $indice => $pes_bit_dispensado_servico_militar) {	
	if ($indice == 0) {
		continue;
	}
	echo ($pes_bit_dispensado_servico_militar == $pessoa['pes_bit_dispensado_servico_militar'])	? "<option value=$indice selected>$pes_bit_dispensado_servico_militar</option>" : "<option value=$indice>$pes_bit_dispensado_servico_militar</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ .$TD_ . $TR_; 

$SUBMIT = '<input type="submit" value="Salvar" onclick=\'return confirmar();\'>';
echo $TR. $TD . $SUBMIT . $TD_ . $TR_;

echo $TABLE_;

echo $FORM_;

echo $DIV_;

echo $DIV_;

echo $BODY_;

echo $HTML_;