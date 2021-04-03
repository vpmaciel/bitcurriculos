<?php
session_start();

setlocale(LC_ALL, 'pt_BR.utf8');

require_once '../lib/biblioteca.php';

echo $DOCTYPE;
echo $HTML;
echo $HEAD;
require_once 'cabecalho.php';
echo $HEAD_;
echo $BODY;

echo $DIV_MAIN;

require_once 'menu.php';

echo $H1 . 'Bit Curriculos' . $H1_;

$MSG = '<p align="justify">O Bit Curriculos é um sistema para internet em recursos humanos, com foco em recrutamento on-line. Atualmente administramos a mais bem organizada base de currículos do país, 
	oferecendo às empresas o mais completo sistema de recrutamento on-line. Cadastre seu currículo para estar disponível para diversas empresas. Cadastre sua empresa para buscar profissionais.</p>';	
echo $MSG;

$MSG = '<p align="justify">O nosso site oferece serviços para profissionais serem localizados em todo o Brasil para divulgar, prestar serviços ou vender seus produtos,
			auxilía e prepara um currículo formatado, e você pode candidatar a várias vagas publicadas pelas empresas no site.</p>';	
echo $MSG;

echo $DIV_;

echo $DIV_;

echo $BODY_;
	
echo $HTML_;