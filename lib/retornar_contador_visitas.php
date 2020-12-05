<?php
function retonar_contador_vistas() : string{
    $arquivo = "contador.txt";

    $handle = fopen($arquivo, 'r+');
    $data = fread($handle, 512);
    $contador = $data + 1;
    
    $MSG = "<p align=\"justify\">Esta página teve ". $contador . " acessos.</p>";
    
    fwrite($handle, $contador);
    
    fclose($handle);

    return $MSG;
}

