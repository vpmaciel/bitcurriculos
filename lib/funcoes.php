<?php
defined('BASEPATH') || exit('No direct script access allowed');
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