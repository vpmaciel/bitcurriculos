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

echo $DIV_MAIN;

require_once 'menu.php';

echo $TABLE;
echo $TR . $TH . 'Sucesso'  . $TH_ . $TR_; 

echo $TR . $TD . '<p class="sucesso">' . 'Operação realizada com sucesso !'. '</p>'  . $TD_ . $TR_;

if (isset($_GET['msg'])) {
    echo $TR . $TD . '<p class="sucesso">' . $_GET['msg']. '</p>'  . $TD_ . $TR_;
}

$url = isset($_GET['url_voltar']) ? $_GET['url_voltar'] : '';

if (isset($_GET['url_voltar'])) {
    header( "refresh:5;url= $url.php" );
}

echo $TABLE_;

echo $DIV_;

echo $BODY_;

echo $HTML_;