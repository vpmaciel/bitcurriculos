<?php
session_start();

require_once '../lib/biblioteca.php';

echo $DOCTYPE;
echo $HTML;
echo $HEAD;
require_once 'cabecalho.php';
echo $HEAD_;
echo $BODY;

require_once 'menu.php';

echo $DIV_MAIN;
echo $H1 . 'Bit Curriculos' . $H1_;

$MSG = '<p align="justify">O Bit Curriculos é um sistema para internet em recursos humanos, com foco em recrutamento on-line. Atualmente administramos a mais bem organizada base de currículos do país, 
	oferecendo às empresas o mais completo sistema de recrutamento on-line. Cadastre seu currículo para estar disponível para diversas empresas. Cadastre sua empresa para buscar profissionais.</p>';	
echo $MSG;

$MSG = '<p align="justify">O nosso site oferece serviços para profissionais e empresas serem localizados em todo o Brasil para divulgar, prestar serviços ou vender seus produtos,
			oferece várias provas de concursos para você fazer treinamento e testar seus conhecimentos. Temos diversas apostilas para download, livros e treinamentos para você se preparar melhor.</p>';	
echo $MSG;

retornar_cotacao_dolar();

require_once 'enviar_email.php';

echo $DIV_;

echo $DIV_;

echo $BODY_;
	
echo $HTML_;