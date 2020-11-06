<?php
require_once '../lib/biblioteca.php';

echo $DOCTYPE;
echo $HTML;
echo $HEAD;
require_once 'cabecalho.php';
echo $HEAD_;
echo $BODY;

require_once 'menu.php';

echo $DIV_MAIN;
echo $H1 . 'BitCurriculos' . $H1_;

$MSG = '<p align="justify">O BitCurriculos é um sistema para Internet em Recursos Humanos, com foco em recrutamento on-line. Atualmente administramos a mais bem organizada base de currículos do país, 
	oferecendo às empresas o mais completo sistema de recrutamento on-line. Cadastre seu currículo para estar disponível para diversas empresas. Cadastre sua empresa para buscar profissionais.</p>';

echo $MSG;

echo $DIV_;

echo $DIV_;

echo $BODY_;
	
echo $HTML_;
?>