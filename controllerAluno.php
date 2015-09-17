<?php
require_once('modelben.php');
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
		require_once('index.php');
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
		$this->set('funcod',@$_POST['funcod']);
		$this->set('funtel',@$_POST['funtel']);
		$this->set('funend',@$_POST['funend']);
		$this->set('funnome',@$_POST['funnome']);
		$this->set('funfuncao',@$_POST['funfuncao']);
		$d=explode('/',@$_POST['funadm']);
		$data="$d[2]-$d[1]-$d[0]";
		$this->set('funadm',$data);

		$odao=new modeldaoAluno();
		$odao->salvarAluno($o);
		$sit="DADOS SALVOS COM SUCESSO!!!";
		$this->telaAluno($o);
	}
	

}
?>