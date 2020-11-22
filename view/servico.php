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

echo $TR . $TD . $LABEL . 'Empresa / Prestador de serviço' . $LABEL_ . $TD_; 
$pessoa['empresa'] = isset($_POST['empresa'])?$_POST['empresa']:'';
$INPUT = '<input type="text" name="empresa" required size="70" minlength="10" maxlength="50" value="' . $pessoa['empresa'] .'">';
echo $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Tipo de empresa' . $LABEL_ . $TD_; 
echo $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($cidade_lista as $indice => $cidade) {	
	if ($indice == 0) {
		continue;
	}
	echo ($cidade == $pessoa['cidade'])	? "<option value=$indice selected>$cidade</option>" : "<option value=$indice>$cidade</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Segmento' . $LABEL_ . $TD_; 
echo $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($cidade_lista as $indice => $cidade) {	
	if ($indice == 0) {
		continue;
	}
	echo ($cidade == $pessoa['cidade'])	? "<option value=$indice selected>$cidade</option>" : "<option value=$indice>$cidade</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Cargo' . $LABEL_ . $TD_; 
$pessoa['cargo'] = isset($_POST['cargo'])?$_POST['cargo']:'';
$INPUT = '<input type="text" name="cargo" required size="70" minlength="10" maxlength="50" value="' . $pessoa['cargo'] .'">';
echo $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Serviço prestado' . $LABEL_ . $TD_; 
$pessoa['funcoes'] = isset($_POST['funcoes'])?$_POST['funcoes']:'';
$TEXTAREA = '<textarea id="w3review" name="w3review" rows="2" cols="50" maxlength="500">' . $pessoa['funcoes'] .'</textarea>';
echo $TD . $TEXTAREA . $TD_ . $TR_; 

echo $TR . $TD . $LABEL . 'Vagas' . $LABEL_ . $TD_; 
$pessoa['ano_inicio'] = isset($_POST['ano_inicio'])?$_POST['ano_inicio']:'';
$INPUT = '<input type="text" name="ano_inicio" size="70" required onkeypress="$(this).mask(\'0000\');" minlength="4" maxlength="4" value="' . $pessoa['ano_inicio'] .'">';
echo $TD . $INPUT . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Telefone' . $LABEL_ . $TD_; 
$pessoa['cargo'] = isset($_POST['cargo'])?$_POST['cargo']:'';
$INPUT = '<input type="text" name="cargo" required size="70" minlength="10" maxlength="50" value="' . $pessoa['cargo'] .'">';
echo $TD . $INPUT . $TD_ . $TR_;


echo $TR . $TD . $LABEL . 'Estado' . $LABEL_ . $TD_; 
echo $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($estado_lista as $indice => $estado) {	
	if ($indice == 0) {
		continue;
	}
	echo ($estado == $pessoa['estado'])	? "<option value=$indice selected>$estado</option>" : "<option value=$indice>$estado</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . 'Cidade' . $LABEL_ . $TD_; 
echo $TD;
$SELECT = '<select name="escolaridade">';
echo $SELECT;
foreach ($cidade_lista as $indice => $cidade) {	
	if ($indice == 0) {
		continue;
	}
	echo ($cidade == $pessoa['cidade'])	? "<option value=$indice selected>$cidade</option>" : "<option value=$indice>$cidade</option>";
}
echo $SELECT_ . $TD_ . $TR_;

echo $TR . $TD . $LABEL . '&nbsp;' . $LABEL_ . $TD_; 

$SUBMIT = '<input type="submit" value="Salvar" onclick=\'return confirmar();\'>';
echo $TD . $SUBMIT . $TD_ . $TR_;

echo $TABLE_;

echo $FORM_;

echo $DIV_;

echo $DIV_;

echo $BODY_;

echo $HTML_;