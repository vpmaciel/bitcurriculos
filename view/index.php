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


//Define the object
$plot = new PHPlot();

//Define some data
$example_data = array(
 array('a',3),
 array('b',5),
 array('c',7),
 array('d',8),
 array('e',2),
 array('f',6),
 array('g',7)
);

$plot->SetDataValues($example_data);
//Turn off X axis ticks and labels because they get in the way:
$plot->SetXTickLabelPos('none');
$plot->SetXTickPos('none');
//Draw it
$s = $plot->DrawGraph();


echo $H1 . 'Bit Curriculos' . $H1_;

$MSG = retornar_contador_visitas();	
echo $MSG;

$MSG = '<p align="justify">O Bit Curriculos é um sistema para internet em recursos humanos, com foco em recrutamento on-line. Atualmente administramos a mais bem organizada base de currículos do país, 
	oferecendo às empresas o mais completo sistema de recrutamento on-line. Cadastre seu currículo para estar disponível para diversas empresas. Cadastre sua empresa para buscar profissionais.</p>';	
echo $MSG;

$MSG = '<p align="justify">O nosso site oferece serviços para profissionais e empresas serem localizados em todo o Brasil para divulgar, prestar serviços ou vender seus produtos,
			oferece várias provas de concursos para você fazer treinamento e testar seus conhecimentos. Temos diversas apostilas para download, livros e treinamentos para você se preparar melhor.</p>';	
echo $MSG;

echo $DIV_;

echo $DIV_;

echo $BODY_;
	
echo $HTML_;