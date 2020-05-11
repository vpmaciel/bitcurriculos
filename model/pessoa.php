<?php
class PessoaModel implements JsonSerializable
{
    private $usuario:
    private $nome;
    private $ultimo_salario;
    private $data_nascimento;
    private $idade;
    private $sexo;
    private $escolaridade;
    private $estado_civil;
    private $nacionalidade;
    private $celular_numero;
    private $possui_filhos;
    private $possui_deficiencia;
    private $pais;
    private $estado;
    private $cidade;
    private $bairro;
    private $logradouro;
    private $complemento;
    private $cep;
    private $cnh;
    private $empregado_atualmente;
    private $disponivel_viagens;
    private $trabalha_outras_cidades;
    private $trabalha_home_office;
    private $possui_carro;
    private $possui_moto;
    private $trabalha_exterior;

    public function getDados(){
		return get_object_vars($this);		
	}

	public function setDados($dados){
		foreach ($dados as $chave => $valor) {
			$this->$chave = $valor;
		}
	}

	public function jsonSerialize()
    {
        return get_object_vars($this);
    }    
}
/*
$person = new Person();
$dados = array('id' => 1, 'nome' => 'Vicente Paulo Maciel');
$person->setDados($dados);

$someJSON = '[{"id":1,"nome":"male"}]';

// Convert JSON string to Array
$someArray = json_decode($someJSON, true);
print_r($someArray);        // Dump all data of the Array
echo $someArray[0]["nome"]; // Access Array data

// Convert JSON string to Object
$person = json_decode($someJSON);

//echo json_encode($person);
//var_dump($person->getDados());
print_r($person);      // Dump all data of the Object
echo $person[0]->nome; // Access Object data
echo "<br>";
*/