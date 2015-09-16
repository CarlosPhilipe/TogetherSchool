<?php
require_once('modelben.php');
require_once('modeldaoTurma.php');
class controllerTurma extends modelben{
	public function tela(modelben $o){
		require_once('index.php');
	}
	public function tela1(modelben $o){
		require_once('index.php');
	}
	public function telaTurma(modelben $o){
		require_once('cadastroTurma.php');
	}
	
	public function listaTurma(modelben $o){
		$odao=new modeldaoTurma();
		$listaTurma=$odao->listaTurma($o);
		require_once('listaTurma.php');
	}
	
	public function delTurma(modelben $o){
		$this->set('funcod',$_GET['funcod']);
		$odao=new modeldaoTurma();
		$odao->delTurma($o);
		$this->listaTurma($o);
	}
	public function updateTurma(modelben $o){
		$this->set('funcod',$_GET['funcod']);
		$odao=new modeldaoTurma();
		$listaTurma=$odao->especificoTurma($o);
		require_once('cadastroTurma.php');
	}
	public function calcTurma(modelben $o){
		$this->set('funcod',@$_POST['funcod']);
		$this->set('funtel',@$_POST['funtel']);
		$this->set('funend',@$_POST['funend']);
		$this->set('funnome',@$_POST['funnome']);
		$this->set('funfuncao',@$_POST['funfuncao']);
		$d=explode('/',@$_POST['funadm']);
		$data="$d[2]-$d[1]-$d[0]";
		$this->set('funadm',$data);

		$odao=new modeldaoTurma();
		$odao->salvarTurma($o);
		$sit="DADOS SALVOS COM SUCESSO!!!";
		$this->telaTurma($o);
	}
	

}
?>