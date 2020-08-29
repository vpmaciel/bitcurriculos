<?php
class SQL {

    private $pdo;

    public function __construct() 
    {
        $dsn = "mysql:host=localhost;dbname=db_curriculo";
        $usuario = "root";
        $senha = "";
        $this->pdo = new PDO($dsn, $usuario, $senha);        
    }

    public static function inserir($dados, $tabela){
        $campos = '';
        $valores = '';
        $tamanho = count ($dados);
        $contador = 1;
        if($tamanho == 0)
        {
            return FALSE;
        }   

        try {

            foreach($dados as $chave => $valor){
                
                $valor = "'$valor'";
                
                $campos .= $chave;
                $valores .= $valor;

                if($contador < $tamanho) {
                    $campos .= ',';
                    $valores .= ',';
                }
                $contador++;
            }
            echo("INSERT INTO $tabela ($campos) VALUES ($valores)");
            return;
            $this->pdo->beginTransaction();
            $stm = $this->pdo->exec("INSERT INTO $tabela ($campos) VALUES ($valores);");            
        
            $this->pdo->commit();
        
        } catch(Exception $e) {
        
            $this->pdo->rollback();
            throw $e;
        }
    }

    public static function atualizar($dados, $tabela, $condicao){
        $campos = '';
        $valores = '';
        $onde = '';
        $tamanho = count ($dados);
        $contador = 1;
        if($tamanho == 0)
        {
            return FALSE;
        }   

        try {

            foreach($dados as $chave => $valor){
               
               $valor = "'$valor'";
               
                $campos .= $chave . "=". $valor;               

                if($contador < $tamanho) {
                    $campos .= ',';
                }                
                $contador++;
            }

            $contador = 1;
            $tamanho = count ($condicao);
            foreach($condicao as $chave => $valor){
                
               $valor = "'$valor'";
                $onde .= $chave . "=". $valor;               

                if($contador < $tamanho) {
                    $onde .= ',';
                }
                $contador++;
            }

            echo("UPDATE $tabela SET $campos WHERE ($onde)");
            return;
            $this->pdo->beginTransaction();
            $stm = $this->pdo->exec("UPDATE $tabela SET $campos WHERE ($onde);");            
        
            $this->pdo->commit();
        
        } catch(Exception $e) {
        
            $this->pdo->rollback();
            throw $e;
        }
    }
}