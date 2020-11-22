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
echo $H1 . 'Bit Curriculos' . $H1_;

$MSG = '<p align="justify">O Bit Curriculos é um sistema para internet em recursos humanos, com foco em recrutamento on-line. Atualmente administramos a mais bem organizada base de currículos do país, 
	oferecendo às empresas o mais completo sistema de recrutamento on-line. Cadastre seu currículo para estar disponível para diversas empresas. Cadastre sua empresa para buscar profissionais.</p>';
	
echo $MSG;

$ch = curl_init("https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao='08-14-2020'&format=json");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$res_curl = curl_exec($ch);
if(curl_error($ch)) {
    echo curl_error($ch);
} else {
	$resultado = json_decode($res_curl, true);
	$valores = $resultado["value"][0];
	//Agora será possível recuperar a informação da cotação do dólar:	

	echo "<br> Dólar cotação de compra: R$ " . number_format($valores["cotacaoCompra"], 2, ',', '');
	echo ('
	');
	echo "<br>Dólar cotação de venda: R$". number_format($valores["cotacaoVenda"], 2, ',', '');
	echo ('
	');
	echo "<br>Dólar data e hora da cotação: ".$valores["dataHoraCotacao"]. date_format($valores["dataHoraCotacao"], 'd/m/Y H:i:s');;
}
curl_close($ch);

echo $DIV_;

echo $DIV_;

echo $BODY_;
	
echo $HTML_;
?>