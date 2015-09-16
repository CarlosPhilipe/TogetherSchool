<?php
require_once('modelben.php');
require_once('modeldaoResponsavel.php');
class controllerResponsavel extends modelben{
	public function tela(modelben $o){
		require_once('index.php');
	}
	public function tela1(modelben $o){
		require_once('index.php');
	}
	public function telaResponsavel(modelben $o){
		require_once('cadastroResponsavel.php');
	}
	
	public function listaResponsavel(modelben $o){
		$odao=new modeldaoResponsavel();
		$listaResponsavel=$odao->listaResponsavel($o);
		require_once('listaResponsavel.php');
	}
	
	public function delResponsavel(modelben $o){
		$this->set('funcod',$_GET['funcod']);
		$odao=new modeldaoResponsavel();
		$odao->delResponsavel($o);
		$this->listaResponsavel($o);
	}
	public function updateResponsavel(modelben $o){
		$this->set('funcod',$_GET['funcod']);
		$odao=new modeldaoResponsavel();
		$listaResponsavel=$odao->especificoResponsavel($o);
		require_once('cadastroResponsavel.php');
	}
	public function calcResponsavel(modelben $o){
		$this->set('funcod',@$_POST['funcod']);
		$this->set('funtel',@$_POST['funtel']);
		$this->set('funend',@$_POST['funend']);
		$this->set('funnome',@$_POST['funnome']);
		$this->set('funfuncao',@$_POST['funfuncao']);
		$d=explode('/',@$_POST['funadm']);
		$data="$d[2]-$d[1]-$d[0]";
		$this->set('funadm',$data);

		$odao=new modeldaoResponsavel();
		$odao->salvarResponsavel($o);
		$sit="DADOS SALVOS COM SUCESSO!!!";
		$this->telaResponsavel($o);
	}
	

}
?>