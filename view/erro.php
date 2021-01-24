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
echo $TR . $TH . 'Erro' . $TH_ . $TR_;
echo $TR . $TD . '<p class="erro">' . $array_erro[$_GET['e']]. '</p>'  . $TD_ . $TR_;

if (isset($_GET['msg'])) {
    echo $TR . $TD . '<p class="erro">' . $_GET['msg']. '</p>'  . $TD_ . $TR_;
}

$MSG = '<script>setTimeout(function() { window.history.back(); }, 10000);</script>';
echo $MSG;

echo $TABLE_;

echo $DIV_;

echo $BODY_;

echo $HTML_;