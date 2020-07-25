<?php
class Pessoa implements JsonSerializable
{
    private $id;
    private $email;
    private $senha;

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