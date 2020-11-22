<?php
session_start();
if (!isset($_SESSION["usuario_id"]))
{
	//header("location: erro.php?erro=1");
}
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

