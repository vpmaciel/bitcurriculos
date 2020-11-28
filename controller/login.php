<?php
session_start();

if (!isset($_SESSION["usuario_id"])) {
	//header("location: erro.php?erro=1");
}

require_once '../lib/biblioteca.php';
require_once '../model/model.php';


function autenticar($campo, $tamanho) {
    
}
$usuario

