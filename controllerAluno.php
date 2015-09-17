<?php

require_once('modelben.php');
require_once('modeldao.php');
require_once('modeldaoAluno.php');
class controllerAluno extends modelben{
	public function tela(modelben $o){
		require_once('index.php');
	}
	public function tela1(modelben $o){
		require_once('index.php');
	}
	public function telaAluno(modelben $o){
		require_once('cadastroAluno.php');
	}
	
	public function listaAluno(modelben $o){
		$odao=new modeldaoAluno();
		$listaAluno=$odao->listaAluno($o);
		require_once('listaAluno.php');
	}
	
	public function delAluno(modelben $o){
		$this->set('funcod',$_GET['funcod']);
		$odao=new modeldaoAluno();
		$odao->delAluno($o);
		$this->listaAluno($o);
	}
	public function updateAluno(modelben $o){
		$this->set('funcod',$_GET['funcod']);
		$odao=new modeldaoAluno();
		$listaAluno=$odao->especificoAluno($o);
		require_once('cadastroAluno.php');
	}
	public function calcAluno(modelben $o){
		// echo "AQUI1";
		$this->set('funcod',@$_POST['funcod']);
		$this->set('sexo',@$_POST['aluno-sexo']);
		$this->set('funtel',@$_POST['funtel']);
		$this->set('funend',@$_POST['aluno-endereco']);
		$this->set('funnome',@$_POST['aluno-nome']);
		$this->set('funfuncao',@$_POST['funfuncao']);
		$d=explode('/',@$_POST['aluno-dataNasc']);
		$data="$d[2]-$d[1]-$d[0]";
		$this->set('funadm',$data);


		// echo "AQUI2";
		$odao= new modeldaoAluno();
		//echo "AQUI3";	
		$odao->salvarAluno($o);
		$sit="DADOS SALVOS COM SUCESSO!!!";
		$this->telaAluno($o);
		
	}
	

}
?>