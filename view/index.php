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
echo $H1 . 'DADOS PESSOAIS' . $H1_;

$MSG = '<h1>Empregos para profissionais de TI</h1>
	<p align="justify">O BitCurriculos é um sistema para Internet em Recursos Humanos, com foco em recrutamento on-line. Atualmente administramos a mais bem organizada base de currículos do país, 
	oferecendo às empresas o mais completo sistema de recrutamento on-line. Perseverança, dinamismo e vontade de inovar são características de nossa equipe, numa empresa sólida, com grandes desafios 
	pela frente e foco em metas e resultados.</p><br>
	<p align="justify">Faça parte de nosso time, contribuindo com seu talento profissional. Cadastre seu currículo para estar disponível para diversas empresas. Um bom curriculum, bem apresentável e 
	redigido, pode não garantir um emprego mas é, sem sombra de dúvidas, um passo importantíssimo para alcançá-lo. Cadastre sua empresa para buscar profissionais. Os profissionais de recursos humanos 
	não podem deixar de compreender a complexidade psicossocial das pessoas, ainda que o seu papel principal continue a ser o de criar valor e gerar resultados.</p>';

echo $MSG;

echo $DIV_;

echo $BODY_;
	
echo $HTML_;
?>