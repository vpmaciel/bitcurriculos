<?php
function retornar_contador_visitas() {
    $arquivo = $_SERVER['DOCUMENT_ROOT'].'/bitcurriculos/file/contador_de_visitas.txt';

    $linha = file($arquivo); 
    $visitas = $linha[0]; 
    $visitas += 1;
    $cf=fopen($arquivo,"w"); 
    fputs($cf,"$visitas"); 
    fclose($cf);
    $MSG = "<marquee>Este site teve até hoje ". $visitas . " acessos.</p>". "</marquee>";
    
    return $MSG;
}

