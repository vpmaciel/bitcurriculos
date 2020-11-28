<?php

$dsn = "mysql:host=localhost;dbname=db_bitcurriculo";
$usuario = "root";
$senha = "";
$pdo = new PDO($dsn, $usuario, $senha);        

function inserir($dados, $tabela) : bool {
    
    if(!is_array($dados) && !is_string($tabela)) {
        header('Location: ..\view\erro.php?e=TDI');
    }
    
    $campos = '';
    $valores = '';
    $tamanho = count ($dados);
    $contador = 1;
    if($tamanho == 0) {
        return FALSE;
    }   

    try {

        foreach($dados as $chave => $valor) {
            
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
        $stm = $pdo->exec("INSERT INTO $tabela ($campos) VALUES ($valores);");            
    
        $pdo->commit();
    
    } catch(Exception $e) {
    
        $pdo->rollback();
        throw $e;
    }
}

function atualizar($dados, $tabela, $condicao) : bool {
    if(!is_array($dados) && !is_array($condicao) && !is_string($tabela)) {
        header('Location: ..\view\erro.php?e=TDI');
    }
    $campos = '';
    $tamanho = count ($dados);
    $contador = 1;
    if($tamanho == 0)
    {
        return FALSE;
    }   

    try {

        foreach($dados as $chave => $valor) {
            
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
        $stm = $pdo->exec("UPDATE $tabela SET $campos WHERE ($condicao);");            
    
        $pdo->commit();
    
    } catch(Exception $e) {
    
        $pdo->rollback();
        throw $e;
    }
}

function selecionar($tabela, $array_condicao) : array {
    global $pdo;
    echo '<br>'. gettype($tabela);
    echo '<br>'. gettype($array_condicao);
    
    if(empty($array_condicao) || empty($tabela)) {
        throw new Exception('Parametros vazios');
    }
    $char_condicao = '';
    $tamanho = count ($array_condicao);
    $contador = 1;
    if($tamanho == 0)
    {
        return FALSE;
    }   

    try {
        $contador = 1;
        $tamanho = count ($array_condicao);
        foreach($array_condicao as $chave => $valor) {
            
            $valor = removerAcentos($valor);
            $char_condicao .= $chave . "=" . "'" . $valor . "'";               

            if($contador < $tamanho) {
                $char_condicao .= ',';
            }
            $contador++;
        }
        echo "<br>" . "SELECT * FROM $tabela;";
        $stmt = $pdo->prepare("SELECT * FROM $tabela;");
        echo "<br>T:" . "$tamanho";
        if ($tamanho > 0) {
            $stmt = $pdo->prepare("SELECT * FROM $tabela WHERE ($char_condicao);");
            echo "<br>" . "SELECT * FROM $tabela WHERE ($char_condicao);";
        }
        
        $consulta = $stmt->execute();
        $array_modelos = array();
        
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
        
            $array_modelo = array();

            foreach($dados as $chave => $valor) {
                    $array_modelo["'$chave'"] = $linha["'$chave'"];                     
            }

                array_push($array_modelos, $array_modelo);                
        }          
        return $array_modelos;
    
    } catch(Exception $e) {           
        
        return array();
    }
}

function excluir($tabela, $condicao) : bool {
    if(!is_array($condicao) && !is_array($tabela)) {
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
        $stm = $pdo->exec("UPDATE $tabela SET $campos WHERE ($condicao);");            
    
        $pdo->commit();

        return TRUE;
    
    } catch(Exception $e) {
    
        $pdo->rollback();
        throw $e;
    }
}