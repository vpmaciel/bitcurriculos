<?php

$dsn = "mysql:host=localhost;dbname=db_bitcurriculo";
$usuario = "root";
$senha = "";
try {
    $pdo = new PDO($dsn, $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $erro) {
    echo "Erro na conexão:" . $erro->getMessage();
}
        

function inserir($char_tabela, $array_model) : bool {
    
    if(!is_array($array_model) || !is_string($char_tabela)) {
        return FALSE;
    }

    global $pdo;
    $campos = '';
    $valores = '';
    $tamanho = count ($array_model);
    $contador = 1;
    $retorno = FALSE;

    try {

        foreach($array_model as $chave => $valor) {
            
            $valor = "'$valor'";            
            $campos .= $chave;
            $valores .= removerAcentos($valor);

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
    
    } catch(Exception $e) {
    
        $pdo->rollback();
        $retorno = FALSE;
    }

    return $retorno;
}

function atualizar($char_tabela, $array_model, $condicao) : bool {
    if(!is_array($array_model) || !is_array($condicao) || !is_string($char_tabela)) {
        header('Location: ..\view\erro.php?erro=TDI');
    }
    $campos = '';
    $tamanho = count ($array_model);
    $contador = 1;
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
        $tamanho = count ($condicao);
        foreach($condicao as $chave => $valor) {
            
            $valor = "'$removerAcentos($valor)'";
            $condicao .= $chave . "=". $valor;               

            if($contador < $tamanho) {
                $condicao .= ',';
            }
            $contador++;
        }

        $pdo->beginTransaction();
        $stm = $pdo->prepare("UPDATE $char_tabela SET $campos WHERE ($condicao);");            
    
        $pdo->commit();
    
    } catch(Exception $e) {
    
        $pdo->rollback();
        throw $e;
    }
}

function selecionar($char_tabela, $array_condicao) : array {
    global $pdo;
    
    if(!is_array($array_condicao) || !is_char($char_tabela)) {
        return FALSE;
    }

    $char_condicao = '';
    $tamanho_array_condicao = count ($array_condicao);
    $contador = 1;       

    try {
        foreach($array_condicao as $chave => $valor) {
            
            $valor = removerAcentos($valor);
            $char_condicao .= $chave . "=" . "'" . $valor . "'";               

            if($contador < $tamanho) {
                $char_condicao .= ',';
            }
            $contador++;
        }
        
        $stmt = $pdo->prepare("SELECT * FROM $char_tabela;");
        
        if (!empty($array_condicao)) {
            $stmt = $pdo->prepare("SELECT * FROM $char_tabela WHERE ($char_condicao);");
            
        }

        if (!$stmt->execute()) {
            return FALSE;
        }
                
        $array_modelos = array();
        
        while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
        
            $array_modelo = array();

            foreach($array_model as $chave => $valor) {
                    $array_modelo["'$chave'"] = $linha["'$chave'"];                     
            }

                array_push($array_modelos, $array_modelo);
        }          
        return $array_modelos;
    
    } catch(Exception $e) {           
        
        return array();
    }
}

function excluir($char_tabela, $condicao) : bool {
    if(!is_array($condicao) && !is_array($char_tabela)) {
        header('Location: ..\view\erro.php?e=TDI');
    }
    $campos = '';
    $tamanho = count ($condicao);
    $contador = 1;
    if($tamanho == 0 || !isset($condicao)) {
        return FALSE;
    }   
    
    try {
        $contador = 1;
        $tamanho = count ($condicao);
        foreach($condicao as $chave => $valor) {
            
            $valor = "'$removerAcentos($valor)'";
            $condicao .= $chave . "=". $valor;               

            if($contador < $tamanho) {
                $condicao .= ',';
            }
            $contador++;
        }

        $pdo->beginTransaction();
        $stmt = $pdo->prepare("UPDATE $char_tabela SET $campos WHERE ($condicao);");            
    
        $pdo->commit();

        return TRUE;
    
    } catch(Exception $e) {
    
        $pdo->rollback();
        throw $e;
    }
}

function procurar($char_tabela, $array_condicao) : bool {
    global $pdo;
    
    if(!is_array($array_condicao) || !is_string($char_tabela)) {
        return FALSE;
    }

    $char_condicao = '';
    $tamanho_array_condicao = count ($array_condicao);
           

    try {
        $contador = 1;
        foreach($array_condicao as $chave => $valor) {
            
            $valor = removerAcentos($valor);
            $char_condicao .= $chave . "=" . "'" . $valor . "'";               

            if($contador < $tamanho_array_condicao) {
                $char_condicao .= ',';
            }
            $contador++;
        }
        
        $stmt = $pdo->prepare("SELECT * FROM $char_tabela WHERE ($char_condicao);");
            
        if (!$stmt->execute()) {
            return FALSE;
        }
                
        $array_modelos = array();
        
        return $stmt->fetch(PDO::FETCH_ASSOC);
    
    } catch(Exception $e) {           
        
        return FALSE;
    }
}
