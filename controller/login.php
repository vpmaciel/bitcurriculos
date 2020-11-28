<?php
session_start();

if (!isset($_SESSION["usu_int_id"])) {
	//header("location: erro.php?erro=1");
}

require_once '../lib/biblioteca.php';
require_once '../model/model.php';


function autenticar($campo, $tamanho) {
    
}
echo $usuario_model['usu_char_email'] = $_POST['usu_char_email'];
echo $usuario_model['usu_char_senha'] = $_POST['usu_char_senha'];


