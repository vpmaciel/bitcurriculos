<?php
session_start();

if(!isset($_SESSION['usu_int_id'])) {
	header('location:..\view\erro.php?e=UNL');
}
require_once '../lib/biblioteca.php';
require_once '../model/model.php';
echo $DOCTYPE;
echo $HTML;
echo $HEAD;
require_once 'cabecalho.php';
echo $HEAD_;
echo $BODY;

require_once 'menu.php';

echo $DIV_MAIN;
echo $H1 . 'DADOS PESSOAIS' . $H1_;

$FORM = '<form action="../controller/pessoa.php" method="post">';

echo $FORM;

echo $TABLE;

echo $TR . $TD . $LABEL . 'Nome' . $LABEL_ .$TD . $TR; 
$pessoa['char_nome'] = isset($_POST['char_nome'])?$_POST['char_nome']:'';
$INPUT = '<input type="text" name="char_nome" required size="70" minlength="10" maxlength="50" value="' . $pessoa['char_nome'] .'">';
echo $TR. $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'URL de repositório de códigos' . $LABEL_ .$TD . $TR; 
$pessoa['char_url_repositorio_codigos'] = isset($_POST['char_url_repositorio_codigos'])?$_POST['char_url_repositorio_codigos']:'';
$INPUT = '<input type="text" name="char_url_repositorio_codigos" required size="70" minlength="10" maxlength="50" value="' . $pessoa['char_url_repositorio_codigos'] .'">';
echo $TR. $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'URL do linkedin' . $LABEL_ .$TD . $TR; 
$pessoa['char_url_linkedin'] = isset($_POST['char_url_linkedin'])?$_POST['char_url_linkedin']:'';
$INPUT = '<input type="text" name="char_url_linkedin" required size="70" minlength="10" maxlength="50" value="' . $pessoa['char_url_linkedin'] .'">';
echo $TR. $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Data de nascimento' . $LABEL_ .$TD . $TR; 
$pessoa['date_data_nascimento'] = isset($_POST['date_data_nascimento'])?$_POST['date_data_nascimento']:'';
$INPUT = '<input type="text" name="date_data_nascimento" size="70" required onkeypress="$(this).mask(\'00-00-0000\');" minlength="10" maxlength="10" value="' . $pessoa['date_data_nascimento'] .'">';
echo $TR. $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Celular' . $LABEL_ .$TD . $TR; 
$pessoa['char_celular_numero'] = isset($_POST['char_celular_numero'])?$_POST['char_celular_numero']:'';
$INPUT = '<input type="text" name="char_celular_numero" size="70" required onkeypress="$(this).mask(\'(00)0-0000-0000\');" minlength="15" maxlength="15" value="' . $pessoa['char_celular_numero'] .'">';
echo $TR. $TD . $INPUT . $TD_ . $TR_; 

echo $TR . $TD . $LABEL . 'Sexo' . $LABEL_ .$TD . $TR; 
echo $TR. $TD;
$SELECT = '<select name="bit_sexo">';
echo $SELECT;
foreach ($array_sexo as $indice => $bit_sexo) {	
	if ($indice == 0) {
		continue;
	}
	echo ($bit_sexo == $pessoa['bit_sexo'])	? "<option value=$indice selected>$bit_sexo</option>" : "<option value=$indice>$bit_sexo</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Escolaridade' . $LABEL_ .$TD . $TR; 
echo $TR. $TD;
$SELECT = '<select name="int_escolaridade">';
echo $SELECT;
foreach ($array_escolaridade as $indice => $int_escolaridade) {	
	if ($indice == 0) {
		continue;
	}
	echo ($int_escolaridade == $pessoa['int_escolaridade'])	? "<option value=$indice selected>$int_escolaridade</option>" : "<option value=$indice>$int_escolaridade</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Estado civil' . $LABEL_ .$TD . $TR; 
echo $TR. $TD;
$SELECT = '<select name="int_estado_civil">';
echo $SELECT;
foreach ($array_estado_civil as $indice => $int_estado_civil) {	
	if ($indice == 0) {
		continue;
	}
	echo ($int_estado_civil == $pessoa['int_estado_civil'])	? "<option value=$indice selected>$int_estado_civil</option>" : "<option value=$indice>$int_estado_civil</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Nacionalidade' . $LABEL_ .$TD . $TR; 
echo $TR. $TD;
$SELECT = '<select name="int_int_nacionalidade">';
echo $SELECT;
foreach ($array_nacionalidade as $indice => $int_nacionalidade) {	
	if ($indice == 0) {
		continue;
	}
	echo ($int_nacionalidade == $pessoa['int_nacionalidade'])	? "<option value=$indice selected>$int_nacionalidade</option>" : "<option value=$indice>$int_nacionalidade</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Possui filhos' . $LABEL_ .$TD . $TR; 
echo $TR. $TD;
$SELECT = '<select name="bit_possui_filhos">';
echo $SELECT;
foreach ($array_resposta as $indice => $bit_possui_filhos) {	
	if ($indice == 0) {
		continue;
	}
	echo ($bit_possui_filhos == $pessoa['bit_possui_filhos'])	? "<option value=$indice selected>$bit_possui_filhos</option>" : "<option value=$indice>$bit_possui_filhos</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Possui deficiência' . $LABEL_ .$TD . $TR; 
echo $TR. $TD;
$SELECT = '<select name="bit_possui_deficiencia">';
echo $SELECT;
foreach ($array_resposta as $indice => $bit_possui_deficiencia) {	
	if ($indice == 0) {
		continue;
	}
	echo ($bit_possui_deficiencia == $pessoa['bit_possui_deficiencia'])	? "<option value=$indice selected>$bit_possui_deficiencia</option>" : "<option value=$indice>$bit_possui_deficiencia</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'País' . $LABEL_ .$TD . $TR; 
echo $TR. $TD;
$SELECT = '<select name="int_pais">';
echo $SELECT;
foreach ($array_pais as $indice => $int_pais) {	
	if ($indice == 0) {
		continue;
	}
	echo ($int_pais == $pessoa['int_pais'])	? "<option value=$indice selected>$int_pais</option>" : "<option value=$indice>$int_pais</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Estado' . $LABEL_ .$TD . $TR; 
echo $TR. $TD;
$SELECT = '<select name="int_estado">';
echo $SELECT;
foreach ($array_estado as $indice => $int_estado) {	
	if ($indice == 0) {
		continue;
	}
	echo ($int_estado == $pessoa['int_estado'])	? "<option value=$indice selected>$int_estado</option>" : "<option value=$indice>$int_estado</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Cidade' . $LABEL_ .$TD . $TR; 
echo $TR. $TD;
$SELECT = '<select name="int_cidade">';
echo $SELECT;
foreach ($array_cidade as $indice => $int_cidade) {	
	if ($indice == 0) {
		continue;
	}
	echo ($int_cidade == $pessoa['int_cidade'])	? "<option value=$indice selected>$int_cidade</option>" : "<option value=$indice>$int_cidade</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'CNH' . $LABEL_ .$TD . $TR; 
echo $TR. $TD;
$SELECT = '<select name="int_cnh">';
echo $SELECT;
foreach ($array_lista as $indice => $int_cnh) {	
	if ($indice == 0) {
		continue;
	}
	echo ($int_cnh == $pessoa['int_cnh'])	? "<option value=$indice selected>$int_cnh</option>" : "<option value=$indice>$int_cnh</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Último salário mensal (R$)' . $LABEL_ .$TD . $TR; 
echo $TR. $TD;
$SELECT = '<select name="int_ultimo_salario_mensal">';
echo $SELECT;
foreach ($array_ultimo_salario as $indice => $int_ultimo_salario_mensal) {	
	if ($indice == 0) {
		continue;
	}
	echo ($int_ultimo_salario_mensal == $pessoa['int_ultimo_salario_mensal'])	? "<option value=$indice selected>$int_ultimo_salario_mensal</option>" : "<option value=$indice>$int_ultimo_salario_mensal</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Está empregado atualmente' . $LABEL_ .$TD . $TR; 
echo $TR. $TD;
$SELECT = '<select name="bit_empregado_atualmente">';
echo $SELECT;
foreach ($array_resposta as $indice => $bit_empregado_atualmente) {	
	if ($indice == 0) {
		continue;
	}
	echo ($bit_empregado_atualmente == $pessoa['bit_empregado_atualmente'])	? "<option value=$indice selected>$bit_empregado_atualmente</option>" : "<option value=$indice>$bit_empregado_atualmente</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Está porcurando emprego atualmente' . $LABEL_ .$TD . $TR; 
echo $TR. $TD;
$SELECT = '<select name="bit_procurando_emprego_atualmente">';
echo $SELECT;
foreach ($array_resposta as $indice => $bit_procurando_emprego_atualmente) {	
	if ($indice == 0) {
		continue;
	}
	echo ($bit_procurando_emprego_atualmente == $pessoa['bit_procurando_emprego_atualmente'])	? "<option value=$indice selected>$bit_procurando_emprego_atualmente</option>" : "<option value=$indice>$bit_procurando_emprego_atualmente</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Está disponível para viagem' . $LABEL_ .$TD . $TR; 
echo $TR. $TD;
$SELECT = '<select name="bit_disponivel_viagens">';
echo $SELECT;
foreach ($array_resposta as $indice => $bit_disponivel_viagens) {	
	if ($indice == 0) {
		continue;
	}
	echo ($bit_disponivel_viagens == $pessoa['bit_disponivel_viagens'])	? "<option value=$indice selected>$bit_disponivel_viagens</option>" : "<option value=$indice>$bit_disponivel_viagens</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Pode trabalhar em outras cidades' . $LABEL_ .$TD . $TR; 
echo $TR. $TD;
$SELECT = '<select name="bit_trabalha_outras_cidades">';
echo $SELECT;
foreach ($array_resposta as $indice => $bit_trabalha_outras_cidades) {	
	if ($indice == 0) {
		continue;
	}
	echo ($bit_trabalha_outras_cidades == $pessoa['bit_trabalha_outras_cidades'])	? "<option value=$indice selected>$bit_trabalha_outras_cidades</option>" : "<option value=$indice>$bit_trabalha_outras_cidades</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Pode trabalhar em outros países' . $LABEL_ .$TD . $TR; 
echo $TR. $TD;
$SELECT = '<select name="bit_trabalha_exterior">';
echo $SELECT;
foreach ($array_resposta as $indice => $bit_trabalha_exterior) {	
	if ($indice == 0) {
		continue;
	}
	echo ($bit_trabalha_exterior == $pessoa['bit_trabalha_exterior'])	? "<option value=$indice selected>$bit_trabalha_exterior</option>" : "<option value=$indice>$bit_trabalha_exterior</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Pode trabalhar home office' . $LABEL_ .$TD . $TR; 
echo $TR. $TD;
$SELECT = '<select name="bit_trabalha_home_office">';
echo $SELECT;
foreach ($array_resposta as $indice => $bit_trabalha_home_office) {	
	if ($indice == 0) {
		continue;
	}
	echo ($bit_trabalha_home_office == $pessoa['bit_trabalha_home_office'])	? "<option value=$indice selected>$bit_trabalha_home_office</option>" : "<option value=$indice>$bit_trabalha_home_office</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Possui carro' . $LABEL_ .$TD . $TR; 
echo $TR. $TD;
$SELECT = '<select name="bit_possui_carro">';
echo $SELECT;
foreach ($array_resposta as $indice => $bit_possui_carro) {	
	if ($indice == 0) {
		continue;
	}
	echo ($bit_possui_carro == $pessoa['bit_possui_carro'])	? "<option value=$indice selected>$bit_possui_carro</option>" : "<option value=$indice>$bit_possui_carro</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Possui moto' . $LABEL_ .$TD . $TR; 
echo $TR. $TD;
$SELECT = '<select name="bit_bit_possui_moto">';
echo $SELECT;
foreach ($array_resposta as $indice => $bit_possui_moto) {	
	if ($indice == 0) {
		continue;
	}
	echo ($bit_possui_moto == $pessoa['bit_possui_moto'])	? "<option value=$indice selected>$bit_possui_moto</option>" : "<option value=$indice>$bit_possui_moto</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Foi dispensado do serviço militar' . $LABEL_ .$TD . $TR; 
echo $TR. $TD;
$SELECT = '<select name="bit_dispensado_servico_militar">';
echo $SELECT;
foreach ($array_resposta as $indice => $bit_dispensado_servico_militar) {	
	if ($indice == 0) {
		continue;
	}
	echo ($bit_dispensado_servico_militar == $pessoa['bit_dispensado_servico_militar'])	? "<option value=$indice selected>$bit_dispensado_servico_militar</option>" : "<option value=$indice>$bit_dispensado_servico_militar</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ .$TD . $TR; 

$SUBMIT = '<input type="submit" value="Salvar" onclick=\'return confirmar();\'>';
echo $TR. $TD . $SUBMIT . $TD_ . $TR_;

echo $TABLE_;

echo $FORM_;

echo $DIV_;

echo $DIV_;

echo $BODY_;

echo $HTML_;