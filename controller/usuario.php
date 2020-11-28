<?php
session_start();

if (!isset($_SESSION["usu_int_id"])) {
	//header("location: erro.php?erro=1");
}

require_once '../lib/biblioteca.php';
require_once '../model/model.php';
require_once '../database/sql.php';


function autenticar($campo, $tamanho) {
    
}
$usuario_model = usuario_model();
//$usuario_model['usu_char_email'] = $_POST['usu_char_email'];
//$usuario_model['usu_char_senha'] = $_POST['usu_char_senha'];
echo "<br>" .count($usuario_model);


$resultado = selecionar($usuario_model, 'tb_usuario', usuario_model());
if( count($resultado) == 0)
echo "zero";