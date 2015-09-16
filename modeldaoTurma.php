<?php
	require_once('controllerTurma.php');
	require_once('conection.php');
class modeldaoTurma extends conection{
	function __construct(){
		parent::__construct();
		$this->createtableTurma();
		
	}
	
	public function calcTurma(modelben $o){
		return $o->get('funcod');
	}
	public function especificoTurma(modelben $o){
		$query="select * from 
		funcionarios where funcod=".$o->get('funcod'); 
		
		$data=$this->o_db->query($query);
		$listaTurma=array();
		while($r=$data->fetchObject()){
			$c=new controllerTurma();
			$c->set('funcod',$r->funcod);
			$c->set('funtel',$r->funtel);
			$c->set('funend',$r->funend);
			$c->set('funnome',$r->funnome);
			$c->set('funadm',$r->funadm);
			$c->set('funfuncao',$r->funfuncao);
			// $c->set('qtd',$r->qtd);
			//$c->set('total',($r->qtd*11));
			array_push($listaTurma,$c);
		}
		return $listaTurma;
	}
	public function listaTurma(modelben $o){
		$query="select * from funcionarios";
		$data=$this->o_db->query($query);
		$listaTurma=array();
		while($r=$data->fetchObject()){
			$c=new controllerTurma();
			$c->set('funcod',$r->funcod);
			$c->set('funtel',$r->funtel);
			$c->set('funend',$r->funend);
			$c->set('funnome',$r->funnome);
			$c->set('funadm',$r->funadm);
			$c->set('funfuncao',$r->funfuncao);
			// $c->set('qtd',$r->qtd);
			// $c->set('total',($r->qtd*11));
			array_push($listaTurma,$c);
		}
		return $listaTurma;
	}
	public function delTurma(modelben $o){
	   $id=@$o->get('funcod');
		$exec="delete from funcionarios where funcod=$id";
		if($this->o_db->exec($exec)>0)
		 echo"deletado !!!";
		else
		echo"nao deletado !!!";
	}
	public function salvarTurma(modelben $o){
	   $id=@$o->get('funcod');
	   if(empty($id))
		$exec="insert into funcionarios(funtel,funend,funnome,funadm,funfuncao)
		values('".$o->get('funtel')."','".$o->get('funend')."','".$o->get('funnome')."','".$o->get('funadm')."','".$o->get('funfuncao')."')";
		
	   else
		$exec="update funcionarios set funnome='".$o->get('funnome')."',
		funtel='".$o->get('funtel')."',
		funend='".$o->get('funend')."',
		funadm='".$o->get('funadm')."',
		funfuncao='".$o->get('funfuncao')."'
		where funcod=$id";


		
		try{
			$this->o_db->exec($exec);
		}Catch(PDOException $e){
			throw $e;
		}
	}
	public function createtableTurma(){
		$exec="
		create table funcionarios(
		funcod int not null auto_increment primary key,
		funtel varchar(15),
		funend varchar(100),
		funnome varchar(100),
		funadm date,
		funfuncao varchar(15)
		)
		";
		try{
			$this->o_db->exec($exec);             
		}Catch(PDOException $e){
			throw $e;
		}
		
	}
}
?>