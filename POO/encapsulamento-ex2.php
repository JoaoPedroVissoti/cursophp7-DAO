<?php 

class Pessoa{

	public $nome = "João Pedro";
	protected $idade = 22;
	private $senha = "123456";

	public function verDados(){
		echo $this->nome . "<br/>";
		echo $this->idade . "<br/>";
		echo $this->senha . "<br/>";
	}

}

class Programador extends Pessoa	{

}


$objeto = new Programador();
//echo $objeto->nome . "<br/>";

$objeto->verDados();


?>
