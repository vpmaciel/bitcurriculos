<?php
function retornar_contador_visitas() {
    $arquivo = $_SERVER['DOCUMENT_ROOT'].'/bitcurriculos/file/contador_de_visitas.txt';

    $handle = fopen($arquivo, 'r+');
    $data = fread($handle, 512);
    $contador = intval($data) + 1;
    
    $MSG = "<p align=\"justify\">Esta página teve ". $contador . " acessos.</p>";
    
    fwrite($handle, $contador);
    
    fclose($handle);

    return $MSG;
}

