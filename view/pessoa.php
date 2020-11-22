<?php

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
foreach ($bit_sexo_lista as $indice => $bit_sexo) {	
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
foreach ($int_escolaridade_lista as $indice => $int_escolaridade) {	
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
foreach ($int_estado_civil_lista as $indice => $estado_civil) {	
	if ($indice == 0) {
		continue;
	}
	echo ($estado_civil == $pessoa['estado_civil'])	? "<option value=$indice selected>$estado_civil</option>" : "<option value=$indice>$estado_civil</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Nacionalidade' . $LABEL_ .$TD . $TR; 
echo $TR. $TD;
$SELECT = '<select name="int_estado_civil">';
echo $SELECT;
foreach ($nacionalidade_lista as $indice => $nacionalidade) {	
	if ($indice == 0) {
		continue;
	}
	echo ($nacionalidade == $pessoa['nacionalidade'])	? "<option value=$indice selected>$nacionalidade</option>" : "<option value=$indice>$nacionalidade</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Possui filhos' . $LABEL_ .$TD . $TR; 
echo $TR. $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($resposta_lista as $indice => $possui_filhos) {	
	if ($indice == 0) {
		continue;
	}
	echo ($possui_filhos == $pessoa['possui_filhos'])	? "<option value=$indice selected>$possui_filhos</option>" : "<option value=$indice>$possui_filhos</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Possui deficiência' . $LABEL_ .$TD . $TR; 
echo $TR. $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($resposta_lista as $indice => $possui_deficiencia) {	
	if ($indice == 0) {
		continue;
	}
	echo ($possui_deficiencia == $pessoa['possui_deficiencia'])	? "<option value=$indice selected>$possui_deficiencia</option>" : "<option value=$indice>$possui_deficiencia</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'País' . $LABEL_ .$TD . $TR; 
echo $TR. $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($pais_lista as $indice => $pais) {	
	if ($indice == 0) {
		continue;
	}
	echo ($pais == $pessoa['pais'])	? "<option value=$indice selected>$pais</option>" : "<option value=$indice>$pais</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Estado' . $LABEL_ .$TD . $TR; 
echo $TR. $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($estado_lista as $indice => $estado) {	
	if ($indice == 0) {
		continue;
	}
	echo ($estado == $pessoa['estado'])	? "<option value=$indice selected>$estado</option>" : "<option value=$indice>$estado</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Cidade' . $LABEL_ .$TD . $TR; 
echo $TR. $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($cidade_lista as $indice => $cidade) {	
	if ($indice == 0) {
		continue;
	}
	echo ($cidade == $pessoa['cidade'])	? "<option value=$indice selected>$cidade</option>" : "<option value=$indice>$cidade</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'CNH' . $LABEL_ .$TD . $TR; 
echo $TR. $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($cnh_lista as $indice => $cnh) {	
	if ($indice == 0) {
		continue;
	}
	echo ($cnh == $pessoa['cnh'])	? "<option value=$indice selected>$cnh</option>" : "<option value=$indice>$cnh</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Último salário mensal (R$)' . $LABEL_ .$TD . $TR; 
echo $TR. $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($ultimo_salario_lista as $indice => $ultimo_salario_mensal) {	
	if ($indice == 0) {
		continue;
	}
	echo ($ultimo_salario_mensal == $pessoa['ultimo_salario_mensal'])	? "<option value=$indice selected>$ultimo_salario_mensal</option>" : "<option value=$indice>$ultimo_salario_mensal</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Está empregado atualmente' . $LABEL_ .$TD . $TR; 
echo $TR. $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($resposta_lista as $indice => $empregado_atualmente) {	
	if ($indice == 0) {
		continue;
	}
	echo ($empregado_atualmente == $pessoa['empregado_atualmente'])	? "<option value=$indice selected>$empregado_atualmente</option>" : "<option value=$indice>$empregado_atualmente</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Está porcurando emprego atualmente' . $LABEL_ .$TD . $TR; 
echo $TR. $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($resposta_lista as $indice => $procurando_novo_emprego_atualmente) {	
	if ($indice == 0) {
		continue;
	}
	echo ($procurando_novo_emprego_atualmente == $pessoa['procurando_novo_emprego_atualmente'])	? "<option value=$indice selected>$procurando_novo_emprego_atualmente</option>" : "<option value=$indice>$procurando_novo_emprego_atualmente</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Está disponível para viagem' . $LABEL_ .$TD . $TR; 
echo $TR. $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($resposta_lista as $indice => $disponivel_para_viagem) {	
	if ($indice == 0) {
		continue;
	}
	echo ($disponivel_para_viagem == $pessoa['disponivel_para_viagem'])	? "<option value=$indice selected>$disponivel_para_viagem</option>" : "<option value=$indice>$disponivel_para_viagem</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Pode trabalhar em outras cidades' . $LABEL_ .$TD . $TR; 
echo $TR. $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($resposta_lista as $indice => $disponivel_para_trabalhar_outras_cidades) {	
	if ($indice == 0) {
		continue;
	}
	echo ($disponivel_para_trabalhar_outras_cidades == $pessoa['disponivel_para_trabalhar_outras_cidades'])	? "<option value=$indice selected>$disponivel_para_trabalhar_outras_cidades</option>" : "<option value=$indice>$disponivel_para_trabalhar_outras_cidades</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Pode trabalhar em outros países' . $LABEL_ .$TD . $TR; 
echo $TR. $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($resposta_lista as $indice => $disponivel_para_trabalhar_outros_paises) {	
	if ($indice == 0) {
		continue;
	}
	echo ($disponivel_para_trabalhar_outros_paises == $pessoa['disponivel_para_trabalhar_outros_paises'])	? "<option value=$indice selected>$disponivel_para_trabalhar_outros_paises</option>" : "<option value=$indice>$disponivel_para_trabalhar_outros_paises</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Pode trabalhar home office' . $LABEL_ .$TD . $TR; 
echo $TR. $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($resposta_lista as $indice => $disponivel_para_trabalhar_home_office) {	
	if ($indice == 0) {
		continue;
	}
	echo ($disponivel_para_trabalhar_home_office == $pessoa['disponivel_para_trabalhar_home_office'])	? "<option value=$indice selected>$disponivel_para_trabalhar_home_office</option>" : "<option value=$indice>$disponivel_para_trabalhar_home_office</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Possui carro' . $LABEL_ .$TD . $TR; 
echo $TR. $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($resposta_lista as $indice => $possui_carro) {	
	if ($indice == 0) {
		continue;
	}
	echo ($possui_carro == $pessoa['possui_carro'])	? "<option value=$indice selected>$possui_carro</option>" : "<option value=$indice>$possui_carro</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Possui moto' . $LABEL_ .$TD . $TR; 
echo $TR. $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($resposta_lista as $indice => $possui_moto) {	
	if ($indice == 0) {
		continue;
	}
	echo ($possui_moto == $pessoa['possui_moto'])	? "<option value=$indice selected>$possui_moto</option>" : "<option value=$indice>$possui_moto</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Foi dispensado do serviço militar' . $LABEL_ .$TD . $TR; 
echo $TR. $TD;
$SELECT = '<select name="dispensado_servico_militar">';
echo $SELECT;
foreach ($resposta_lista as $indice => $dispensado_servico_militar) {	
	if ($indice == 0) {
		continue;
	}
	echo ($dispensado_servico_militar == $pessoa['dispensado_servico_militar'])	? "<option value=$indice selected>$dispensado_servico_militar</option>" : "<option value=$indice>$dispensado_servico_militar</option>";
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