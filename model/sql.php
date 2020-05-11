<?php
class SQL {

    private $pdo;

    public function __construct() 
    {
        $dsn = "mysql:host=localhost;dbname=mydb";
        $usuario = "user12";
        $senha = "12user"
        $this->pdo = new PDO($dsn, $usuario, $senha);        
    }

    public function inserir($dados){
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
                
                $campos .= $chave;
                $valores .= $valor;
                
                if(is_string($valor){
                    $valor = "'" . $valor . "'";
                }

                if($contador < $tamanho) {
                    $campos .= ',';
                    $valores .= ',';
                }
            }



            $this->pdo->beginTransaction();
            $stm = $this->pdo->exec("INSERT INTO countries($campos) VALUES ($valores)");            
        
            $this->pdo->commit();
        
        } catch(Exception $e) {
        
            $this->pdo->rollback();
            throw $e;
        }
    }
}