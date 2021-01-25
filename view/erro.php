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

echo $H1 . 'Erro' . $H1_;
echo '<span class="erro">' . $array_erro[$_GET['e']]. '</span>';

if (isset($_GET['msg'])) {
    echo '<span class="erro">' . $_GET['msg']. '</span>';
}

$MSG = '<script>setTimeout(function() { window.history.back(); }, 5000);</script>';
echo $MSG;

echo $DIV_;

echo $BODY_;

echo $HTML_;