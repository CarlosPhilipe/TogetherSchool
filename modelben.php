<?php
abstract class modelben{

	private $idFun;
	private $matriculaFun;
	private $formacaoFun;
	private $cargoFun;
	private $cpfFun;
	private $sexo;

	private $funcod;
	private $funtel;
	private $funend;
	private $funnome;
	private $funadm;
	private $funfuncao;
	//-------------------
	public function set($p,$v){
		$this->$p=$v;
	}
	public function get($p){
		return $this->$p;
	}
}
?>