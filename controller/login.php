<?php
session_start();

require_once '../lib/biblioteca.php';
require_once '../model/model.php';


function preparar($campo, $tamanho) {
    $valor = strip_tags($campo);
    $valor = trim($valor, ' ');
    $valor = preg_replace('/\s+/', ' ', $valor);

    if ($tamanho > 0) {
        $valor = substr($valor,0,$tamanho);
    }
    
    $valor = mb_strtoupper($valor,'UTF-8');
   
    return $valor;
}
if (!isset($_SESSION["usuario_id"]))
{
	//header("location: erro.php?erro=1");
}