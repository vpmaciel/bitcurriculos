<?php
session_start();
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
echo $H1 . 'SERVIÇOS' . $H1_;

$FORM = '<form action="../controller/servico.php" method="post">';

echo $FORM;

echo $TABLE;

echo $TR . $TD . $LABEL . 'Empresa ( Prestador de serviço )' . $LABEL_ . $TD_ . $TR_; 
$pessoa['ser_char_empresa'] = isset($_POST['ser_char_empresa'])?$_POST['ser_char_empresa']:'';
$INPUT = '<input type="text" name="ser_char_empresa" required size="70" minlength="1" maxlength="50" value="' . $pessoa['ser_char_empresa'] .'">';
echo $TR . $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Tipo de empresa' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="ser_int_tipo_empresa">';
echo $SELECT;
foreach ($array_tipo_empresa as $indice => $ser_int_tipo_empresa) {	
	if ($indice == 0) {
		continue;
	}
	echo ($ser_int_tipo_empresa == $pessoa['ser_int_tipo_empresa'])	? "<option value=$indice selected>$ser_int_tipo_empresa</option>" : "<option value=$indice>$ser_int_tipo_empresa</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Segmento empresarial' . $LABEL_ . $TD_ . $TR_; 
$pessoa['ser_char_segmento_empresarial'] = isset($_POST['ser_char_segmento_empresarial'])?$_POST['ser_char_segmento_empresarial']:'';
$INPUT = '<input type="text" name="ser_char_segmento_empresarial" required size="70" minlength="1" maxlength="50" value="' . $pessoa['ser_char_segmento_empresarial'] .'">';
echo $TR . $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Cargo' . $LABEL_ . $TD_ . $TR_; 
$pessoa['ser_char_cargo'] = isset($_POST['ser_char_cargo'])?$_POST['ser_char_cargo']:'';
$INPUT = '<input type="text" name="ser_char_cargo" required size="70" minlength="1" maxlength="50" value="' . $pessoa['ser_char_cargo'] .'">';
echo $TR . $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Serviço prestado' . $LABEL_ . $TD_ . $TR_; 
$pessoa['ser_char_servico_prestado'] = isset($_POST['ser_char_servico_prestado'])?$_POST['ser_char_servico_prestado']:'';
$TEXTAREA = '<textarea id="ser_char_servico_prestado" name="ser_char_servico_prestado" rows="2" cols="50" maxlength="200">' . $pessoa['ser_char_servico_prestado'] .'</textarea>';
echo $TR . $TD . $TEXTAREA . $TD_ . $TR_; 

echo $TR . $TD . $LABEL . 'Total de funcionários' . $LABEL_ . $TD_ . $TR_; 
$pessoa['ser_int_total_funcionarios'] = isset($_POST['ser_int_total_funcionarios'])?$_POST['ser_int_total_funcionarios']:'';
$INPUT = '<input type="number" name="ser_int_total_funcionarios" size="70" required min="1" max="1000000" value="' . $pessoa['ser_int_total_funcionarios'] .'">';
echo $TR . $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Celular' . $LABEL_ . $TD_ . $TR_; 
$pessoa['ser_char_celular'] = isset($_POST['ser_char_celular'])?$_POST['ser_char_celular']:'';
$INPUT = '<input type="text" name="ser_char_celular" required size="70" minlength="10" maxlength="50" value="' . $pessoa['ser_char_celular'] .'">';
echo $TR . $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'E-mail' . $LABEL_ . $TD_ . $TR_; 
$pessoa['ser_char_email'] = isset($_POST['ser_char_email'])?$_POST['ser_char_email']:'';
$INPUT = '<input type="text" name="ser_char_email" required size="70" minlength="10" maxlength="50" value="' . $pessoa['ser_char_email'] .'">';
echo $TR . $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Site' . $LABEL_ . $TD_ . $TR_; 
$pessoa['ser_char_site'] = isset($_POST['ser_char_site'])?$_POST['ser_char_site']:'';
$INPUT = '<input type="text" name="ser_char_site" required size="70" minlength="10" maxlength="50" value="' . $pessoa['ser_char_site'] .'">';
echo $TR . $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Estado' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="ser_int_estado">';
echo $SELECT;
foreach ($array_estado as $indice => $ser_int_estado) {	
	if ($indice == 0) {
		continue;
	}
	echo ($ser_int_estado == $pessoa['ser_int_estado'])	? "<option value=$indice selected>$ser_int_estado</option>" : "<option value=$indice>$ser_int_estado</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Cidade' . $LABEL_ . $TD_ . $TR_; 
echo $TR . $TD;
$SELECT = '<select name="ser_int_cidade">';
echo $SELECT;
foreach ($array_cidade as $indice => $ser_int_cidade) {	
	if ($indice == 0) {
		continue;
	}
	echo ($ser_int_cidade == $pessoa['ser_int_cidade'])	? "<option value=$indice selected>$ser_int_cidade</option>" : "<option value=$indice>$ser_int_cidade</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_ . $TR_; 

$SUBMIT = '<input type="submit" value="Salvar" onclick=\'return confirmar();\'>';
echo $TR . $TD . $SUBMIT . $TD_ . $TR_;

echo $TABLE_;

echo $FORM_;

echo $DIV_;

echo $DIV_;

echo $BODY_;

echo $HTML_;