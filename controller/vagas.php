<?php
session_start();

if(!isset($_SESSION['usu_id'])) {
	header('location:..\view\erro.php?e=UNL');
	exit;
}
require_once '../lib/biblioteca.php';
require_once '../model/model.php';
require_once '../sql/sql.php';

####################################################################################################

$publica_vaga_model['pub_vag_cargo'] = $_GET['pub_vag_cargo'];
header('location: ..\view\vagas_lista.php?pub_vag_cargo='. $publica_vaga_model['pub_vag_cargo']);
exit;

####################################################################################################