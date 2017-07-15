<?php

class Moeda {

	// Atributos da Classe
	private $valor;
	private $nota;
	private $res;

	// Método Mágico Construtor da Classe, Ao Fazer Uma Instância da Classe Deve Ser Passado o Valor e a  Nota como Argumento
	function __construct($valor, $nota) {
		
		$this->valor = (float) $valor;
		$this->nota = (int) $nota;
	}

	// Método da Classe, retorna a quantidade de notas para o valor informado
	public function getResult() {

		return $this->res = $this->valor / $this->nota;

	}
}