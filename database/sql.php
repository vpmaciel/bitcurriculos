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
        

function inserir($tabela, $dados) : bool {
    
    if(!is_array($dados) && !is_string($tabela)) {
        header('Location: ..\view\erro.php?erro=TDI');
    }

    global $pdo;
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
        $stmt = $pdo->exec("INSERT INTO $tabela ($campos) VALUES ($valores);");            
        
        if ($stmt->execute()) {
            header("..\view\sucesso.php");
        } else {
            header("..\view\erro.php:erro=OPN");
        }
        
        
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
        $stm = $pdo->prepare("UPDATE $tabela SET $campos WHERE ($condicao);");            
    
        $pdo->commit();
    
    } catch(Exception $e) {
    
        $pdo->rollback();
        throw $e;
    }
}

function selecionar($tabela, $array_condicao) : array {
    global $pdo;
    
    if(empty($array_condicao) || empty($tabela)) {
        throw new Exception('Parametros vazios');
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
        echo "<br>" . "SELECT * FROM $tabela;";
        $stmt = $pdo->prepare("SELECT * FROM $tabela;");
        echo "<br>T:" . "$tamanho";
        if ($tamanho > 0) {
            $stmt = $pdo->prepare("SELECT * FROM $tabela WHERE ($char_condicao);");
            echo "<br>" . "SELECT * FROM $tabela WHERE ($char_condicao);";
        }

        if (!$stmt->execute()) {
            throw new Exception('Não executou stmt !');
        }
                
        $array_modelos = array();
        
        while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
        
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