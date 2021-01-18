<?php
session_start();

if(!isset($_SESSION['usu_id'])) {
	header('location:..\view\erro.php?e=UNL');
	exit;
}
require_once '../lib/biblioteca.php';

echo $DOCTYPE;
echo $HTML;
echo $HEAD;
require_once 'cabecalho.php';

echo $HEAD_;
echo $BODY;

require_once 'pessoa.js';

echo $DIV_MAIN;

require_once 'menu.php';

$FORM = '<form action="../controller/pessoa.php" method="get">';

echo $FORM;

echo $TABLE;
echo $TR . $TH . 'Dados Pessoais'  . $TH_ . $TR_; 

echo $TR . $TD . $LABEL . 'Nome' . $LABEL_ .$TD_ . $TR_; 

if (isset($_GET['pessoa_model'])) {
	$pessoa_model_get = $_GET['pessoa_model'];
}

$pessoa_model['pes_nome'] = isset($_GET['pessoa_model']) ? $pessoa_model_get['pes_nome'] : '';
$INPUT = '<input type="text" name="pes_nome" required minlength="10" maxlength="50" value="' . $pessoa_model_get['pes_nome'] .'">';
echo $TR. $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'URL de repositório de códigos' . $LABEL_ .$TD_ . $TR_; 
$pessoa_model['pes_url_repositorio_codigos'] = isset($_GET['pessoa_model']) ? $pessoa_model_get['pes_url_repositorio_codigos'] : '';
$INPUT = '<input type="url" name="pes_url_repositorio_codigos" required minlength="10" maxlength="50" value="' . $pessoa_model['pes_url_repositorio_codigos'] .'">';
echo $TR. $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'URL do linkedin' . $LABEL_ .$TD_ . $TR_; 
$pessoa_model['pes_url_linkedin'] = isset($_GET['pessoa_model']) ? $pessoa_model_get['pes_url_linkedin'] : '';
$INPUT = '<input type="url" name="pes_url_linkedin" required minlength="10" maxlength="50" value="' . $pessoa_model['pes_url_linkedin'] .'">';
echo $TR. $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Data de nascimento' . $LABEL_ .$TD_ . $TR_; 
$pessoa_model['pes_data_nascimento'] = isset($_GET['pessoa_model']) ? $pessoa_model_get['pes_data_nascimento'] : $pessoa_model_get['pes_data_nascimento'];
$INPUT = '<input type="text" name="pes_data_nascimento" id="pes_data_nascimento" required maxlength="10" value="' . $pessoa_model['pes_data_nascimento'] .'">';
echo $TR. $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Celular' . $LABEL_ .$TD_ . $TR_; 
$pessoa_model['pes_celular_numero'] = isset($_GET['pessoa_model']) ? $pessoa_model_get['pes_celular_numero'] : $pessoa_model_get['pes_celular_numero'];
$INPUT = '<input type="text" name="pes_celular_numero" id="pes_celular_numero" required maxlength="13" value="' . $pessoa_model['pes_celular_numero'] .'">';
echo $TR. $TD . $INPUT . $TD_ . $TR_; 

echo $TR . $TD . $LABEL . 'Sexo' . $LABEL_ .$TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="pes_sexo">';
echo $SELECT;

foreach ($array_sexo as $indice => $pes_sexo) {		
	echo ($indice == $pessoa_model_get['pes_sexo']) ? "<option value=$indice selected>$pes_sexo</option>" : "<option value=$indice>$pes_sexo</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Escolaridade' . $LABEL_ .$TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="pes_escolaridade">';
echo $SELECT;
foreach ($array_escolaridade as $indice => $pes_escolaridade) {	
	echo ($indice == $pessoa_model_get['pes_escolaridade']) ? "<option value=$indice selected>$pes_escolaridade</option>" : "<option value=$indice>$pes_escolaridade</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Estado civil' . $LABEL_ .$TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="pes_estado_civil">';
echo $SELECT;
foreach ($array_estado_civil as $indice => $pes_estado_civil) {	
	echo ($indice == $pessoa_model_get['pes_estado_civil']) ? "<option value=$indice selected>$pes_estado_civil</option>" : "<option value=$indice>$pes_estado_civil</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Nacionalidade' . $LABEL_ .$TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="pes_nacionalidade">';
echo $SELECT;
foreach ($array_nacionalidade as $indice => $pes_nacionalidade) {	
	echo ($indice == $pessoa_model_get['pes_nacionalidade']) ? "<option value=$indice selected>$pes_nacionalidade</option>" : "<option value=$indice>$pes_nacionalidade</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Possui filhos' . $LABEL_ .$TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="pes_possui_filhos">';
echo $SELECT;
foreach ($array_resposta as $indice => $pes_possui_filhos) {	
	echo ($indice == $pessoa_model_get['pes_possui_filhos'])	? "<option value=$indice selected>$pes_possui_filhos</option>" : "<option value=$indice>$pes_possui_filhos</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Possui deficiência' . $LABEL_ .$TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="pes_possui_deficiencia">';
echo $SELECT;
foreach ($array_resposta as $indice => $pes_possui_deficiencia) {	
	echo ($indice == $pessoa_model_get['pes_possui_deficiencia']) ? "<option value=$indice selected>$pes_possui_deficiencia</option>" : "<option value=$indice>$pes_possui_deficiencia</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'País' . $LABEL_ .$TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="pes_pais">';
echo $SELECT;
foreach ($array_pais as $indice => $pes_pais) {	
	echo ($indice == $pessoa_model_get['pes_pais']) ? "<option value=$indice selected>$pes_pais</option>" : "<option value=$indice>$pes_pais</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Estado' . $LABEL_ .$TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="pes_estado">';
echo $SELECT;
foreach ($array_estado as $indice => $pes_estado) {	
	echo ($indice == $pessoa_model_get['pes_estado']) ? "<option value=$indice selected>$pes_estado</option>" : "<option value=$indice>$pes_estado</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Cidade' . $LABEL_ .$TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="pes_cidade">';
echo $SELECT;
foreach ($array_cidade as $indice => $pes_cidade) {	
	echo ($indice == $pessoa_model_get['pes_cidade']) ? "<option value=$indice selected>$pes_cidade</option>" : "<option value=$indice>$pes_cidade</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'CNH' . $LABEL_ .$TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="pes_cnh">';
echo $SELECT;
foreach ($array_cnh as $indice => $pes_cnh) {	
	echo ($indice == $pessoa_model_get['pes_cnh'])	? "<option value=$indice selected>$pes_cnh</option>" : "<option value=$indice>$pes_cnh</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Último salário mensal (R$)' . $LABEL_ .$TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="pes_ultimo_salario_mensal">';
echo $SELECT;
foreach ($array_ultimo_salario as $indice => $pes_ultimo_salario_mensal) {	
	echo ($indice == $pessoa_model_get['pes_ultimo_salario_mensal'])	? "<option value=$indice selected>$pes_ultimo_salario_mensal</option>" : "<option value=$indice>$pes_ultimo_salario_mensal</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Está empregado atualmente' . $LABEL_ .$TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="pes_empregado_atualmente">';
echo $SELECT;
foreach ($array_resposta as $indice => $pes_empregado_atualmente) {	
	echo ($indice == $pessoa_model_get['pes_empregado_atualmente']) ? "<option value=$indice selected>$pes_empregado_atualmente</option>" : "<option value=$indice>$pes_empregado_atualmente</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Está porcurando emprego atualmente' . $LABEL_ .$TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="pes_procurando_emprego_atualmente">';
echo $SELECT;
foreach ($array_resposta as $indice => $pes_procurando_emprego_atualmente) {	
	echo ($indice == $pessoa_model_get['pes_procurando_emprego_atualmente'])	? "<option value=$indice selected>$pes_procurando_emprego_atualmente</option>" : "<option value=$indice>$pes_procurando_emprego_atualmente</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Está disponível para viagem' . $LABEL_ .$TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="pes_disponivel_viagens">';
echo $SELECT;
foreach ($array_resposta as $indice => $pes_disponivel_viagens) {	
	echo ($indice == $pessoa_model_get['pes_disponivel_viagens']) ? "<option value=$indice selected>$pes_disponivel_viagens</option>" : "<option value=$indice>$pes_disponivel_viagens</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Pode trabalhar em outras cidades' . $LABEL_ .$TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="pes_trabalha_outras_cidades">';
echo $SELECT;
foreach ($array_resposta as $indice => $pes_trabalha_outras_cidades) {	
	echo ($indice == $pessoa_model_get['pes_trabalha_outras_cidades'])	? "<option value=$indice selected>$pes_trabalha_outras_cidades</option>" : "<option value=$indice>$pes_trabalha_outras_cidades</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Pode trabalhar em outros países' . $LABEL_ .$TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="pes_trabalha_exterior">';
echo $SELECT;
foreach ($array_resposta as $indice => $pes_trabalha_exterior) {	
	echo ($indice == $pessoa_model_get['pes_trabalha_exterior'])	? "<option value=$indice selected>$pes_trabalha_exterior</option>" : "<option value=$indice>$pes_trabalha_exterior</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Pode trabalhar home office' . $LABEL_ .$TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="pes_trabalha_home_office">';
echo $SELECT;
foreach ($array_resposta as $indice => $pes_trabalha_home_office) {	
	echo ($indice == $pessoa_model_get['pes_trabalha_home_office']) ? "<option value=$indice selected>$pes_trabalha_home_office</option>" : "<option value=$indice>$pes_trabalha_home_office</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Possui carro' . $LABEL_ .$TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="pes_possui_carro">';
echo $SELECT;
foreach ($array_resposta as $indice => $pes_possui_carro) {	
	echo ($indice == $pessoa_model_get['pes_possui_carro']) ? "<option value=$indice selected>$pes_possui_carro</option>" : "<option value=$indice>$pes_possui_carro</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Possui moto' . $LABEL_ .$TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="pes_possui_moto">';
echo $SELECT;
foreach ($array_resposta as $indice => $pes_possui_moto) {	
	echo ($indice == $pessoa_model_get['pes_possui_moto'])	? "<option value=$indice selected>$pes_possui_moto</option>" : "<option value=$indice>$pes_possui_moto</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Foi dispensado do serviço militar' . $LABEL_ .$TD_ . $TR_; 
echo $TR. $TD;
$SELECT = '<select name="pes_dispensado_servico_militar">';
echo $SELECT;
foreach ($array_resposta as $indice => $pes_dispensado_servico_militar) {	
	echo ($indice == $pessoa_model_get['pes_dispensado_servico_militar']) ? "<option value=$indice selected>$pes_dispensado_servico_militar</option>" : "<option value=$indice>$pes_dispensado_servico_militar</option>";
}
echo $SELECT_ . $TD_ . $TR_;

$SUBMIT = '<input type="submit" value="SALVAR" onclick=\'return confirmar();\'>';
echo $TR. $TD . $SUBMIT . $TD_ . $TR_;

echo $TABLE_;

echo $FORM_;

echo $DIV_;

echo $DIV_;

echo $BODY_;

echo $HTML_;