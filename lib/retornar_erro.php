<?php
function retornar_erro() : array {
    $VALOR = array(            
        'SNI' => 'Sessão não iniciada ! Faça login !',
        'OPN' => 'Operação não realizada !',        
        'BDNC' => 'Banco de dados não conectado !',
        'PNE' => 'Página não encontrada !',
        'EG' => 'Erro geral !',
        'EP' => 'Você não ter permissão para acessar esta página !',
        'TDI' => 'Tipos de dados imcompativeis !',
        'EEE' => 'Erro de envio de e-mail !',
        'UNL' => 'Usuário não está logado faça login !',
    );

    return $VALOR;
}
$array_erro = retornar_erro();