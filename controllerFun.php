<?php
require_once('modelben.php');
require_once('modeldao.php');
class controllerFun extends modelben{
	public function tela(modelben $o){
		require_once('index.php');
	}
	public function tela1(modelben $o){
		require_once('index.php');
	}
	public function telaFun(modelben $o){
		require_once('cadastroFun.php');
	}
	
	public function lista(modelben $o){
		$odao=new modeldao();
		$lista=$odao->lista($o);
		require_once('lista.php');
	}
	
	public function del(modelben $o){
		$this->set('funcod',$_GET['funcod']);
		$odao=new modeldao();
		$odao->del($o);
		$this->lista($o);
	}
	public function update(modelben $o){
		$this->set('funcod',$_GET['funcod']);
		$odao=new modeldao();
		$lista=$odao->especifico($o);
		require_once('cadastro.php');
	}
	public function calc(modelben $o){
		$this->set('funcod',@$_POST['funcod']);
		$this->set('funtel',@$_POST['funtel']);
		$this->set('funend',@$_POST['funend']);
		$this->set('funnome',@$_POST['funnome']);
		$this->set('funfuncao',@$_POST['funfuncao']);
		$d=explode('/',@$_POST['funadm']);
		$data="$d[2]-$d[1]-$d[0]";
		$this->set('funadm',$data);

		$odao=new modeldao();
		$odao->salvar($o);
		$sit="DADOS SALVOS COM SUCESSO!!!";
		$this->telaFun($o);
	}
	

}
?>