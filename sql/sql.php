<?php
require_once '../lib/biblioteca.php';

$dsn = "mysql:host=localhost;dbname=bitcurriculos";
$usuario = "root";
$senha = "";
$pdo = NULL;
try {
    $pdo = new PDO($dsn, $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    throw new PDOException($e);
    echo "Erro na conexão:" . $e->getMessage();
}
        

function inserir($char_tabela, $array_model) : bool {
    
    if(!is_array($array_model) || !is_string($char_tabela)) {
        throw new Exception('Tipos de parametros imcompatíveis !');
    }

    global $pdo;
    $campos = '';
    $valores = '';
    $tamanho = count ($array_model);
    $contador = 1;
    $retorno = FALSE;

    try {

        foreach($array_model as $chave => $valor) {
            
            $valores .= "'". $valor . "'";            
            $campos .= $chave;

            if($contador < $tamanho) {
                $campos .= ',';
                $valores .= ',';
            }
            $contador++;
        }

        $pdo->beginTransaction();
        $stmt = $pdo->prepare("INSERT INTO $char_tabela ($campos) VALUES ($valores);");
        
        $retorno = ($stmt->execute()) ? TRUE : FALSE;        
        
        $pdo->commit();
    
    } catch(PDOException $e) {
        throw new PDOException($e);
        $pdo->rollback();
        $retorno = FALSE;
    }

    return $retorno;
}

function atualizar($char_tabela, $array_model, $array_condicao) : bool {
    if(!is_array($array_model) || !is_array($array_condicao) || !is_string($char_tabela)) {
        throw new Exception('Tipos de parametros imcompatíveis !');
        return FALSE;
    }
    global $pdo;
    $campos = '';
    $tamanho = count ($array_model);
    $contador = 1;
    $char_condicao = '';
    if($tamanho == 0)
    {
        return FALSE;
    }   

    try {

        foreach($array_model as $chave => $valor) {
            
            $valor = "'$valor'";
            
            $campos .= $chave . "=". $valor;               

            if($contador < $tamanho) {
                $campos .= ',';
            }                
            $contador++;
        }

        $contador = 1;
        $tamanho = count ($array_condicao);
        foreach($array_condicao as $chave => $valor) {
            $valor = "'$valor'";
            
            $char_condicao .= $chave . "=". $valor;               

            if($contador < $tamanho) {
                $char_condicao .= ' AND ';
            }
            $contador++;
        }

        $pdo->beginTransaction();
        $stm = $pdo->prepare("UPDATE $char_tabela SET $campos WHERE ($char_condicao);");            
    
        $pdo->commit();
    
    } catch(PDOException $e) {
        throw new PDOException($e);
        $pdo->rollback();
        throw $e;
    }
    return TRUE;
}

function selecionar($char_tabela, $array_condicao) {
    global $pdo;
    
    if(!is_array($array_condicao) || !is_string($char_tabela)) {
        throw new Exception('Tipos de parametros imcompatíveis !');
        return FALSE;
    }

    $char_condicao = '';
    $tamanho_array_condicao = count ($array_condicao);
    $contador = 1;       

    try {
        foreach($array_condicao as $chave => $valor) {
            
            $char_condicao .= $chave . "=" . "'" . $valor . "'";               

            if($contador < $tamanho_array_condicao) {
                $char_condicao .= ' AND ';
            }
            $contador++;
        }
        
        
        $stmt = NULL;
        
        if (!empty($array_condicao)) {
            $stmt = $pdo->prepare("SELECT * FROM $char_tabela WHERE ($char_condicao);");
            
        } else {
            $stmt = $pdo->prepare("SELECT * FROM $char_tabela;");
        }

        if (!$stmt->execute()) {
            throw new Exception('Não executou !');            
            return FALSE;
        }
        
        $linhas = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return json_encode($linhas);;
    
    } catch(PDOException $e) {           
        throw new PDOException($e);
    }
}

function excluir($char_tabela, $array_condicao) : bool {
    if(!is_array($array_condicao) && !is_array($char_tabela)) {
        throw new Exception('Tipos de parametros imcompatíveis !');        
        return FALSE;
    }
    $campos = '';
    $tamanho = count ($array_condicao);
    $contador = 1;
    if($tamanho == 0 || !isset($array_condicao)) {
        return FALSE;
    }   
    
    try {
        $contador = 1;
        $tamanho = count ($array_condicao);
        foreach($array_condicao as $chave => $valor) {

            $array_condicao .= $chave . "=". $valor;               

            if($contador < $tamanho) {
                $array_condicao .= ' AND ';
            }
            $contador++;
        }

        $pdo->beginTransaction();
        $stmt = $pdo->prepare("DELETE FROM $char_tabela WHERE ($array_condicao);");            
        
        $pdo->commit();

        return TRUE;
    
    } catch(PDOException $e) {
    
        $pdo->rollback();
        throw new PDOException($e);
    }
}

function numero_registros($char_tabela, $array_condicao) : int {
    global $pdo;
    
    if(!is_string($char_tabela) || !is_array($array_condicao)) {
        throw new Exception('Tipos de parametros imcompatíveis !');        
        return 0;
    }

    $char_condicao = '';
    $tamanho_array_condicao = count ($array_condicao);        

    try {
        $contador = 1;
        foreach($array_condicao as $chave => $valor) {            
               
            $char_condicao .= $chave . "=" . "'" . $valor . "'";               

            if($contador < $tamanho_array_condicao) {
                $char_condicao .= ' AND ';
            }
            $contador++;
        }
        
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM $char_tabela WHERE ($char_condicao);");
        if (!$stmt->execute()) {
            return 0;
        }
        
        return $stmt->fetchColumn(); 
    
    } catch(PDOException $e) {           
        throw new PDOException($e);
        return 0;
    }
}