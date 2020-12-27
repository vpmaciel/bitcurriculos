<?php
ini_set('display_errors', TRUE);
error_reporting(E_ALL);

require_once '../lib/biblioteca.php';

$dsn = "mysql:host=localhost;dbname=bitcurriculos";
$usuario = "root";
$senha = "";
$pdo = NULL;
try {
    $pdo = new PDO($dsn, $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $pdoException) {
    throw new PDOException($pdoException);
    $pdo->rollback();
    $retorno = FALSE;
    echo "Erro na conexão:" . $pdoException->getMessage();
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
            
            if (!is_numeric($valor)) {
                $valores .= "'".  mb_strtoupper( $valor, 'UTF-8') . "'";
            } if (strstr($valor, '@') || strstr($valor, '.')) {
                $valores .= "'".  mb_strtolower( $valor, 'UTF-8') . "'";
            } else {
                $valores .= $valor;
            }
            
            $campos .= $chave;

            if($contador < $tamanho) {
                $campos .= ',';
                $valores .= ',';
            }
            $contador++;
        }
        //exit("INSERT INTO $char_tabela ($campos) VALUES ($valores);");
        $pdo->beginTransaction();
        $stmt = $pdo->prepare("INSERT INTO $char_tabela ($campos) VALUES ($valores);");        
        $stmt->execute();        
        $pdo->commit();
        return TRUE;
    
    } catch(PDOException $pdoException) {
        throw new PDOException($pdoException);    
        echo "Erro na inserção:" . $pdoException->getMessage();
        $pdo->rollback();
        return FALSE;
    }

    return FALSE;
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
    $retorno = FALSE;

    if($tamanho == 0)
    {
        return FALSE;
    }   

    try {
        foreach($array_model as $chave => $valor) {
            if (!is_numeric($valor)) {
                $valor = "'" . mb_strtoupper( $valor, 'UTF-8') . "'";
            } else if ((mb_strpos(mb_strtolower( $valor, 'UTF-8'), '.') !== false) || (mb_strpos(mb_strtolower( $valor, 'UTF-8'), 'www') !== false) || (mb_strpos(mb_strtolower( $valor, 'UTF-8'), 'http') !== false)) {
                $valor = "'".  mb_strtolower( $valor, 'UTF-8') . "'";
            }            
            
            $campos .= $chave . "=". $valor;               

            if($contador < $tamanho) {
                $campos .= ',';
            }                
            $contador++;
        }

        $contador = 1;
        $tamanho = count ($array_condicao);
        foreach($array_condicao as $chave => $valor) {
            $valor = "'" . mb_strtoupper( $valor, 'UTF-8') . "'";
            if (!is_numeric($valor)) {                
                $valor = "'" . mb_strtoupper( $valor, 'UTF-8') . "'";
            } else if ((mb_strpos(strtolower( $valor), '.') !== false) || (mb_strpos(strtolower( $valor), 'www') !== false) || (mb_strpos(strtolower( $valor), 'http') !== false)) {
                $valor .= "'".  mb_strtolower( $valor, 'UTF-8') . "'";
            }
            
            $char_condicao .= $chave . "=". $valor;               

            if($contador < $tamanho) {
                $char_condicao .= ' AND ';
            }
            $contador++;
        }

        $pdo->beginTransaction();
        die("UPDATE $char_tabela SET $campos WHERE ($char_condicao);");
        $stmt = $pdo->prepare("UPDATE $char_tabela SET $campos WHERE ($char_condicao);");            
        $stmt->execute(); 
        $pdo->commit();    
        return TRUE;
    } catch(PDOException $pdoException) {
        throw new PDOException($pdoException);    
        echo "Erro na atualização:" . $pdoException->getMessage();
        $pdo->rollback();
        return FALSE;
    }
    return FALSE;
}

function selecionar($char_tabela, $array_condicao) {
    global $pdo;
    
    if(!is_array($array_condicao) || !is_string($char_tabela)) {
        throw new Exception('Tipos de parametros imcompatíveis !');
        return NULL;
    }

    $char_condicao = '';
    $tamanho_array_condicao = count ($array_condicao);
    $contador = 1;       

    try {
        foreach($array_condicao as $chave => $valor) {
            if (!is_numeric($valor)) {
                $valor = "'" . mb_strtoupper( $valor, 'UTF-8') . "'";                
            } else if ((mb_strpos(mb_strtolower( $valor, 'UTF-8'), '.') !== false) || (mb_strpos(mb_strtolower( $valor, 'UTF-8'), 'www') !== false) || (mb_strpos(mb_strtolower( $valor, 'UTF-8'), 'http') !== false)) {
                $valor .= "'".  mb_strtolower( $valor, 'UTF-8') . "'";
            }            
            $char_condicao .= $chave . "=" . $valor;                           

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
            return NULL;
        }
        $pdo->beginTransaction();        
        $linhas = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $pdo->commit();
        
        return json_encode($linhas);;
    
    } catch(PDOException $pdoException) {           
        throw new PDOException($pdoException);    
        echo "Erro na seleção:" . $pdoException->getMessage();
        $pdo->rollback();
        return NULL;
    }
}

function excluir($char_tabela, $array_condicao) : bool {
    global $pdo;
    if(!is_array($array_condicao) && !is_string($char_tabela)) {
        throw new Exception('Tipos de parametros imcompatíveis !');        
        return FALSE;
    }
    $campos = '';
    $char_condicao = '';
    $tamanho = count ($array_condicao);
    $contador = 1;
    if($tamanho == 0 || !isset($array_condicao)) {
        return FALSE;
    }   
    
    try {
        $contador = 1;
        $tamanho = count ($array_condicao);
        foreach($array_condicao as $chave => $valor) {               
            if (!is_numeric($valor)) {
                $valor = "'" . mb_strtoupper( $valor, 'UTF-8') . "'";                
            } else if ((mb_strpos(mb_strtolower( $valor, 'UTF-8'), '.') !== false) || (mb_strpos(mb_strtolower( $valor, 'UTF-8'), 'www') !== false) || (mb_strpos(mb_strtolower( $valor, 'UTF-8'), 'http') !== false)) {
                $valores .= "'".  mb_strtolower( $valor, 'UTF-8') . "'";
            }
            
            $char_condicao .= $chave . "=". $valor;               

            if($contador < $tamanho) {
                $char_condicao .= ' AND ';
            }
            $contador++;
        }

        $pdo->beginTransaction();
        //exit("DELETE FROM $char_tabela WHERE ($char_condicao);");
        $stmt = $pdo->prepare("DELETE FROM $char_tabela WHERE ($char_condicao);");
        $retorno = ($stmt->execute()) ? TRUE : FALSE; 
        $pdo->commit();

        return TRUE;
    
    } catch(PDOException $pdoException) {
        throw new PDOException($pdoException);    
        echo "Erro na exclusão:" . $pdoException->getMessage();
        $pdo->rollback();
        return FALSE;
    }
}

function retornar_numero_registros($char_tabela, $array_condicao) : int {
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

            if (!is_numeric($valor)) {
                $valor = "'" . mb_strtoupper( $valor, 'UTF-8') . "'";                
            } else if ((mb_strpos(mb_strtolower( $valor, 'UTF-8'), '.') !== false) || (mb_strpos(mb_strtolower( $valor, 'UTF-8'), 'www') !== false) || (mb_strpos(mb_strtolower( $valor, 'UTF-8'), 'http') !== false)) {
                $valor .= "'".  mb_strtolower( $valor, 'UTF-8') . "'";
            }
               
            $char_condicao .= $chave . "=" . $valor;               

            if($contador < $tamanho_array_condicao) {
                $char_condicao .= ' AND ';
            }
            $contador++;
        }        
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM $char_tabela WHERE ($char_condicao);");
        if (!$stmt->execute()) {
            return 0;
        }
        $pdo->beginTransaction();
        $numero_registros = $stmt->fetchColumn(); 
        $pdo->commit();       
        return $numero_registros;    
    } catch(PDOException $pdoException) {           
        throw new PDOException($pdoException);    
        echo "Erro na inserção:" . $pdoException->getMessage();
        $pdo->rollback();
        return 0;
    }
}