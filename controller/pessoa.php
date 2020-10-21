<?php
defined('BASEPATH') || exit('No direct script access allowed');

require_once 'funcoes.php';
require_once '../database/sql.php';

$pessoa = array(
    'usuario' => preparar($_POST['nome']),
);  

$condicao = array(
    'usuario' => '1',
    'nome' => 'vicente paulo maciel',
);

SQL::inserir($pessoa,'pessoa');
echo "<br><hr><br>";
SQL::atualizar($pessoa,'pessoa',$condicao);

