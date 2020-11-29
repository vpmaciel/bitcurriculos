<?php
function retornar_cotacao_dolar() {
    
    $data = date('Y-m-d', strtotime('-3 days'));

    $data = explode("-",$data);
    list($ano,$mes,$dia) = $data;
    $data_str = $mes . '-'. $dia . '-' . $ano;
    $ch = curl_init("https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao='" . "$data_str" . "'&format=json");
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
    
        echo "<p align=\"justify\">Dólar compra: R$ " . number_format($valores["cotacaoCompra"], 2, ',', '');
        echo ('
        ');
        echo ". Dolar venda: R$". number_format($valores["cotacaoVenda"], 2, ',', '');
        echo ('
        ');
        $dataHoraCotacao = new DateTime($valores["dataHoraCotacao"]);
        echo ". Data e hora da cotação: ". $dataHoraCotacao->format('d-m-Y H:i');
        echo "</p>";
    }
    curl_close($ch);        

}
