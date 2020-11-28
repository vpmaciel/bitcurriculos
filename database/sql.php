<?php
defined('BASEPATH') || exit('No direct script access allowed');
class SQL {

    private $pdo;

    public function __construct() 
    {
        $dsn = "mysql:host=localhost;dbname=db_curriculo";
        $usuario = "root";
        $senha = "";
        $this->pdo = new PDO($dsn, $usuario, $senha);        
    }

    public static function inserir($dados, $tabela) : bool {
        
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

            $this->pdo->beginTransaction();
            $stm = $this->pdo->exec("INSERT INTO $tabela ($campos) VALUES ($valores);");            
        
            $this->pdo->commit();
        
        } catch(Exception $e) {
        
            $this->pdo->rollback();
            throw $e;
        }
    }

    public static function atualizar($dados, $tabela, $condicao) {
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

            $this->pdo->beginTransaction();
            $stm = $this->pdo->exec("UPDATE $tabela SET $campos WHERE ($condicao);");            
        
            $this->pdo->commit();
        
        } catch(Exception $e) {
        
            $this->pdo->rollback();
            throw $e;
        }
    }

    public static function selecionar($dados, $tabela, $condicao) : array {
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

            $stmt = $this->$pdo->prepare("SELECT * FROM $tabela;");
            if ($tamanho > 0) {
                $stmt = $this->$pdo->prepare("SELECT * FROM $tabela WHERE ($condicao);");
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
    public static function excluir($tabela, $condicao) : bool {
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

            $this->pdo->beginTransaction();
            $stm = $this->pdo->exec("UPDATE $tabela SET $campos WHERE ($condicao);");            
        
            $this->pdo->commit();

            return TRUE;
        
        } catch(Exception $e) {
        
            $this->pdo->rollback();
            throw $e;
        }
    }
}